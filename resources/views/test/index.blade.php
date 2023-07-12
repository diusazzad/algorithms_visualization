<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
  
    <div class="container mx-auto py-8">
        <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            <h2 class="text-2xl font-bold mb-4">Input Example</h2>

            <div class="mb-4">
                <label for="inputField" class="block mb-2 text-sm font-medium text-gray-700">Enter your name:</label>
                <input type="text" id="inputField"
                    class="border border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Your name">
            </div>

            <button id="submitButton"
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Submit</button>
        </div>
    </div>

    <script>
        document.getElementById('submitButton').addEventListener('click', function() {
            var input = document.getElementById('inputField').value;
            alert('You entered: ' + input);
        });

    </script>

</body>

</html>
