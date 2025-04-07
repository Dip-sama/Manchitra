// src/App.js
import React from 'react';
import { BrowserRouter as Router } from 'react-router-dom';
import Allroutes from './Allroutes';

function App() {
  return (
    <Router>
      <div className="min-h-screen bg-gray-100">
        <Allroutes />
      </div>
    </Router>
  );
}

export default App;