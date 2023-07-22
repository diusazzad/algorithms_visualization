    // Function to simulate the typing animation
    function typeWriter(text, i, cb) {
        if (i < text.length) {
            document.getElementById("typing-text").innerHTML += text.charAt(i);
            i++;
            setTimeout(function () {
                typeWriter(text, i, cb);
            }, 100); // Adjust the typing speed (in milliseconds) here
        } else {
            cb();
        }
    }

    // Start the typing animation when the page loads
    document.addEventListener("DOMContentLoaded", function () {
        var textToType = "Registration"; // The text you want to animate
        typeWriter(textToType, 0, function () {
            // Animation complete
        });
    });


