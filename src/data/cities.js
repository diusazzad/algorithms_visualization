export const cities = [
  { id: 'dhaka', name: 'Dhaka', coordinates: [90.4125, 23.8103] },
  { id: 'dubai', name: 'Dubai', coordinates: [55.2708, 25.2048] },
  { id: 'london', name: 'London', coordinates: [-0.1278, 51.5074] },
  { id: 'new_york', name: 'New York', coordinates: [-74.006, 40.7128] },
  { id: 'tokyo', name: 'Tokyo', coordinates: [139.6917, 35.6895] },
  { id: 'sydney', name: 'Sydney', coordinates: [151.2093, -33.8688] },
];

export const getCity = (id) => cities.find(c => c.id === id);

// Graph representation for Dijkstra (Adjacency List with distances as weights)
export const graphData = {
  dhaka: { tokyo: 5000, dubai: 4000, sydney: 9000 },
  tokyo: { dhaka: 5000, sydney: 7800, new_york: 10800 },
  dubai: { dhaka: 4000, london: 5500, new_york: 11000 },
  london: { dubai: 5500, new_york: 5600 },
  new_york: { tokyo: 10800, dubai: 11000, london: 5600 },
  sydney: { dhaka: 9000, tokyo: 7800 }
};
