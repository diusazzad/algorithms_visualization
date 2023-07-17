<div class="border m-3 pl-3 h-fit">
    <div class="">
        <h10 class="text-center">Linear Search</h1>
        <label for="arrayInput">Array:</label>
        <input class="border rounded-xl p-1" type="text" id="arrayInput">
    </div>
    <div>
        <label class="" for="targetInput">Target Value:</label>
        <input class="mt-1 border " type="text" id="targetInput">
    </div>
    <button class="border rounded-xl p-1" onclick="linearSearch()">Search</button>
    <div>
        <canvas id="chartContainer"></canvas>
    </div>
    <div id="result"></div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function linearSearch() {
        const arrayInput = document.getElementById('arrayInput').value;
        const targetInput = document.getElementById('targetInput').value;

        // Convert input string to array of numbers
        const array = arrayInput.split(',').map(Number);

        // Perform linear search
        const indices = [];
        for (let i = 0; i < array.length; i++) {
            if (array[i] === Number(targetInput)) {
                indices.push(i);
            }
        }

        // Display search result
        const result = document.getElementById('result');
        if (indices.length > 0) {
            result.textContent = `Target value found at indices: ${indices.join(', ')}`;
        } else {
            result.textContent = 'Target value not found in the array';
        }

        // Create chart
        const chartContainer = document.getElementById('chartContainer');
        new Chart(chartContainer, {
            type: 'bar',
            data: {
                labels: array.map((value, index) => index.toString()),
                datasets: [{
                    data: array,
                    backgroundColor: array.map((value) => value === Number(targetInput) ?
                        'rgba(255, 0, 0, 0.7)' : 'rgba(0, 0, 255, 0.7)'),
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
</script>
