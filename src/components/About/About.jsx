import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faMapMarkerAlt, faHeart, faUsers, faLightbulb } from '@fortawesome/free-solid-svg-icons';
import './About.css';

const About = () => {
  return (
    <div className="about-container">
      <div className="about-header">
        <h1>About Manchitra</h1>
        <p>Your guide to Durga Puja celebrations</p>
      </div>

      <div className="about-content">
        <section className="about-section">
          <h2>Our Mission</h2>
          <p>
            Manchitra is dedicated to making Durga Puja celebrations more accessible and enjoyable
            for everyone. We aim to connect people with the rich cultural heritage of Durga Puja
            by providing easy access to information about mandaps, locations, and celebrations.
          </p>
        </section>

        <section className="about-section">
          <h2>What We Offer</h2>
          <div className="features-grid">
            <div className="feature-item">
              <FontAwesomeIcon icon={faMapMarkerAlt} className="feature-icon" />
              <h3>Easy Navigation</h3>
              <p>Find mandaps near you with our interactive map and location-based search</p>
            </div>
            <div className="feature-item">
              <FontAwesomeIcon icon={faHeart} className="feature-icon" />
              <h3>Save Favorites</h3>
              <p>Keep track of your favorite mandaps for quick access</p>
            </div>
            <div className="feature-item">
              <FontAwesomeIcon icon={faUsers} className="feature-icon" />
              <h3>Community Driven</h3>
              <p>Join a community of Durga Puja enthusiasts</p>
            </div>
            <div className="feature-item">
              <FontAwesomeIcon icon={faLightbulb} className="feature-icon" />
              <h3>Smart Features</h3>
              <p>Get real-time updates and information about celebrations</p>
            </div>
          </div>
        </section>

        <section className="about-section">
          <h2>How to Use</h2>
          <div className="steps-container">
            <div className="step">
              <span className="step-number">1</span>
              <h3>Explore Mandaps</h3>
              <p>Browse through our comprehensive list of Durga Puja mandaps</p>
            </div>
            <div className="step">
              <span className="step-number">2</span>
              <h3>Find Locations</h3>
              <p>Use the map to find mandaps near your location</p>
            </div>
            <div className="step">
              <span className="step-number">3</span>
              <h3>Save Favorites</h3>
              <p>Add your favorite mandaps to your list for quick access</p>
            </div>
            <div className="step">
              <span className="step-number">4</span>
              <h3>Get Updates</h3>
              <p>Stay informed about timings and special events</p>
            </div>
          </div>
        </section>

        <section className="about-section">
          <h2>Contact Us</h2>
          <p>
            Have questions or suggestions? We'd love to hear from you!
            Reach out to us at <a href="mailto:contact@manchitra.com">contact@manchitra.com</a>
          </p>
        </section>
      </div>
    </div>
  );
};

export default About; 