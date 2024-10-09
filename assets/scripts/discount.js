function initCountdown(durationInMinutes, elementId) {
    function startCountdown() {
        // Set the date we're counting down to
        var countDownDate = new Date().getTime() + durationInMinutes * 60 * 1000; // durationInMinutes from now

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for hours, minutes and seconds
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the specified element
            document.getElementById(elementId).innerHTML = hours + " : " + minutes + " : " + seconds;

            // If the count down is over, reset the countdown
            if (distance < 0) {
                clearInterval(x);
                startCountdown(); // Restart the countdown
            }
        }, 1000);
    }

    startCountdown(); // Start the initial countdown
}

// Call the function with the desired duration (40 minutes) and element ID
initCountdown(40, "countdown");