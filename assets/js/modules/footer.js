fetch('/assets/xml/footer.xml')
  .then(response => response.text())
  .then(str => new window.DOMParser().parseFromString(str, "text/xml"))
  .then(xml => {

    const brand = xml.querySelector("brand");
    const links = xml.querySelector("links");
    const services = xml.querySelector("services");
    const contact = xml.querySelector("contact");
    const legal = xml.querySelector("legal");

    let socialHTML = '';
    brand.querySelectorAll("social item").forEach(item => {
      socialHTML += `
        <a href="${item.getAttribute('link')}" aria-label="${item.getAttribute('label')}">
          <i class="bi ${item.getAttribute('icon')}"></i>
        </a>`;
    });

    let linkHTML = '';
    links.querySelectorAll("item").forEach(item => {
      linkHTML += `<li><a href="${item.getAttribute('link')}">${item.getAttribute('name')}</a></li>`;
    });

    let serviceHTML = '';
    services.querySelectorAll("item").forEach(item => {
      serviceHTML += `<li><a href="${item.getAttribute('link')}">${item.getAttribute('name')}</a></li>`;
    });

    document.getElementById("site-footer").innerHTML = `
    <div class="footer">
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4">
            <img src="${brand.querySelector("logo").textContent}" 
                 alt="${brand.querySelector("alt").textContent}" 
                 class="logo mb-3">

            <p class="footer-text">${brand.querySelector("description").textContent}</p>

            <div class="footer-social">
              ${socialHTML}
            </div>
          </div>

          <div class="col-lg-2 col-md-4">
            <h6 class="footer-title">${links.getAttribute("title")}</h6>
            <ul class="footer-links">${linkHTML}</ul>
          </div>

          <div class="col-lg-3 col-md-4">
            <h6 class="footer-title">${services.getAttribute("title")}</h6>
            <ul class="footer-links">${serviceHTML}</ul>
          </div>

          <div class="col-lg-3 col-md-4">
            <h6 class="footer-title">${contact.getAttribute("title")}</h6>
            <p><i class="bi bi-telephone"></i> ${contact.querySelector("phone").textContent}</p>
            <p><i class="bi bi-whatsapp"></i> ${contact.querySelector("whatsapp").textContent}</p>
            <p><i class="bi bi-envelope"></i> ${contact.querySelector("email").textContent}</p>
          </div>

        </div>

        <hr class="footer-divider">

        <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center">
          <p class="small">${legal.querySelector("copyright").textContent}</p>

          <div class="footer-legal small">
            ${Array.from(legal.querySelectorAll("policy"))
              .map(p => `<a href="${p.getAttribute("link")}">${p.getAttribute("name")}</a>`)
              .join('<span>|</span>')}
          </div>
        </div>

      </div>
    </div>`;
});