document.addEventListener("DOMContentLoaded", function () {
    const ticketForm = document.getElementById("ticket-form");
    const ticketDisplay = document.getElementById("ticket-display");

    function getCurrentDateTime() {
        const now = new Date();
        const date = now.toISOString().slice(0, 10);
        const time = now.toTimeString().slice(0, 5);
        return { date, time };
    }

    ticketForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const name = document.getElementById("name").value;
        const pickupPoint = document.getElementById("pickup-point").value;
        const droppingPoint = document.getElementById("dropping-point").value;
        const { date, time } = getCurrentDateTime();

        const data = {
            name,
            pickupPoint,
            droppingPoint,
            date,
            time
        };

        // Send data to the backend for ticket booking.
        fetch('http://localhost:3000/book-ticket', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.text())
        .then(responseText => {
            // Display the response from the backend.
            ticketDisplay.innerHTML = responseText;
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
