/**
 * Linked List algorithm simulation.
 * Decoupled from UI. It takes data and returns an array of frames (steps).
 * Each frame represents a state of the algorithm to be rendered.
 */
export function generateLinkedListFrames(nodesData) {
  const frames = [];
  let currentEdges = [];
  let visitedNodes = [];
  
  // Initial frame (Empty state)
  frames.push({
    activeNode: null,
    visitedNodes: [],
    edges: [],
    description: "Linked List traversal started."
  });

  for (let i = 0; i < nodesData.length; i++) {
    const currentNode = nodesData[i];
    visitedNodes = [...visitedNodes, currentNode];
    
    // Visiting node frame
    frames.push({
      activeNode: currentNode,
      visitedNodes: [...visitedNodes],
      edges: [...currentEdges],
      description: `Visiting node: ${currentNode}`
    });

    if (i < nodesData.length - 1) {
      const nextNode = nodesData[i + 1];
      const newEdge = { from: currentNode, to: nextNode };
      currentEdges = [...currentEdges, newEdge];
      
      // Moving to next node frame (drawing edge)
      frames.push({
        activeNode: currentNode,
        visitedNodes: [...visitedNodes],
        edges: [...currentEdges],
        description: `Pointer moves from ${currentNode} to ${nextNode}`
      });
    }
  }

  // Final frame
  frames.push({
    activeNode: null,
    visitedNodes: [...visitedNodes],
    edges: [...currentEdges],
    description: "Traversal complete. Reached null."
  });

  return frames;
}
