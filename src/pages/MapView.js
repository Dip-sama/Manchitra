// src/pages/MapView.js
import React, { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import './MapView.css';

const MapView = ({ pandals }) => {
  const [mapLoaded, setMapLoaded] = useState(false);
  const [selectedPandal, setSelectedPandal] = useState(null);

  useEffect(() => {
    // In a real application, you would initialize your map here
    // using a library like Google Maps, Mapbox, or Leaflet
    const timeoutId = setTimeout(() => {
      setMapLoaded(true);
    }, 1000);

    return () => clearTimeout(timeoutId);
  }, []);

  return (
    <div className="map-view">
      <div className="map-container">
        {!mapLoaded ? (
          <div className="loading-map">Loading map...</div>
        ) : (
          <div className="map-placeholder">
            <p>Map View (In a real app, this would be an interactive map)</p>
            <div className="map-markers">
              {pandals.map(pandal => (
                <div 
                  key={pandal.id}
                  className="map-marker"
                  style={{ 
                    left: `${Math.random() * 80 + 10}%`, 
                    top: `${Math.random() * 80 + 10}%` 
                  }}
                  onClick={() => setSelectedPandal(pandal)}
                >
                  <span className="marker-dot"></span>
                </div>
              ))}
            </div>
          </div>
        )}
      </div>

      <div className="pandal-list-sidebar">
        <h2>Nearby Pandals</h2>
        <div className="pandal-list">
          {pandals.map(pandal => (
            <Link 
              to={`/pandal/${pandal.id}`} 
              key={pandal.id} 
              className={`pandal-list-item ${selectedPandal?.id === pandal.id ? 'selected' : ''}`}
              onClick={(e) => {
                e.preventDefault();
                setSelectedPandal(pandal);
              }}
            >
              <img src={pandal.imageUrl} alt={pandal.name} className="list-item-image" />
              <div className="list-item-info">
                <h3>{pandal.name}</h3>
                <p>{pandal.location}</p>
                <p>{pandal.distance} km away</p>
              </div>
            </Link>
          ))}
        </div>
      </div>

      {selectedPandal && (
        <div className="pandal-popup">
          <div className="popup-header">
            <h3>{selectedPandal.name}</h3>
            <button onClick={() => setSelectedPandal(null)}>×</button>
          </div>
          <div className="popup-content">
            <img src={selectedPandal.imageUrl} alt={selectedPandal.name} />
            <p>{selectedPandal.location}</p>
            <p>{selectedPandal.timings}</p>
            <div className="popup-actions">
              <Link to={`/pandal/${selectedPandal.id}`} className="view-details-btn">
                View Details
              </Link>
              <button className="directions-btn">Get Directions</button>
            </div>
          </div>
        </div>
      )}
    </div>
  );
};

export default MapView;