
  // Get DOM elements
  const searchInput = document.getElementById('search-input');
  const searchButton = document.getElementById('search-button');
  const resultsContainer = document.getElementById('results-container');
  const chartContainer = document.getElementById('chart-container');

  // Function to perform Linear Search
  function linearSearch(arr, target) {
    for (let i = 0; i < arr.length; i++) {
      if (arr[i] === target) {
        return i; // Return index if target found
      }
    }
    return -1; // Return -1 if target not found
  }

  // Event listener for search button click
  searchButton.addEventListener('click', () => {
    // Get user input and convert to number
    const target = parseInt(searchInput.value);

    // Perform Linear Search on sample data
    const data = [4, 7, 2, 1, 9, 5];
    const resultIndex = linearSearch(data, target);

    // Display search results
    if (resultIndex !== -1) {
      resultsContainer.textContent = `Target found at index ${resultIndex}`;
    } else {
      resultsContainer.textContent = 'Target not found';
    }

    // Generate chart data
    const chartData = data.map((value, index) => ({
      x: index,
      y: value,
    }));

    // Render chart
    new Chart(chartContainer, {
      type: 'line',
      data: {
        datasets: [
          {
            label: 'Data',
            data: chartData,
          },
        ],
      },
      options: {
        responsive: true,
        scales: {
          x: {
            type: 'linear',
            position: 'bottom',
          },
        },
      },
    });
  });
