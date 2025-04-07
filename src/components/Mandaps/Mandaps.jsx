import React, { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHeart, faMapMarkerAlt, faClock, faInfoCircle } from '@fortawesome/free-solid-svg-icons';
import './Mandaps.css';

const Mandaps = () => {
  const [mandaps, setMandaps] = useState([]);
  const [loading, setLoading] = useState(true);
  const [favorites, setFavorites] = useState([]);

  useEffect(() => {
    // Simulated API call - replace with actual API call
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

    // Load favorites from localStorage
    const storedFavorites = localStorage.getItem('manchitra-favorites');
    if (storedFavorites) {
      setFavorites(JSON.parse(storedFavorites));
    }

    fetchMandaps();
  }, []);

  const toggleFavorite = (mandapId) => {
    let newFavorites;
    if (favorites.includes(mandapId)) {
      newFavorites = favorites.filter(id => id !== mandapId);
    } else {
      newFavorites = [...favorites, mandapId];
    }
    setFavorites(newFavorites);
    localStorage.setItem('manchitra-favorites', JSON.stringify(newFavorites));
  };

  if (loading) {
    return <div className="loading">Loading mandaps...</div>;
  }

  return (
    <div className="mandaps-container">
      <div className="mandaps-header">
        <h1>Durga Puja Mandaps</h1>
        <p>Discover and explore Durga Puja celebrations near you</p>
      </div>

      <div className="mandaps-grid">
        {mandaps.map((mandap) => (
          <div key={mandap.id} className="mandap-card">
            <div className="mandap-image">
              <img src={mandap.image} alt={mandap.name} />
              <button 
                className={`favorite-button ${favorites.includes(mandap.id) ? 'active' : ''}`}
                onClick={() => toggleFavorite(mandap.id)}
              >
                <FontAwesomeIcon icon={faHeart} />
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
    </div>
  );
};

export default Mandaps; 