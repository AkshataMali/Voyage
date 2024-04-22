console.log("hehfse")
document.addEventListener("DOMContentLoaded", function () {
    const ticketForm = document.getElementById("ticket-form");
    const ticketDisplay = document.getElementById("ticket-display");

    // Function to format the current date and time
    function getCurrentDateTime() {
        const now = new Date();
        const date = now.toISOString().slice(0, 10); // Format as YYYY-MM-DD
        const time = now.toTimeString().slice(0, 5); // Format as HH:MM
        return { date, time };
    }

    ticketForm.addEventListener("submit", function (event) {
        event.preventDefault();

        console.log("hello");

        const name = document.getElementById("name").value;
        const pickupPoint = document.getElementById("pickup-point").value;
        const droppingPoint = document.getElementById("dropping-point").value;
        const { date, time } = getCurrentDateTime();
        const minAmount = 20;
        const maxAmount = 100;

        function generateRandomAmount(min, max) {
            return (Math.random() * (max - min)) + min;
        }
    
        const amount = generateRandomAmount(minAmount, maxAmount).toFixed(2);


        try {
            const qrValue = {
                name: name,
                pickup: pickupPoint,
                drop: droppingPoint,
                date: date,
                time: time
            }
        
            const qrString = JSON.stringify(qrValue);
        
            qrImg = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${encodeURIComponent(qrString)}`;
        
            console.log(qrImg)
        
            const ticketHTML = `
                <div class="ticket">
                    <h1>Bus E-Ticket</h1>
                    
                    <div class="passenger-details">
                        <p><strong>Name:</strong> ${name}</p>
                        <p><strong>Pickup Point:</strong> ${pickupPoint}</p>
                        <p><strong>Dropping Point:</strong> ${droppingPoint}</p>
                        <p><strong>Amount:</strong> ₹${amount}</p>

                    </div>
                    <div class="journey-details">
                        <p><strong>Date of Journey:</strong> ${date}</p>
                        <p><strong>Time of Journey:</strong> ${time}</p>
                    </div>
                </div>
        
                <img alt="QRCode" src=${qrImg} />
                
            `;
        
            ticketDisplay.innerHTML = ticketHTML;
        } catch (error) {
            console.error(error);
        }

        ticketDisplay.innerHTML = ticketHTML;
    });
});
