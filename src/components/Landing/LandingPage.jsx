import React from 'react';
import { Link } from 'react-router-dom';
import { Play, GitBranch, Code, Layout, Globe, MonitorPlay, Zap, Map as MapIcon, Share2, Layers, Compass } from 'lucide-react';
import './LandingPage.css';

function LandingPage() {
  const scrollToDemo = () => {
    document.getElementById('demo-preview')?.scrollIntoView({ behavior: 'smooth' });
  };

  return (
    <div className="landing-container">
      {/* Hero Section */}
      <section className="hero-section">
        <div className="hero-badge">Open Source Educational Project</div>
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
          <button onClick={scrollToDemo} className="secondary-btn">
            <MonitorPlay size={20} />
            View Demo
          </button>
          <a href="https://github.com/diusazzad/" target="_blank" rel="noreferrer" className="secondary-btn">
            <GitBranch size={20} />
            Source
          </a>
        </div>
      </section>

      {/* Preview/Demo Section */}
      <section id="demo-preview" className="preview-section">
        <div className="glass-panel preview-container">
          <div className="preview-header">
            <div className="dots">
              <span className="dot red"></span>
              <span className="dot yellow"></span>
              <span className="dot green"></span>
            </div>
            <span className="preview-title">Visualizer Live Demo</span>
          </div>
          <div className="preview-content">
            {/* Placeholder for GIF or Video */}
            <div className="demo-placeholder">
              <MapIcon size={48} color="var(--primary)" style={{ opacity: 0.5, marginBottom: '16px' }} />
              <h3>Interactive Map Preview</h3>
              <p>Add your screen-recorded GIF here!</p>
            </div>
          </div>
        </div>
      </section>

      {/* Features Section */}
      <section className="features-section">
        <h2 className="section-title">Why DSA GeoVisualizer?</h2>
        <div className="feature-grid">
          <div className="glass-panel feature-card">
            <div className="icon-wrapper"><Globe size={24} color="var(--primary)" /></div>
            <h4>Interactive Map</h4>
            <p>Learn visually on an interactive world map instead of boring whiteboards or consoles.</p>
          </div>
          <div className="glass-panel feature-card">
            <div className="icon-wrapper"><Zap size={24} color="var(--accent)" /></div>
            <h4>Step-by-Step Execution</h4>
            <p>Control the algorithm's speed. Pause, play, and step through each logical frame in real-time.</p>
          </div>
          <div className="glass-panel feature-card">
            <div className="icon-wrapper"><Layers size={24} color="var(--secondary)" /></div>
            <h4>Open Architecture</h4>
            <p>A decoupled engine allows you to plug in new algorithms instantly without touching React state.</p>
          </div>
        </div>
      </section>

      {/* Supported Algorithms Section */}
      <section className="algorithms-section">
        <h2 className="section-title">Supported Algorithms</h2>
        <div className="algo-list">
          <div className="glass-panel algo-item">
            <div className="algo-header">
              <Share2 size={24} color="var(--primary)" />
              <h3>Linked List (Train Routes)</h3>
            </div>
            <p>Visualize node traversal in a linear structure by connecting sequential cities globally.</p>
            <div className="process-diagram-placeholder">
               <span className="node">Dhaka</span> ➔ <span className="node">Dubai</span> ➔ <span className="node">London</span> ➔ <span className="node">New York</span>
            </div>
          </div>
          
          <div className="glass-panel algo-item">
            <div className="algo-header">
              <Compass size={24} color="var(--accent)" />
              <h3>Dijkstra's Algorithm</h3>
            </div>
            <p>Find the absolute shortest flight path across a weighted graph of global cities, avoiding higher costs.</p>
            <div className="process-diagram-placeholder">
               [Source] ➔ Explore Edges ➔ Compare Costs ➔ [Shortest Path Highlighted]
            </div>
          </div>
        </div>
      </section>

      {/* Tech Stack Section */}
      <section className="tech-stack-section">
        <h2 className="section-title">Built With Modern Tech</h2>
        <div className="tech-badges">
          <span className="tech-badge">⚛️ React 19</span>
          <span className="tech-badge">⚡ Vite</span>
          <span className="tech-badge">🗺️ react-simple-maps</span>
          <span className="tech-badge">🎨 Glassmorphism UI</span>
          <span className="tech-badge">🛣️ React Router v7</span>
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
        <div className="feature-grid inner-grid">
          <div className="feature-card inner-card">
            <h4><Code size={20} style={{marginRight: '8px', verticalAlign: 'middle'}}/> Algorithm Engine</h4>
            <p>Algorithms live in <code>src/algorithms/</code>. They are pure JavaScript functions returning "frames" (animation steps).</p>
          </div>
          <div className="feature-card inner-card">
            <h4><Layout size={20} style={{marginRight: '8px', verticalAlign: 'middle'}}/> UI & Visualizer</h4>
            <p>The React UI reads frames via the <code>useAlgorithmVisualizer</code> hook and blindly animates them on the map.</p>
          </div>
        </div>

        <h3>2. Adding a New Algorithm</h3>
        <p>To add a new algorithm (e.g., Breadth-First Search), simply create a file in <code>src/algorithms/</code>:</p>
        <div className="code-block">
{`export function generateBFSFrames(graph, startNode) {
  const frames = [];
  
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
          Then import it into <code>Visualizer.jsx</code>, add a button in the Control Panel, and pass your frames to the hook.
        </p>
      </section>
      
      <footer className="landing-footer">
        <p>© 2026 DSA GeoVisualizer. Open Source Educational Project.</p>
      </footer>
    </div>
  );
}

export default LandingPage;
