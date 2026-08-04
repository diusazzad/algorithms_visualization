export function generateDijkstraFrames(graph, startNode, endNode) {
  const ObjectKeys = Object.keys(graph);
  const distances = {};
  const previous = {};
  const unvisited = new Set(ObjectKeys);
  const frames = [];

  ObjectKeys.forEach(node => {
    distances[node] = Infinity;
    previous[node] = null;
  });
  distances[startNode] = 0;

  frames.push({
    activeNode: startNode,
    visitedNodes: [],
    edges: [],
    shortestPathEdges: [],
    description: `Dijkstra's Algorithm started. Finding shortest path from ${startNode} to ${endNode}.`
  });

  const visited = [];
  const exploredEdges = [];

  while (unvisited.size > 0) {
    let minNode = null;
    let minDistance = Infinity;
    for (const node of unvisited) {
      if (distances[node] < minDistance) {
        minNode = node;
        minDistance = distances[node];
      }
    }

    if (minNode === null || minDistance === Infinity) break;

    frames.push({
      activeNode: minNode,
      visitedNodes: [...visited],
      edges: [...exploredEdges],
      shortestPathEdges: [],
      description: `Current Node: ${minNode} (Cost: ${minDistance})`
    });

    unvisited.delete(minNode);
    visited.push(minNode);

    if (minNode === endNode) {
      break; 
    }

    const neighbors = graph[minNode];
    for (const neighbor in neighbors) {
      if (!unvisited.has(neighbor)) continue;

      const cost = neighbors[neighbor];
      const newDist = distances[minNode] + cost;
      
      const newEdge = { from: minNode, to: neighbor, weight: cost };
      frames.push({
        activeNode: neighbor,
        visitedNodes: [...visited],
        edges: [...exploredEdges, newEdge],
        shortestPathEdges: [],
        description: `Checking edge: ${minNode} -> ${neighbor}. Cost: ${newDist}`
      });

      if (newDist < distances[neighbor]) {
        distances[neighbor] = newDist;
        previous[neighbor] = minNode;
      }
      
      const edgeExists = exploredEdges.some(e => (e.from === minNode && e.to === neighbor) || (e.to === minNode && e.from === neighbor));
      if(!edgeExists) {
         exploredEdges.push(newEdge);
      }
    }
  }

  const shortestPathEdges = [];
  let curr = endNode;
  while (previous[curr]) {
    shortestPathEdges.push({ from: previous[curr], to: curr });
    curr = previous[curr];
  }
  
  frames.push({
    activeNode: endNode,
    visitedNodes: [...visited],
    edges: [...exploredEdges],
    shortestPathEdges: shortestPathEdges,
    description: `Shortest path found! Total distance: ${distances[endNode]}`
  });

  return frames;
}
