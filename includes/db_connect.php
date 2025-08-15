<?php
/*
Database Connection Configuration
Replace with your actual database credentials.
*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'manchitra_db');

// Attempt to connect to MySQL server
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($conn->connect_error){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
if(!$conn->query($sql)){
    die("ERROR: Could not create database " . $conn->error);
}

// Select the database
$conn->select_db(DB_NAME);

// SQL to create users table
$users_table_sql = "
CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    profile_picture VARCHAR(255) DEFAULT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);";

if(!$conn->query($users_table_sql)){
    die("ERROR: Could not create table 'users'. " . $conn->error);
}

// SQL to create mandaps table
$mandaps_table_sql = "
CREATE TABLE IF NOT EXISTS mandaps (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(200) NOT NULL,
    address TEXT NOT NULL,
    description TEXT,
    latitude DECIMAL(10, 8) DEFAULT NULL,
    longitude DECIMAL(11, 8) DEFAULT NULL,
    rating DECIMAL(3, 2) DEFAULT 0.00,
    total_ratings INT DEFAULT 0,
    image_url VARCHAR(255) DEFAULT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);";

if(!$conn->query($mandaps_table_sql)){
    die("ERROR: Could not create table 'mandaps'. " . $conn->error);
}

// SQL to create events table
$events_table_sql = "
CREATE TABLE IF NOT EXISTS events (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    mandap_id INT,
    event_date DATE NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (mandap_id) REFERENCES mandaps(id) ON DELETE SET NULL
);";

if(!$conn->query($events_table_sql)){
    die("ERROR: Could not create table 'events'. " . $conn->error);
}

// SQL to create user_favorites table
$favorites_table_sql = "
CREATE TABLE IF NOT EXISTS user_favorites (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    mandap_id INT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (mandap_id) REFERENCES mandaps(id) ON DELETE CASCADE,
    UNIQUE KEY unique_user_mandap (user_id, mandap_id)
);";

if(!$conn->query($favorites_table_sql)){
    die("ERROR: Could not create table 'user_favorites'. " . $conn->error);
}

// Insert sample mandaps data
$sample_mandaps = [
    ['Durga Puja Mandap A', '123 Puja Lane, Kolkata', 'Beautiful traditional mandap with modern amenities', 22.5726, 88.3639, 4.5, 120],
    ['Festival Mandap B', '456 Festival Road, Kolkata', 'Grand celebration venue with cultural programs', 22.5726, 88.3639, 4.3, 95],
    ['Cultural Center C', '789 Celebration Avenue, Kolkata', 'Center for cultural performances and events', 22.5726, 88.3639, 4.7, 150],
    ['Community Mandap D', '101 Festive Street, Kolkata', 'Community gathering place for celebrations', 22.5726, 88.3639, 4.2, 80]
];

foreach($sample_mandaps as $mandap) {
    $check_sql = "SELECT id FROM mandaps WHERE name = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $mandap[0]);
    $check_stmt->execute();
    $result = $check_stmt->get_result();
    
    if($result->num_rows == 0) {
        $insert_sql = "INSERT INTO mandaps (name, address, description, latitude, longitude, rating, total_ratings) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param("sssddii", $mandap[0], $mandap[1], $mandap[2], $mandap[3], $mandap[4], $mandap[5], $mandap[6]);
        $insert_stmt->execute();
    }
    $check_stmt->close();
}

// Insert sample events data
$sample_events = [
    ['Cultural Performance', 'Traditional dance and music performances', 1, '2024-10-15', '19:00:00', '21:00:00'],
    ['Aarti Ceremony', 'Evening aarti with traditional rituals', 1, '2024-10-15', '20:00:00', '22:00:00'],
    ['Bhajan Session', 'Devotional songs and bhajans', 2, '2024-10-16', '18:00:00', '20:00:00'],
    ['Prasad Distribution', 'Distribution of blessed prasad', 2, '2024-10-16', '19:30:00', '21:30:00']
];

foreach($sample_events as $event) {
    $check_sql = "SELECT id FROM events WHERE title = ? AND event_date = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("ss", $event[0], $event[2]);
    $check_stmt->execute();
    $result = $check_stmt->get_result();
    
    if($result->num_rows == 0) {
        $insert_sql = "INSERT INTO events (title, description, mandap_id, event_date, start_time, end_time) VALUES (?, ?, ?, ?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param("ssisss", $event[0], $event[1], $event[2], $event[3], $event[4], $event[5]);
        $insert_stmt->execute();
    }
    $check_stmt->close();
}
?>
