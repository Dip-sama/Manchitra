// src/pages/Search.js
import React, { useState } from 'react';
import PandalCard from '../components/pandalcard';
import { Search as SearchIcon, Filter } from 'lucide-react';
import './Search.css';

const Search = ({ pandals, favorites, toggleFavorite }) => {
  const [searchQuery, setSearchQuery] = useState('');
  const [showFilters, setShowFilters] = useState(false);
  const [filters, setFilters] = useState({
    rating: 0,
    distance: 10,
  });

  const handleSearch = (e) => {
    setSearchQuery(e.target.value);
  };

  const handleFilterChange = (e) => {
    const { name, value } = e.target;
    setFilters({
      ...filters,
      [name]: value
    });
  };

  const filteredPandals = pandals.filter(pandal => {
    const matchesSearch = pandal.name.toLowerCase().includes(searchQuery.toLowerCase()) || 
                          pandal.location.toLowerCase().includes(searchQuery.toLowerCase()) ||
                          pandal.theme.toLowerCase().includes(searchQuery.toLowerCase());
    
    const matchesRating = pandal.rating >= filters.rating;
    const matchesDistance = pandal.distance <= filters.distance;
    
    return matchesSearch && matchesRating && matchesDistance;
  });

  return (
    <div className="search-page">
      <div className="search-header">
        <div className="search-bar">
          <SearchIcon size={20} />
          <input
            type="text"
            placeholder="Search pandals by name, location, or theme"
            value={searchQuery}
            onChange={handleSearch}
          />
        </div>
        <button 
          className="filter-toggle" 
          onClick={() => setShowFilters(!showFilters)}
        >
          <Filter size={20} />
        </button>
      </div>

      {showFilters && (
        <div className="filter-controls">
          <div className="filter-item">
            <label>Minimum Rating</label>
            <input
              type="range"
              min="0"
              max="5"
              step="0.5"
              name="rating"
              value={filters.rating}
              onChange={handleFilterChange}
            />
            <span>{filters.rating} ★</span>
          </div>
          <div className="filter-item">
            <label>Maximum Distance (km)</label>
            <input
              type="range"
              min="1"
              max="20"
              step="1"
              name="distance"
              value={filters.distance}
              onChange={handleFilterChange}
            />
            <span>{filters.distance} km</span>
          </div>
        </div>
      )}

      <div className="search-results">
        <h2>Search Results</h2>
        {filteredPandals.length === 0 ? (
          <div className="no-results">
            <p>No pandals found matching your search criteria.</p>
            <p>Try adjusting your search or filters.</p>
          </div>
        ) : (
          <div className="results-grid">
            {filteredPandals.map(pandal => (
              <PandalCard
                key={pandal.id}
                pandal={pandal}
                isFavorite={favorites.includes(pandal.id)}
                toggleFavorite={toggleFavorite}
              />
            ))}
          </div>
        )}
      </div>
    </div>
  );
};

export default Search;