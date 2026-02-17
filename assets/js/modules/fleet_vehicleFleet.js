document.addEventListener('DOMContentLoaded', function () {

    const tabs = document.querySelectorAll('.vehicleTab');
    const items = document.querySelectorAll('.vehicleItem');
    const fleetSection = document.getElementById('fleet-vehicles');

    function applyFilter(filter) {
        let found = false;

        tabs.forEach(tab => {
            const isActive = tab.dataset.filter === filter;
            tab.classList.toggle('active', isActive);
            if (isActive) found = true;
        });

        items.forEach(item => {
            item.style.display =
                filter === 'all' || item.classList.contains(filter)
                    ? 'block'
                    : 'none';
        });

        return found;
    }

    function handleHash() {
        let hash = window.location.hash.replace('#', '').trim();

        if (!hash) {
            applyFilter('all');
            return;
        }

        const success = applyFilter(hash);

        if (success) {
            if (fleetSection) {
                setTimeout(() => {
                    fleetSection.scrollIntoView({ behavior: 'smooth' });
                }, 200);
            }
        } else {
            // If invalid filter, fallback to 'all'
            applyFilter('all');
        }
    }

    // Tab click → update hash
    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            const filter = this.dataset.filter;
            history.pushState(null, '', '#' + filter);
            applyFilter(filter);
        });
    });

    // Initial load with hash
    handleHash();

    // Handle manual hash change
    window.addEventListener('hashchange', handleHash);

});
