// src/pages/Home.js
import React from 'react';
import PandalCard from '../components/pandalcard';
import './Home.css';

const Home = ({ pandals, loading, favorites, toggleFavorite }) => {
  if (loading) {
    return <div className="loading">Loading pandals...</div>;
  }

  const trendingPandals = pandals
    .sort((a, b) => b.rating - a.rating)
    .slice(0, 5);

  const nearbyPandals = pandals
    .sort((a, b) => a.distance - b.distance)
    .slice(0, 5);

  return (
    <div className="home">
      <div className="hero-section">
        <h1>Discover Durga Puja Pandals</h1>
        <p>Explore the most beautiful and creative pandals this Durga Puja season</p>
      </div>

      <section className="pandal-section">
        <h2>Trending Pandals</h2>
        <div className="pandals-grid">
          {trendingPandals.map(pandal => (
            <PandalCard
              key={pandal.id}
              pandal={pandal}
              isFavorite={favorites.includes(pandal.id)}
              toggleFavorite={toggleFavorite}
            />
          ))}
        </div>
      </section>

      <section className="pandal-section">
        <h2>Nearby Pandals</h2>
        <div className="pandals-grid">
          {nearbyPandals.map(pandal => (
            <PandalCard
              key={pandal.id}
              pandal={pandal}
              isFavorite={favorites.includes(pandal.id)}
              toggleFavorite={toggleFavorite}
            />
          ))}
        </div>
      </section>
    </div>
  );
};

export default Home;