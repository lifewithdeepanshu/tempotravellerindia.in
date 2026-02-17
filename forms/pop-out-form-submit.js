document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("bookingForm");

    // Page URL
    form.page_url.value = window.location.href;

    // Generate CSRF token
    const token = Math.random().toString(36).substr(2);
    document.getElementById("csrf_token").value = token;
    localStorage.setItem("csrf_token", token);

    const startTime = Date.now();

    form.addEventListener("submit", function(e){
        e.preventDefault();

        // Bot check (too fast submit)
        if ((Date.now() - startTime) < 3000) {
            alert("Suspicious activity detected.");
            return;
        }

        const formData = new FormData(form);

        fetch("submit-booking.php", {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if(data.status === "success"){
                window.open(data.whatsapp, "_blank");
                form.reset();
            } else {
                alert(data.message);
            }
        });
    });
});