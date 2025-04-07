// src/pages/About.js
import React from 'react';
import './About.css';

const About = () => {
  return (
    <div className="about-page">
      <h1>About Manchitra</h1>
      
      <div className="about-section">
        <h2>Our Mission</h2>
        <p>
          Manchitra aims to make the Durga Puja experience more accessible and enjoyable 
          for everyone by providing a comprehensive guide to pandals across the city.
        </p>
      </div>

      <div className="about-section">
        <h2>Features</h2>
        <ul>
          <li>Discover trending and nearby Durga Puja pandals</li>
          <li>Get detailed information about each pandal's theme, timings, and location</li>
          <li>Save your favorite pandals for quick access</li>
          <li>Use the map view to plan your pandal-hopping route</li>
          <li>Search and filter pandals based on various criteria</li>
        </ul>
      </div>

      <div className="about-section">
        <h2>Contact Us</h2>
        <p>
          Have suggestions or feedback? We'd love to hear from you!
        </p>
        <p>Email: contact@manchitra.com</p>
        <p>Phone: +91 9876543210</p>
      </div>

      <div className="app-version">
        <p>Version 1.0.0</p>
      </div>
    </div>
  );
};

export default About;

// Mock API file - in a real app, this would be a server endpoint
// Create a file called "mockServiceWorker.js" in the public folder
// src/api/pandals.js
export const pandalData = [
  {
    id: 1,
    name: "Ekdalia Evergreen",
    location: "Ekdalia Road, Gariahat",
    distance: 2.3,
    timings: "6:00 AM - 11:00 PM",
    theme: "Ancient Egyptian Civilization",
    themeDescription: "This year's pandal is inspired by ancient Egyptian architecture featuring hieroglyphics, sphinx statues, and pyramid structures.",
    description: "One of Kolkata's most famous pandals, Ekdalia Evergreen Club is known for its grand structures and attention to detail. The pandal attracts thousands of visitors every year.",
    phone: "+91 9123456780",
    website: "https://ekdaliaevergreen.org",
    rating: 4.8,
    reviewCount: 1245,
    imageUrl: "/api/placeholder/400/300",
    gallery: [
      "/api/placeholder/400/300",
      "/api/placeholder/400/300",
      "/api/placeholder/400/300"
    ]
  },
  {
    id: 2,
    name: "Bagbazar Sarbojonin",
    location: "Bagbazar, North Kolkata",
    distance: 5.1,
    timings: "5:30 AM - 12:00 AM",
    theme: "Rural Bengal",
    themeDescription: "A nostalgic portrayal of rural Bengal with traditional huts, farming scenes, and folk art displays.",
    description: "Bagbazar Sarbojonin is one of the oldest community pujas in Kolkata. The pandal is known for its traditional approach and cultural significance.",
    phone: "+91 9123456781",
    rating: 4.6,
    reviewCount: 980,
    imageUrl: "/api/placeholder/400/300",
    gallery: [
      "/api/placeholder/400/300",
      "/api/placeholder/400/300"
    ]
  },
  {
    id: 3,
    name: "College Square",
    location: "College Street",
    distance: 4.2,
    timings: "6:00 AM - 1:00 AM",
    theme: "Underwater World",
    themeDescription: "An immersive experience showcasing marine life with displays of coral reefs, sea creatures, and sunken treasures.",
    description: "Famous for its stunning reflection in the adjacent lake, College Square pandal offers a unique visual experience with elaborate lighting arrangements.",
    rating: 4.7,
    reviewCount: 1120,
    imageUrl: "/api/placeholder/400/300",
    gallery: [
      "/api/placeholder/400/300",
      "/api/placeholder/400/300",
      "/api/placeholder/400/300"
    ]
  },
  {
    id: 4,
    name: "Santosh Mitra Square",
    location: "Lebutala Park, Central Kolkata",
    distance: 3.7,
    timings: "5:00 AM - 2:00 AM",
    theme: "Varanasi Ghats",
    themeDescription: "A recreation of the sacred ghats of Varanasi with detailed replicas of temples and the flowing Ganges.",
    description: "Known for its grand scale and innovative themes, Santosh Mitra Square attracts huge crowds for its spectacular idol and decorations.",
    phone: "+91 9123456782",
    website: "https://santoshsquare.com",
    rating: 4.5,
    reviewCount: 870,
    imageUrl: "/api/placeholder/400/300",
    gallery: [
      "/api/placeholder/400/300",
      "/api/placeholder/400/300"
    ]
  },
  {
    id: 5,
    name: "Suruchi Sangha",
    location: "New Alipore",
    distance: 6.8,
    timings: "6:30 AM - 11:30 PM",
    theme: "Rajasthani Architecture",
    themeDescription: "Featuring intricate designs inspired by the majestic palaces and forts of Rajasthan with traditional mirror work and colorful decorations.",
    description: "Multiple award-winning pandal known for its artistic excellence and creative themes. Suruchi Sangha is a must-visit for art enthusiasts.",
    rating: 4.9,
    reviewCount: 1380,
    imageUrl: "/api/placeholder/400/300",
    gallery: [
      "/api/placeholder/400/300",
      "/api/placeholder/400/300",
      "/api/placeholder/400/300"
    ]
  },
  {
    id: 6,
    name: "Mohammad Ali Park",
    location: "Central Avenue",
    distance: 5.5,
    timings: "5:30 AM - 12:30 AM",
    theme: "Meenakshi Temple",
    themeDescription: "A detailed replica of the famous Meenakshi Temple from Madurai with its colorful gopurams and sculptures.",
    description: "One of central Kolkata's famous pandals, Mohammad Ali Park is known for recreating famous structures from around the world.",
    phone: "+91 9123456783",
    rating: 4.4,
    reviewCount: 760,
    imageUrl: "/api/placeholder/400/300",
    gallery: [
      "/api/placeholder/400/300",
      "/api/placeholder/400/300"
    ]
  },
  {
    id: 7,
    name: "Kumartuli Park",
    location: "Kumartuli, North Kolkata",
    distance: 7.2,
    timings: "6:00 AM - 11:00 PM",
    theme: "Artisans of Bengal",
    themeDescription: "Paying homage to the traditional artisans of Bengal, showcasing various crafts and art forms.",
    description: "Located in the traditional potter's quarter, this pandal has special significance as it represents the area where most Durga idols are crafted.",
    rating: 4.6,
    reviewCount: 890,
    imageUrl: "/api/placeholder/400/300",
    gallery: [
      "/api/placeholder/400/300",
      "/api/placeholder/400/300"
    ]
  },
  {
    id: 8,
    name: "Ballygunge Cultural",
    location: "Maddox Square, South Kolkata",
    distance: 1.9,
    timings: "6:30 AM - 12:00 AM",
    theme: "South Indian Temples",
    themeDescription: "A beautiful recreation of Dravidian temple architecture with detailed carvings and traditional motifs.",
    description: "Known for its elegant decorations and cultural programs, Ballygunge Cultural attracts a more sophisticated crowd and art lovers.",
    phone: "+91 9123456784",
    website: "https://ballygungecultural.org",
    rating: 4.7,
    reviewCount: 950,
    imageUrl: "/api/placeholder/400/300",
    gallery: [
      "/api/placeholder/400/300",
      "/api/placeholder/400/300",
      "/api/placeholder/400/300"
    ]
  }
];
