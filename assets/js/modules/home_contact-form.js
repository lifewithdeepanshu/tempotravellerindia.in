
// Contact Section on Home Page(maybe on other page be) WhatsApp Form Submission
document.getElementById("contactFormtoWhatsApp").addEventListener("submit", function(e) {
    e.preventDefault();

    const data = {
        name: name.value,
        mobile: mobile.value,
        pickup: pickup.value,
        destination: destination.value,
        start: startDate.value,
        end: endDate.value,
        passengers: passengers.value,
        message: message.value || "N/A"
    };

    const text =
`Hello, I want to book a Tempo Traveller.

Name: ${data.name}
Mobile: ${data.mobile}
Pickup: ${data.pickup}
Destination: ${data.destination}
Start Date: ${data.start}
End Date: ${data.end}
Passengers: ${data.passengers}
Message: ${data.message}`;

    window.open(
        `https://wa.me/919999029051?text=${encodeURIComponent(text)}`,
        "_blank"
    );
});