import React, { useState, useEffect, useMemo } from 'react';
import { ComposableMap, Geographies, Geography, Marker, Line, ZoomableGroup } from 'react-simple-maps';
import { Map, Layers, ArrowLeft } from 'lucide-react';
import { Link } from 'react-router-dom';
import { PlayerControls } from '../Controls/PlayerControls';
import { useAlgorithmVisualizer } from '../../hooks/useAlgorithmVisualizer';
import { generateLinkedListFrames } from '../../algorithms/linear/linkedListVisualizer';
import { generateDijkstraFrames } from '../../algorithms/graph/dijkstraVisualizer';
import { cities, getCity, graphData } from '../../data/cities';
import './Visualizer.css';

const geoUrl = "https://cdn.jsdelivr.net/npm/world-atlas@2/countries-110m.json";
const linkedListData = ['dhaka', 'dubai', 'london', 'new_york'];

function Visualizer() {
  const [tooltipContent, setTooltipContent] = useState("");
  const [activeAlgorithm, setActiveAlgorithm] = useState("linked_list");

  const frames = useMemo(() => {
    if (activeAlgorithm === "linked_list") {
      return generateLinkedListFrames(linkedListData);
    } else if (activeAlgorithm === "dijkstra") {
      return generateDijkstraFrames(graphData, 'dhaka', 'new_york');
    }
    return [];
  }, [activeAlgorithm]);

  const {
    currentFrame,
    isPlaying,
    play,
    pause,
    reset,
    nextStep,
    prevStep,
    progress
  } = useAlgorithmVisualizer(frames, 1200);

  const activeNodeId = currentFrame?.activeNode;
  const edges = currentFrame?.edges || [];
  const shortestPathEdges = currentFrame?.shortestPathEdges || [];
  const visitedNodes = currentFrame?.visitedNodes || [];

  return (
    <div className="app-container">
      <header className="glass-panel header-panel">
        <div style={{ display: 'flex', alignItems: 'center', gap: '16px' }}>
          <Link to="/" className="icon-btn" style={{ padding: '8px', background: 'rgba(255,255,255,0.1)' }}>
            <ArrowLeft size={20} color="var(--text-main)" />
          </Link>
          <div className="logo">
            <Map className="icon" size={28} color="var(--primary)" />
            <h1>DSA GeoVisualizer</h1>
          </div>
        </div>
        <p style={{ paddingLeft: '56px' }}>Algorithms on a Global Scale</p>
      </header>

      <div className="map-container">
        <ComposableMap projection="geoMercator" projectionConfig={{ scale: 140 }}>
          <ZoomableGroup center={[20, 20]} zoom={1.5}>
            <Geographies geography={geoUrl}>
              {({ geographies }) =>
                geographies.map((geo) => (
                  <Geography
                    key={geo.rsmKey}
                    geography={geo}
                    style={{
                      default: { fill: "var(--map-fill)", stroke: "var(--map-stroke)", strokeWidth: 0.5, outline: "none" },
                      hover: { fill: "var(--map-hover)", outline: "none" },
                      pressed: { fill: "var(--map-fill)", outline: "none" }
                    }}
                  />
                ))
              }
            </Geographies>

            {edges.map((edge, i) => {
              const fromCity = getCity(edge.from);
              const toCity = getCity(edge.to);
              
              const isShortestPath = shortestPathEdges.some(spEdge => 
                (spEdge.from === edge.from && spEdge.to === edge.to) ||
                (spEdge.from === edge.to && spEdge.to === edge.from)
              );

              if (!fromCity || !toCity) return null;
              
              return (
                <Line
                  key={`edge-${i}`}
                  from={fromCity.coordinates}
                  to={toCity.coordinates}
                  stroke={isShortestPath ? "var(--accent)" : "var(--primary)"}
                  strokeWidth={isShortestPath ? 3 : 1}
                  strokeLinecap="round"
                  style={{
                    strokeDasharray: isShortestPath ? "none" : "4 4",
                    animation: isShortestPath ? "none" : "dash 1s linear infinite",
                    opacity: isShortestPath ? 1 : 0.6
                  }}
                />
              );
            })}

            {cities.map((city) => {
              const isVisited = visitedNodes.includes(city.id);
              const isActive = activeNodeId === city.id;
              
              const isTargetNode = activeAlgorithm === "linked_list" 
                ? linkedListData.includes(city.id)
                : Object.keys(graphData).includes(city.id);
                
              if(!isTargetNode) return null; 

              return (
                <Marker 
                  key={city.id} 
                  coordinates={city.coordinates}
                  onMouseEnter={() => setTooltipContent(city.name)}
                  onMouseLeave={() => setTooltipContent("")}
                >
                  <circle 
                    r={isActive ? 8 : (isVisited ? 5 : 4)} 
                    fill={isActive ? "var(--accent)" : (isVisited ? "var(--primary)" : "var(--text-muted)")}
                    stroke="var(--bg-dark)"
                    strokeWidth={isActive ? 2 : 1}
                    style={{ transition: "all 0.3s ease" }}
                  />
                  <text
                    textAnchor="middle"
                    y={-12}
                    style={{ 
                      fontFamily: "Inter", 
                      fill: isActive ? "var(--text-main)" : "var(--text-muted)", 
                      fontSize: isActive ? "12px" : "10px",
                      fontWeight: isActive ? 600 : 400,
                      transition: "all 0.3s ease"
                    }}
                  >
                    {city.name}
                  </text>
                </Marker>
              );
            })}
          </ZoomableGroup>
        </ComposableMap>
      </div>

      {currentFrame && (
        <div className="glass-panel description-panel">
          <h3>Algorithm State</h3>
          <p>{currentFrame.description}</p>
        </div>
      )}

      <aside className="glass-panel controls-panel">
        <div className="control-header">
          <Layers size={20} color="var(--accent)" />
          <h2>Algorithms</h2>
        </div>
        <div className="control-list">
          <button 
            className={`algo-btn ${activeAlgorithm === "linked_list" ? "active" : ""}`}
            onClick={() => { setActiveAlgorithm("linked_list"); reset(); }}
          >
            Linked List (Train Route)
          </button>
          <button 
            className={`algo-btn ${activeAlgorithm === "dijkstra" ? "active" : ""}`}
            onClick={() => { setActiveAlgorithm("dijkstra"); reset(); }}
          >
            Dijkstra (Flight Paths)
          </button>
        </div>
        
        <div className="player-wrapper">
          <PlayerControls 
            isPlaying={isPlaying}
            progress={progress}
            onPlay={play}
            onPause={pause}
            onReset={reset}
            onNext={nextStep}
            onPrev={prevStep}
          />
        </div>
      </aside>

      {tooltipContent && (
        <div className="map-tooltip glass-panel">
          {tooltipContent}
        </div>
      )}
    </div>
  );
}

export default Visualizer;
