import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import LandingPage from './components/Landing/LandingPage';
import Visualizer from './components/Visualizer/Visualizer';
import './index.css';

function App() {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<LandingPage />} />
        <Route path="/app" element={<Visualizer />} />
      </Routes>
    </Router>
  );
}

export default App;
