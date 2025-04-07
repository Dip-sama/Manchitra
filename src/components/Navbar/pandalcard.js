// src/components/PandalCard.js
import React from 'react';
import { Link } from 'react-router-dom';
import { Heart, MapPin, Clock, Star } from 'lucide-react';
import './PandalCard.css';

const PandalCard = ({ pandal, isFavorite, toggleFavorite }) => {
  if (!pandal) return null;
  
  return (
    <div className="pandal-card">
      <img src={pandal.imageUrl} alt={pandal.name} className="pandal-image" />
      <div className="pandal-content">
        <div className="pandal-header">
          <h3>{pandal.name}</h3>
          <button 
            className={`favorite-btn ${isFavorite ? 'favorite' : ''}`}
            onClick={(e) => {
              e.preventDefault();
              toggleFavorite(pandal.id);
            }}
          >
            <Heart size={18} fill={isFavorite ? "red" : "none"} stroke={isFavorite ? "red" : "currentColor"} />
          </button>
        </div>
        <div className="pandal-info">
          <p><MapPin size={14} /> {pandal.location}</p>
          <p><Clock size={14} /> {pandal.timings}</p>
          <div className="rating">
            <Star size={14} fill="gold" />
            <span>{pandal.rating} ({pandal.reviewCount})</span>
          </div>
        </div>
        <div className="pandal-theme">
          <p>Theme: {pandal.theme}</p>
        </div>
        <Link to={`/pandal/${pandal.id}`} className="view-details-btn">
          View Details
        </Link>
      </div>
    </div>
  );
};

export default PandalCard;