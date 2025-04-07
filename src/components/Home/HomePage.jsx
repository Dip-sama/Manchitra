import { Link } from 'react-router-dom';
import { useEffect, useState } from 'react';
import './HomePage.css';
import Navbar from '../Navbar/Navbar';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faMapMarkerAlt, faCompass, faInfoCircle, faHeart } from '@fortawesome/free-solid-svg-icons';

const HomePage = () => {
  const [showLocationPrompt, setShowLocationPrompt] = useState(true);

  useEffect(() => {
    const hasSeenPrompt = localStorage.getItem('locationPromptSeen');
    if (hasSeenPrompt) {
      setShowLocationPrompt(false);
    }
  }, []);

  const handleLocationPermission = () => {
    if ("geolocation" in navigator) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          console.log("Location access granted");
          localStorage.setItem('locationPromptSeen', 'true');
          setShowLocationPrompt(false);
        },
        (error) => {
          console.error("Error getting location:", error);
        }
      );
    }
  };

  return (
    <div className="home-page">
      <Navbar />
      {showLocationPrompt && (
        <div className="location-prompt">
          <div className="prompt-content">
            <h3>Enable Location Services</h3>
            <p>Allow Manchitra to access your location for better experience</p>
            <button onClick={handleLocationPermission}>Enable Location</button>
          </div>
        </div>
      )}

      <div className="hero-section">
        <div className="hero-overlay">
          <div className="hero-content">
            <h1>Discover Durga Puja Mandaps</h1>
            <p>Navigate through the festive celebrations with ease</p>
            <div className="cta-buttons">
              <Link to="/mandaps" className="cta-button primary">
                Find Mandaps Near You
              </Link>
              <Link to="/services" className="cta-button secondary">
                Explore Nearby Services
              </Link>
            </div>
          </div>
        </div>
      </div>

      <div className="features-section">
        <h2>Key Features</h2>
        <div className="features-grid">
          <div className="feature-card">
            <FontAwesomeIcon icon={faMapMarkerAlt} className="feature-icon" />
            <h3>Locate Mandaps</h3>
            <p>Find all Durga Puja mandaps near you with real-time location tracking</p>
          </div>
          <div className="feature-card">
            <FontAwesomeIcon icon={faCompass} className="feature-icon" />
            <h3>Navigation</h3>
            <p>Get turn-by-turn directions to your chosen mandap with ease</p>
          </div>
          <div className="feature-card">
            <FontAwesomeIcon icon={faInfoCircle} className="feature-icon" />
            <h3>Detailed Information</h3>
            <p>Access comprehensive details about each mandap, including timings and facilities</p>
          </div>
          <div className="feature-card">
            <FontAwesomeIcon icon={faHeart} className="feature-icon" />
            <h3>Favorites</h3>
            <p>Save your favorite mandaps for quick access and updates</p>
          </div>
        </div>
      </div>
    </div>
  );
};

export default HomePage;