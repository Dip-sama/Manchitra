import React, { useState, useEffect } from 'react';
import { MapContainer, TileLayer, Marker, Popup } from 'react-leaflet';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faMapMarkerAlt, faInfoCircle } from '@fortawesome/free-solid-svg-icons';
import 'leaflet/dist/leaflet.css';
import './MapView.css';

const MapView = () => {
  const [mandaps, setMandaps] = useState([]);
  const [loading, setLoading] = useState(true);
  const [selectedMandap, setSelectedMandap] = useState(null);
  const [userLocation, setUserLocation] = useState(null);

  useEffect(() => {
    // Fetch mandaps data
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

    // Get user's location
    if ("geolocation" in navigator) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          setUserLocation({
            lat: position.coords.latitude,
            lng: position.coords.longitude
          });
        },
        (error) => {
          console.error("Error getting location:", error);
        }
      );
    }

    fetchMandaps();
  }, []);

  if (loading) {
    return <div className="loading">Loading map...</div>;
  }

  return (
    <div className="map-container">
      <div className="map-header">
        <h1>Mandap Locations</h1>
        <p>Find Durga Puja mandaps near you on the map</p>
      </div>

      <div className="map-wrapper">
        <MapContainer
          center={userLocation || [22.5726, 88.3639]} // Default to Kolkata coordinates
          zoom={13}
          style={{ height: "600px", width: "100%" }}
        >
          <TileLayer
            url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
            attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          />

          {/* User Location Marker */}
          {userLocation && (
            <Marker position={[userLocation.lat, userLocation.lng]}>
              <Popup>
                <div className="user-location-popup">
                  <h3>Your Location</h3>
                  <p>You are here</p>
                </div>
              </Popup>
            </Marker>
          )}

          {/* Mandap Markers */}
          {mandaps.map((mandap) => (
            <Marker
              key={mandap.id}
              position={[mandap.latitude, mandap.longitude]}
              eventHandlers={{
                click: () => setSelectedMandap(mandap),
              }}
            >
              <Popup>
                <div className="mandap-popup">
                  <h3>{mandap.name}</h3>
                  <p>{mandap.location}</p>
                  <p>{mandap.timing}</p>
                  <button className="view-details-button">
                    <FontAwesomeIcon icon={faInfoCircle} />
                    View Details
                  </button>
                </div>
              </Popup>
            </Marker>
          ))}
        </MapContainer>
      </div>

      {selectedMandap && (
        <div className="selected-mandap-info">
          <h2>{selectedMandap.name}</h2>
          <p>{selectedMandap.description}</p>
          <div className="mandap-details">
            <p>
              <FontAwesomeIcon icon={faMapMarkerAlt} />
              {selectedMandap.location}
            </p>
            <p>{selectedMandap.timing}</p>
          </div>
        </div>
      )}
    </div>
  );
};

export default MapView; 