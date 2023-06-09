<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Linear Search</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="m-4 p-2 border rounded stroke-slate-900 " id="linearSearch">
        <div class="text-center underline bold font-mono">
            <h1>Linear Search</h1>
            <a href="{{ url('/') }}">Home</a>
        </div>
        <div class="">
            <form id="linearSearchForm" action="{{ route('linear-search') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="array" class="block mb-1">Input Array:</label>
                    <input type="text" name="array" id="array" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500" placeholder="Enter comma-separated numbers" required>
                </div>

                <div class="mb-4">
                    <label for="target" class="block mb-1">Target Number:</label>
                    <input type="text" name="target" id="target" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500" placeholder="Enter the target number" required>
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Search</button>
                </div>
            </form>
        </div>

        <div class="border m-4 p-3 rounded" id="output">
            <h1>Linear Search Result:</h1><br>
            <div id="linearSearchResult"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#linearSearchForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the form from submitting normally

                var arrayInput = $('#array').val();
                var targetInput = $('#target').val();

                // Make an AJAX request to the backend endpoint
                $.ajax({
                    url: '{{ route('linear-search') }}',
                    type: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'array': arrayInput,
                        'target': targetInput
                    },
                    success: function(response) {
                        // Handle the response and update the #linearSearchResult section
                        var message = response.message;
                        var steps = response.steps;

                        var resultHtml = '<h2>' + message + '</h2>';
                        if (steps) {
                            resultHtml += '<div class="bg-gray-100 p-4 rounded">';
                            resultHtml += '<h3 class="text-lg font-bold mb-2">Algorithm Steps:</h3>';
                            resultHtml += '<ul>';

                            for (var i = 0; i < steps.length; i++) {
                                var step = steps[i];
                                var stepHtml = '<li' + (step.isTarget ? ' class="text-blue-500 font-bold"' : '') + '>';
                                stepHtml += 'Index ' + step.index + ': ' + step.number;
                                stepHtml += '</li>';

                                resultHtml += stepHtml;
                            }

                            resultHtml += '</ul>';
                            resultHtml += '</div>';
                        }

                        $('#linearSearchResult').html(resultHtml);
                    },
                    error: function() {
                        // Handle the error if the AJAX request fails
                        $('#linearSearchResult').html('<p>An error occurred while processing the request.</p>');
                    }
                });
            });
        });
    </script>
</body>
</html>
