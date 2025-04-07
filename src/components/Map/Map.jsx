import { useEffect } from 'react';
import { MapContainer, TileLayer, Marker, Popup } from 'react-leaflet';
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';
import './Map.css';

// Custom icons for different marker types
const createCustomIcon = (iconUrl, size = [25, 41]) => {
  return L.icon({
    iconUrl,
    iconSize: size,
    iconAnchor: [size[0] / 2, size[1]],
    popupAnchor: [0, -size[1]]
  });
};

const Map = ({ userLocation, mandaps, services }) => {
  const mandapIcon = createCustomIcon('/images/mandap-marker.png');
  const serviceIcon = createCustomIcon('/images/service-marker.png');
  const userIcon = createCustomIcon('/images/user-marker.png', [30, 30]);

  useEffect(() => {
    // Fix for marker icons in production
    delete L.Icon.Default.prototype._getIconUrl;
    L.Icon.Default.mergeOptions({
      iconRetinaUrl: require('leaflet/dist/images/marker-icon-2x.png'),
      iconUrl: require('leaflet/dist/images/marker-icon.png'),
      shadowUrl: require('leaflet/dist/images/marker-shadow.png'),
    });
  }, []);

  if (!userLocation) return (
    <div className="loading-container">
      <div className="loading-spinner"></div>
      <p>Loading map...</p>
    </div>
  );

  return (
    <MapContainer
      center={[userLocation.lat, userLocation.lng]}
      zoom={13}
      className="map-container"
    >
      <TileLayer
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
        attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
      />
      
      {/* User location marker */}
      <Marker position={[userLocation.lat, userLocation.lng]} icon={userIcon}>
        <Popup className="custom-popup">
          <div className="popup-content">
            <h3>Your Location</h3>
          </div>
        </Popup>
      </Marker>
      
      {/* Mandap markers */}
      {mandaps?.map((mandap) => (
        <Marker 
          key={mandap.id} 
          position={[mandap.location.lat, mandap.location.lng]}
          icon={mandapIcon}
        >
          <Popup className="custom-popup">
            <div className="popup-content mandap-popup">
              <h3>{mandap.name}</h3>
              <div className="popup-details">
                <p><strong>Theme:</strong> {mandap.theme}</p>
                <p><strong>Crowd:</strong> {mandap.crowdDensity}</p>
                <p><strong>Timings:</strong> {mandap.timings}</p>
              </div>
              <button className="directions-btn" onClick={() => window.open(`https://www.google.com/maps/dir/?api=1&destination=${mandap.location.lat},${mandap.location.lng}`)}>
                Get Directions
              </button>
            </div>
          </Popup>
        </Marker>
      ))}
      
      {/* Service markers */}
      {services?.map((service) => (
        <Marker 
          key={service.id} 
          position={[service.location.lat, service.location.lng]}
          icon={serviceIcon}
        >
          <Popup className="custom-popup">
            <div className="popup-content service-popup">
              <h3>{service.name}</h3>
              <div className="popup-details">
                <p><strong>Type:</strong> {service.type}</p>
                <p>{service.address}</p>
              </div>
              <button className="directions-btn" onClick={() => window.open(`https://www.google.com/maps/dir/?api=1&destination=${service.location.lat},${service.location.lng}`)}>
                Get Directions
              </button>
            </div>
          </Popup>
        </Marker>
      ))}
    </MapContainer>
  );
};

export default Map;