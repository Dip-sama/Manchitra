// src/pages/PandalDetails.js
import React from 'react';
import { useParams, useNavigate } from 'react-router-dom';
import { Heart, MapPin, Clock, Phone, Globe, Star, ArrowLeft, Camera } from 'lucide-react';
import './PandalDetails.css';

const PandalDetails = ({ pandals, favorites, toggleFavorite }) => {
  const { id } = useParams();
  const navigate = useNavigate();
  const pandal = pandals.find(p => p.id.toString() === id);
  const isFavorite = favorites.includes(Number(id));

  if (!pandal) {
    return <div className="loading">Loading pandal details...</div>;
  }

  return (
    <div className="pandal-details">
      <div className="details-header">
        <button className="back-btn" onClick={() => navigate(-1)}>
          <ArrowLeft size={20} />
        </button>
        <h1>{pandal.name}</h1>
        <button 
          className={`favorite-btn ${isFavorite ? 'favorite' : ''}`}
          onClick={() => toggleFavorite(pandal.id)}
        >
          <Heart size={24} fill={isFavorite ? "red" : "none"} stroke={isFavorite ? "red" : "currentColor"} />
        </button>
      </div>

      <div className="pandal-gallery">
        <img src={pandal.imageUrl} alt={pandal.name} className="main-image" />
        <div className="gallery-thumbnails">
          {pandal.gallery && pandal.gallery.map((img, index) => (
            <img key={index} src={img} alt={`${pandal.name} ${index + 1}`} />
          ))}
        </div>
      </div>

      <div className="pandal-info-card">
        <div className="info-item">
          <MapPin size={20} />
          <p>{pandal.location}</p>
        </div>
        <div className="info-item">
          <Clock size={20} />
          <p>{pandal.timings}</p>
        </div>
        <div className="info-item rating">
          <Star size={20} fill="gold" />
          <p>{pandal.rating} ({pandal.reviewCount} reviews)</p>
        </div>
        {pandal.phone && (
          <div className="info-item">
            <Phone size={20} />
            <p>{pandal.phone}</p>
          </div>
        )}
        {pandal.website && (
          <div className="info-item">
            <Globe size={20} />
            <a href={pandal.website} target="_blank" rel="noopener noreferrer">{pandal.website}</a>
          </div>
        )}
      </div>

      <div className="pandal-description">
        <h2>About</h2>
        <p>{pandal.description}</p>
      </div>

      <div className="pandal-theme-section">
        <h2>Theme</h2>
        <p>{pandal.theme}</p>
        <p>{pandal.themeDescription}</p>
      </div>

      <div className="action-buttons">
        <button className="action-btn directions-btn">Get Directions</button>
        <button className="action-btn photo-btn">
          <Camera size={20} />
          <span>Add Photo</span>
        </button>
      </div>
    </div>
  );
};

export default PandalDetails;
