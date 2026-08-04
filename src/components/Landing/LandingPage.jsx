import React from 'react';
import { Link } from 'react-router-dom';
import { Play, Github, Code, Layout, Globe } from 'lucide-react';
import './LandingPage.css';

function LandingPage() {
  return (
    <div className="landing-container">
      {/* Hero Section */}
      <section className="hero-section">
        <h1>DSA GeoVisualizer</h1>
        <p>
          Learn Data Structures and Algorithms through an interactive, visually stunning World Map. 
          See how technical concepts like Graphs, Linked Lists, and Shortest Paths translate to real-world geography.
        </p>
        <div className="cta-buttons">
          <Link to="/app" className="primary-btn">
            <Play size={20} />
            Launch Visualizer
          </Link>
          <a href="https://github.com" target="_blank" rel="noreferrer" className="secondary-btn">
            <Github size={20} />
            View Source
          </a>
        </div>
      </section>

      {/* Contribution Guidelines */}
      <section className="glass-panel content-section">
        <h2><Code size={28} /> How to Contribute</h2>
        <p>
          We've built this project with a highly decoupled architecture so that you can contribute new algorithms 
          without ever touching the UI or React state!
        </p>

        <h3>1. The Architecture</h3>
        <div className="feature-grid">
          <div className="feature-card">
            <h4><Code size={20} style={{marginRight: '8px', verticalAlign: 'middle'}}/> Algorithm Engine</h4>
            <p>Algorithms live in <code>src/algorithms/</code>. They are pure JavaScript functions that take data and return an array of "frames" (animation steps).</p>
          </div>
          <div className="feature-card">
            <h4><Layout size={20} style={{marginRight: '8px', verticalAlign: 'middle'}}/> UI & Visualizer</h4>
            <p>The React UI reads these frames using the <code>useAlgorithmVisualizer</code> hook and blindly animates them on the map. It doesn't know how the algorithm works.</p>
          </div>
          <div className="feature-card">
            <h4><Globe size={20} style={{marginRight: '8px', verticalAlign: 'middle'}}/> Geography Data</h4>
            <p>City coordinates and graph weights live in <code>src/data/cities.js</code>.</p>
          </div>
        </div>

        <h3>2. Adding a New Algorithm</h3>
        <p>To add a new algorithm (e.g., Breadth-First Search), simply create a file in <code>src/algorithms/</code>:</p>
        <div className="code-block">
{`export function generateBFSFrames(graph, startNode) {
  const frames = [];
  
  // Your logic here...
  // Push a new frame for every step you want to animate on the map
  frames.push({
    activeNode: 'dhaka',
    visitedNodes: ['dhaka'],
    edges: [{from: 'dhaka', to: 'dubai'}],
    description: "Checking neighbors of Dhaka"
  });

  return frames;
}`}
        </div>
        <p>
          Once your function is ready, simply import it into <code>Visualizer.jsx</code>, add a button in the Control Panel, and pass your generated frames to the custom hook. That's it!
        </p>
      </section>
    </div>
  );
}

export default LandingPage;
