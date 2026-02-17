fetch("/assets/xml/reviews.xml")
  .then(response => response.text())
  .then(str => new DOMParser().parseFromString(str, "text/xml"))
  .then(data => {
    const reviews = data.getElementsByTagName("review");
    const container = document.getElementById("reviewsContainer");

    for (let i = 0; i < reviews.length; i++) {
      const name = reviews[i].getElementsByTagName("name")[0].textContent;
      const location = reviews[i].getElementsByTagName("location")[0].textContent;
      const rating = reviews[i].getElementsByTagName("rating")[0].textContent;
      const message = reviews[i].getElementsByTagName("message")[0].textContent;

      container.innerHTML += `
        <div class="col-lg-4 col-md-6">
          <div class="lux-border h-100">
            <div class="lux-card h-100">
              <div class="lux-quote">
                <i class="bi bi-quote"></i>
              </div>

              <div class="lux-stars mb-3">
                ${generateStars(rating)}
              </div>

              <p class="lux-text">${message}</p>

              <div class="lux-user">
                <div class="lux-avatar">
                  <i class="bi bi-person-fill"></i>
                </div>
                <div>
                  <h6 class="mb-0">${name}</h6>
                  <small>${location}</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      `;
    }
  })
  .catch(err => console.error("XML Load Error:", err));


function generateStars(rating) {
  let starsHTML = "";
  let fullStars = Math.floor(rating);
  let halfStar = rating % 1 !== 0;

  for (let i = 0; i < fullStars; i++) {
    starsHTML += `<i class="bi bi-star-fill"></i>`;
  }

  if (halfStar) {
    starsHTML += `<i class="bi bi-star-half"></i>`;
  }

  let emptyStars = 5 - Math.ceil(rating);
  for (let i = 0; i < emptyStars; i++) {
    starsHTML += `<i class="bi bi-star"></i>`;
  }

  return starsHTML;
}
