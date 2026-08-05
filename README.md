<div align="center">
  
# 🌍 DSA GeoVisualizer

**An interactive, visually stunning way to learn Data Structures and Algorithms through a real-world World Map.**

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![React](https://img.shields.io/badge/React-19-blue.svg)](https://reactjs.org/)
[![Vite](https://img.shields.io/badge/Vite-8-646CFF.svg)](https://vitejs.dev/)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](http://makeapullrequest.com)

[**Live Demo**](https://algo.zengfy.top/) • [**Report Bug**](https://github.com/diusazzad/algorithms_visualization/issues) • [**Request Feature**](https://github.com/diusazzad/algorithms_visualization/issues)

</div>

---

## 📖 About The Project

Learning Data Structures and Algorithms shouldn't be boring. **DSA GeoVisualizer** brings abstract technical concepts to life by overlaying them on a beautiful, interactive world map. Watch as graphs, linked lists, and pathfinding algorithms animate in real-time across cities and continents!

![Project Screenshot](https://via.placeholder.com/1000x500.png?text=DSA+GeoVisualizer+Preview+GIF+Here)

*Note: Replace the placeholder image above with a real screenshot or GIF of the visualizer.*

---

## ✨ Key Features

- 🗺️ **Interactive World Map UI:** Learn visually with real-world geography instead of plain whiteboards.
- ⏯️ **Step-by-Step Execution:** Play, pause, and step through each algorithmic frame at your own speed.
- 🔌 **Decoupled Architecture:** Algorithms run independently of the React state. You can plug in new logic easily!
- 🎨 **Premium Aesthetics:** Glassmorphism UI, smooth animations, and a responsive dark theme.

---

## 🛠️ Tech Stack

- **Framework:** React 19 + Vite
- **Routing:** React Router v7
- **Map Rendering:** react-simple-maps (d3-geo)
- **Icons:** lucide-react
- **Styling:** Pure Vanilla CSS (Glassmorphism & Flex/Grid layouts)

---

## 🚀 Getting Started

Follow these steps to get a local copy up and running.

### Prerequisites

- Node.js (v18 or higher)
- npm or yarn

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/diusazzad/algorithms_visualization.git
   ```

2. **Navigate to the project directory:**
   ```bash
   cd algorithms_visualization
   ```

3. **Install dependencies:**
   *(Note: `--legacy-peer-deps` is required for react-simple-maps compatibility with React 19)*
   ```bash
   npm install --legacy-peer-deps
   ```

4. **Start the development server:**
   ```bash
   npm run dev
   ```

5. **Open your browser:**
   Visit `http://localhost:5173/`

---

## 🤝 How to Contribute (Adding New Algorithms)

We built this project with a highly decoupled architecture. **You can contribute new algorithms without touching the complex React UI!**

### 1. The Architecture
- **Algorithm Engine (`src/algorithms/`):** Pure JavaScript functions that take data and return an array of "frames" (animation steps).
- **UI & Visualizer (`src/components/Visualizer/`):** Reads the frames using a custom hook (`useAlgorithmVisualizer`) and blindly animates them on the map.

### 2. Creating a New Algorithm
Create a new JS file in `src/algorithms/` (e.g., `bfs.js`):

```javascript
export function generateBFSFrames(graph, startNode) {
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
}
```

### 3. Integrate It
1. Import your function into `src/components/Visualizer/Visualizer.jsx`.
2. Add a button in the Control Panel to trigger your algorithm.
3. Pass your generated frames into the existing animation state.

---

## ⭐️ Show your support

Give a ⭐️ if this project helped you learn or inspired you!

## 📝 License

Distributed under the MIT License. See `LICENSE` for more information.
