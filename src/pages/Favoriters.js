// src/pages/Favorites.js
import React from 'react';
import PandalCard from '../components/pandalcard';
import './Favorites.css';

const Favorites = ({ pandals, favorites, toggleFavorite }) => {
  const favoritePandals = pandals.filter(pandal => favorites.includes(pandal.id));

  return (
    <div className="favorites-page">
      <h1>Your Favorite Pandals</h1>
      
      {favoritePandals.length === 0 ? (
        <div className="no-favorites">
          <p>You haven't added any pandals to your favorites yet.</p>
          <p>Explore pandals and tap the heart icon to add them here.</p>
        </div>
      ) : (
        <div className="favorites-grid">
          {favoritePandals.map(pandal => (
            <PandalCard
              key={pandal.id}
              pandal={pandal}
              isFavorite={true}
              toggleFavorite={toggleFavorite}
            />
          ))}
        </div>
      )}
    </div>
  );
};

export default Favorites;
