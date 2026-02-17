fetch('/assets/xml/destinations.xml')
  .then(response => response.text())
  .then(str => new window.DOMParser().parseFromString(str, "text/xml"))
  .then(data => {

    const container = document.getElementById('seasonDestinations');
    const destinations = data.getElementsByTagName('destination');

    let output = '';

    for (let dest of destinations) {

      const title = dest.getElementsByTagName('title')[0].textContent;
      const image = dest.getElementsByTagName('image')[0].textContent;
      const alt = dest.getElementsByTagName('alt')[0].textContent;
      const route = dest.getElementsByTagName('routeLink')[0].textContent;
      const duration = dest.getElementsByTagName('duration')[0].textContent;
      const group = dest.getElementsByTagName('group')[0].textContent;
      const rating = dest.getElementsByTagName('rating')[0].textContent;
      const badgeIcon = dest.getElementsByTagName('icon')[0].textContent;
      const badgeText = dest.getElementsByTagName('text')[0].textContent;
      const whatsappText = encodeURIComponent(
        dest.getElementsByTagName('whatsappText')[0].textContent
      );

      output += `
        <div class="col-lg-4">
          <div class="season-card">
            <img src="${image}" alt="${alt}">

            <div class="season-overlay">

              <!-- WhatsApp -->
              <a href="https://wa.me/919999029051?text=${whatsappText}"
                 class="whatsapp-float"
                 title="Chat on WhatsApp">
                <i class="bi bi-whatsapp"></i>
              </a>

              <span class="trip-badge">
                <i class="bi bi-${badgeIcon}"></i> ${badgeText}
              </span>

              <h4 class="mb-1">${title}</h4>

              <a href="${route}" class="explore-link">
                Explore Route <i class="bi bi-arrow-right"></i>
              </a>

              <div class="meta mt-2">
                <span><i class="bi bi-clock"></i> ${duration}</span>
                <span><i class="bi bi-people-fill"></i> ${group}</span>
              </div>

              <div class="rating">
                <i class="bi bi-star-fill"></i> ${rating} Rated by Travellers
              </div>

              <button class="btn btn-enquiry w-100 mb-2"
                data-bs-toggle="modal"
                data-bs-target="#bookingModal"
                data-destination="${title}">
                <i class="bi bi-headset"></i> Enquire for Best Price
              </button>

            </div>
          </div>
        </div>
      `;
    }

    container.innerHTML = output;

  })
  .catch(error => console.error('XML Fetch Error:', error));