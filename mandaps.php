<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Include database connection
require_once "includes/db_connect.php";

$user_id = $_SESSION["id"];

// Handle favorite/unfavorite action
if(isset($_POST['action']) && isset($_POST['mandap_id'])) {
    $mandap_id = $_POST['mandap_id'];
    $action = $_POST['action'];
    
    if($action == 'add_favorite') {
        $sql = "INSERT IGNORE INTO user_favorites (user_id, mandap_id) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $user_id, $mandap_id);
        $stmt->execute();
    } elseif($action == 'remove_favorite') {
        $sql = "DELETE FROM user_favorites WHERE user_id = ? AND mandap_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $user_id, $mandap_id);
        $stmt->execute();
    }
    
    // Redirect to prevent form resubmission
    header("Location: mandaps.php");
    exit;
}

// Search functionality
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';

// Build the query based on search and filter
$where_conditions = [];
$params = [];
$param_types = "";

if(!empty($search)) {
    $where_conditions[] = "(m.name LIKE ? OR m.address LIKE ? OR m.description LIKE ?)";
    $search_param = "%$search%";
    $params[] = $search_param;
    $params[] = $search_param;
    $params[] = $search_param;
    $param_types .= "sss";
}

if($filter == 'favorites') {
    $where_conditions[] = "uf.user_id = ?";
    $params[] = $user_id;
    $param_types .= "i";
}

$where_clause = !empty($where_conditions) ? "WHERE " . implode(" AND ", $where_conditions) : "";

// Get mandaps with favorite status
$sql = "SELECT m.*, 
        CASE WHEN uf.user_id IS NOT NULL THEN 1 ELSE 0 END as is_favorite,
        COUNT(DISTINCT uf2.user_id) as favorite_count
        FROM mandaps m 
        LEFT JOIN user_favorites uf ON m.id = uf.mandap_id AND uf.user_id = ?
        LEFT JOIN user_favorites uf2 ON m.id = uf2.mandap_id
        $where_clause
        GROUP BY m.id
        ORDER BY m.rating DESC, m.total_ratings DESC";

$stmt = $conn->prepare($sql);

// Bind parameters
if(!empty($params)) {
    $stmt->bind_param($param_types, ...$params);
}

$stmt->execute();
$result = $stmt->get_result();
$mandaps = $result->fetch_all(MYSQLI_ASSOC);

// Get user's favorite mandaps for the sidebar
$favorites_sql = "SELECT m.* FROM mandaps m 
                  INNER JOIN user_favorites uf ON m.id = uf.mandap_id 
                  WHERE uf.user_id = ? 
                  ORDER BY uf.created_at DESC 
                  LIMIT 5";
