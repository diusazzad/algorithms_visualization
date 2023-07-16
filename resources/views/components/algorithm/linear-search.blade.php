<div class="m-3 border ">
    <canvas id="chart-container"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Get chart container element
    const chartContainer = document.getElementById('chart-container');

    // Generate random graph data
    function generateGraphData() {
        const labels = ['A', 'B', 'C', 'D', 'E', 'F'];
        const data = [5, 3, 7, 2, 6, 4];
        return { labels, data };
    }

    // Generate random colors for each data point
    function generateRandomColors(length) {
        const colors = [];
        for (let i = 0; i < length; i++) {
            const color = `rgba(${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, 0.7)`;
            colors.push(color);
        }
        return colors;
    }

    // Generate chart
    function generateChart() {
        const graphData = generateGraphData();

        // Create chart
        new Chart(chartContainer, {
            type: 'bar',
            data: {
                labels: graphData.labels,
                datasets: [{
                    data: graphData.data,
                    backgroundColor: generateRandomColors(graphData.data.length),
                }],
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    }

    // Generate initial chart
    generateChart();
</script>
