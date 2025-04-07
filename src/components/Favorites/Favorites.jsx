import React, { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHeart, faMapMarkerAlt, faClock, faInfoCircle, faTrash } from '@fortawesome/free-solid-svg-icons';
import './Favorites.css';

const Favorites = () => {
  const [favorites, setFavorites] = useState([]);
  const [mandaps, setMandaps] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    // Load favorites from localStorage
    const storedFavorites = localStorage.getItem('manchitra-favorites');
    if (storedFavorites) {
      setFavorites(JSON.parse(storedFavorites));
    }

    // Fetch mandaps data
    const fetchMandaps = async () => {
      try {
        // Replace with actual API endpoint
        const response = await fetch('/api/mandaps');
        const data = await response.json();
        setMandaps(data);
        setLoading(false);
      } catch (error) {
        console.error('Error fetching mandaps:', error);
        setLoading(false);
      }
    };

    fetchMandaps();
  }, []);

  const removeFavorite = (mandapId) => {
    const newFavorites = favorites.filter(id => id !== mandapId);
    setFavorites(newFavorites);
    localStorage.setItem('manchitra-favorites', JSON.stringify(newFavorites));
  };

  const favoriteMandaps = mandaps.filter(mandap => favorites.includes(mandap.id));

  if (loading) {
    return <div className="loading">Loading favorites...</div>;
  }

  return (
    <div className="favorites-container">
      <div className="favorites-header">
        <h1>Your Favorite Mandaps</h1>
        <p>Quick access to your saved Durga Puja mandaps</p>
      </div>

      {favoriteMandaps.length === 0 ? (
        <div className="no-favorites">
          <FontAwesomeIcon icon={faHeart} className="empty-icon" />
          <h2>No Favorites Yet</h2>
          <p>Start exploring and add your favorite mandaps to this list</p>
          <Link to="/mandaps" className="explore-button">
            Explore Mandaps
          </Link>
        </div>
      ) : (
        <div className="favorites-grid">
          {favoriteMandaps.map((mandap) => (
            <div key={mandap.id} className="favorite-card">
              <div className="mandap-image">
                <img src={mandap.image} alt={mandap.name} />
                <button 
                  className="remove-favorite"
                  onClick={() => removeFavorite(mandap.id)}
                >
                  <FontAwesomeIcon icon={faTrash} />
                </button>
              </div>
              <div className="mandap-content">
                <h3>{mandap.name}</h3>
                <div className="mandap-info">
                  <p>
                    <FontAwesomeIcon icon={faMapMarkerAlt} />
                    {mandap.location}
                  </p>
                  <p>
                    <FontAwesomeIcon icon={faClock} />
                    {mandap.timing}
                  </p>
                </div>
                <p className="mandap-description">{mandap.description}</p>
                <div className="mandap-actions">
                  <Link to={`/mandap/${mandap.id}`} className="view-details">
                    <FontAwesomeIcon icon={faInfoCircle} />
                    View Details
                  </Link>
                  <Link to={`/map?mandap=${mandap.id}`} className="view-on-map">
                    <FontAwesomeIcon icon={faMapMarkerAlt} />
                    View on Map
                  </Link>
                </div>
              </div>
            </div>
          ))}
        </div>
      )}
    </div>
  );
};

export default Favorites; 