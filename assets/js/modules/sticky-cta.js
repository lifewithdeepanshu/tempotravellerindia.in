// Sticky CTA Button Visibility with Booking Modal
const bookingModal = document.getElementById('bookingModal');
const stickyCTA = document.getElementById('stickyCTA');

bookingModal.addEventListener('show.bs.modal', () => {
    stickyCTA.style.display = 'none';
});

bookingModal.addEventListener('hidden.bs.modal', () => {
    stickyCTA.style.display = 'flex';
});