$favorites_stmt = $conn->prepare($favorites_sql);
$favorites_stmt->bind_param("i", $user_id);
$favorites_stmt->execute();
$favorites_result = $favorites_stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandaps - Manchitra</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .search-container {
            background: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.07);
        }
        
        .search-form {
            display: flex;
            gap: 15px;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .search-input {
            flex: 1;
            min-width: 200px;
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }
        
        .filter-select {
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            background: white;
        }
        
        .search-btn {
            padding: 12px 24px;
            background: #1877f2;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .mandap-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.07);
            transition: transform 0.2s;
        }
        
        .mandap-card:hover {
            transform: translateY(-2px);
        }
        
        .mandap-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .mandap-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }
        
        .mandap-address {
            color: #666;
            font-size: 14px;
        }
        
        .favorite-btn {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #ccc;
            transition: color 0.2s;
        }
        
        .favorite-btn.favorited {
            color: #ff6b6b;
        }
        
        .mandap-description {
            color: #555;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .mandap-stats {
            display: flex;
            gap: 20px;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .rating {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .stars {
            color: #feca57;
        }
        
        .rating-text {
            color: #666;
            font-size: 14px;
        }
        
        .favorite-count {
            color: #666;
            font-size: 14px;
        }
        
        .mandap-actions {
            display: flex;
            gap: 10px;
        }
        
        .action-btn {
            padding: 8px 16px;
            border: 1px solid #ddd;
            background: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.2s;
        }
        
        .action-btn:hover {
            background: #f5f5f5;
        }
        
        .action-btn.primary {
            background: #1877f2;
            color: white;
            border-color: #1877f2;
        }
        
        .action-btn.primary:hover {
            background: #166fe5;
        }
        
        .no-results {
            text-align: center;
            padding: 40px;
            color: #666;
        }
    </style>
</head>
<body class="site-view">
    <?php include 'includes/header.php'; ?>
    
    <div class="page-container">
        <div class="search-container">
            <form method="GET" class="search-form">
                <input type="text" name="search" placeholder="Search mandaps..." 
                       value="<?php echo htmlspecialchars($search); ?>" class="search-input">
                <select name="filter" class="filter-select">
                    <option value="all" <?php echo $filter == 'all' ? 'selected' : ''; ?>>All Mandaps</option>
                    <option value="favorites" <?php echo $filter == 'favorites' ? 'selected' : ''; ?>>My Favorites</option>
                </select>
                <button type="submit" class="search-btn">Search</button>
            </form>
        </div>
        
        <div class="content-search">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search for mandaps..." id="liveSearch">
        </div>
        
        <div class="filter-pills">
            <button class="active">All</button>
            <button>Nearby</button>
            <button>Top Rated</button>
            <button>Popular</button>
        </div>
        
        <div class="place-list">
            <?php if(empty($mandaps)): ?>
                <div class="no-results">
                    <h3>No mandaps found</h3>
                    <p><?php echo !empty($search) ? 'Try adjusting your search terms.' : 'No mandaps available at the moment.'; ?></p>
                </div>
            <?php else: ?>
                <?php foreach($mandaps as $mandap): ?>
                    <div class="place-item mandap-card">
                        <div class="mandap-header">
                            <div>
                                <h3 class="mandap-title"><?php echo htmlspecialchars($mandap['name']); ?></h3>
                                <p class="mandap-address"><?php echo htmlspecialchars($mandap['address']); ?></p>
                            </div>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="mandap_id" value="<?php echo $mandap['id']; ?>">
                                <input type="hidden" name="action" value="<?php echo $mandap['is_favorite'] ? 'remove_favorite' : 'add_favorite'; ?>">
                                <button type="submit" class="favorite-btn <?php echo $mandap['is_favorite'] ? 'favorited' : ''; ?>">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </form>
                        </div>
                        
                        <p class="mandap-description"><?php echo htmlspecialchars($mandap['description']); ?></p>
                        
                        <div class="mandap-stats">
                            <div class="rating">
                                <div class="stars">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <i class="fas fa-star<?php echo $i <= $mandap['rating'] ? '' : '-o'; ?>"></i>
                                    <?php endfor; ?>
                                </div>
                                <span class="rating-text"><?php echo number_format($mandap['rating'], 1); ?> (<?php echo $mandap['total_ratings']; ?> reviews)</span>
                            </div>
                            <div class="favorite-count">
                                <i class="fas fa-heart"></i> <?php echo $mandap['favorite_count']; ?> favorites
                            </div>
                        </div>
                        
                        <div class="mandap-actions">
                            <button class="action-btn primary" onclick="viewDetails(<?php echo $mandap['id']; ?>)">View Details</button>
                            <button class="action-btn" onclick="getDirections(<?php echo $mandap['latitude']; ?>, <?php echo $mandap['longitude']; ?>)">Get Directions</button>
                            <?php if($mandap['is_favorite']): ?>
                                <button class="action-btn" onclick="removeFavorite(<?php echo $mandap['id']; ?>)">Remove from Favorites</button>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    
    <script>
        function viewDetails(mandapId) {
            // Redirect to mandap details page
            window.location.href = 'mandap_details.php?id=' + mandapId;
        }
        
        function getDirections(lat, lng) {
            // Open Google Maps with directions
            window.open(`https://www.google.com/maps/dir/?api=1&destination=${lat},${lng}`, '_blank');
        }
        
        function removeFavorite(mandapId) {
            if(confirm('Remove this mandap from favorites?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.innerHTML = `
                    <input type="hidden" name="mandap_id" value="${mandapId}">
                    <input type="hidden" name="action" value="remove_favorite">
                `;
                document.body.appendChild(form);
                form.submit();
            }
        }
        
        // Live search functionality
        document.getElementById('liveSearch').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const mandaps = document.querySelectorAll('.mandap-card');
            
            mandaps.forEach(mandap => {
                const title = mandap.querySelector('.mandap-title').textContent.toLowerCase();
                const address = mandap.querySelector('.mandap-address').textContent.toLowerCase();
                const description = mandap.querySelector('.mandap-description').textContent.toLowerCase();
                
                if(title.includes(searchTerm) || address.includes(searchTerm) || description.includes(searchTerm)) {
                    mandap.style.display = 'block';
                } else {
                    mandap.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html> 