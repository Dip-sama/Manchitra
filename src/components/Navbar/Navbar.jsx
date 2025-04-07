import React, { useState } from 'react';
import { Link, useLocation } from 'react-router-dom';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faBars, faTimes, faUser, faMapMarkerAlt, faList, faHeart } from '@fortawesome/free-solid-svg-icons';
import './Navbar.css';

const Navbar = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [isUserMenuOpen, setIsUserMenuOpen] = useState(false);
  const location = useLocation();

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen);
  };

  const toggleUserMenu = () => {
    setIsUserMenuOpen(!isUserMenuOpen);
  };

  const isActive = (path) => {
    return location.pathname === path;
  };

  return (
    <nav className="navbar">
      <div className="navbar-container">
        <Link to="/" className="navbar-logo">
          <FontAwesomeIcon icon={faMapMarkerAlt} className="logo-icon" />
          <div className="logo-text">
            <span className="english-text">Manchitra</span>
            <span className="bengali-text">মানচিত্র</span>
          </div>
        </Link>

        <div className={`navbar-menu ${isMenuOpen ? 'active' : ''}`}>
          <Link to="/" className={`nav-link ${isActive('/') ? 'active' : ''}`}>
            Home
          </Link>
          <Link to="/mandap-list" className={`nav-link ${isActive('/mandap-list') ? 'active' : ''}`}>
            {/* <FontAwesomeIcon icon={faList} className="nav-icon" /> */}
            Mandap List
          </Link>
          <Link to="/mandaps" className={`nav-link ${isActive('/mandaps') ? 'active' : ''}`}>
            {/* <FontAwesomeIcon icon={faMapMarkerAlt} className="nav-icon" /> */}
            Map View
          </Link>
          <Link to="/favorites" className={`nav-link ${isActive('/favorites') ? 'active' : ''}`}>
            {/* <FontAwesomeIcon icon={faHeart} className="nav-icon" /> */}
            Favorites
          </Link>
          <Link to="/about" className={`nav-link ${isActive('/about') ? 'active' : ''}`}>
            About
          </Link>
        </div>

        <div className="navbar-right">
          <div className="user-menu-container">
            <button className="user-menu-button" onClick={toggleUserMenu}>
              <FontAwesomeIcon icon={faUser} />
            </button>
            {isUserMenuOpen && (
              <div className="user-menu">
                <Link to="/profile" className="user-menu-item">Profile</Link>
                <Link to="/settings" className="user-menu-item">Settings</Link>
                <button className="user-menu-item logout">Logout</button>
              </div>
            )}
          </div>
          <button className="mobile-menu-button" onClick={toggleMenu}>
            <FontAwesomeIcon icon={isMenuOpen ? faTimes : faBars} />
          </button>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;