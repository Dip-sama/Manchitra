import React from 'react'
import { Routes, Route } from 'react-router-dom'
import HomePage from './components/Home/HomePage'
import Map from './components/Map/Map'
import About from './components/About/About'
import Mandaps from './components/Mandaps/Mandaps'
import Favorites from './components/Favorites/Favorites'
import Navbar from './components/Navbar/Navbar'

const Allroutes = ({ userLocation, selectedDistance, setSelectedDistance }) => {
  return (
    <>
      <Navbar />
      <Routes>
        <Route path="/" element={<HomePage />} />
        <Route 
          path="/mandaps" 
          element={
            <Map 
              userLocation={userLocation}
              selectedDistance={selectedDistance}
              setSelectedDistance={setSelectedDistance}
            />
          } 
        />
        <Route path="/about" element={<About />} />
        <Route path="/mandap-list" element={<Mandaps />} />
        <Route path="/favorites" element={<Favorites />} />
      </Routes>
    </>
  )
}

export default Allroutes