fetch("/assets/xml/menu.xml")
  .then(res => res.text())
  .then(str => new DOMParser().parseFromString(str, "text/xml"))
  .then(xml => {

    const desktopMenu = document.getElementById("desktopMenuContainer");
    const mobileMenu = document.getElementById("mobileMenuContainer");

    const items = Array.from(xml.documentElement.children)
      .filter(el => el.tagName === "item");

    items.forEach((item, index) => {

      const title = item.querySelector("title")?.textContent;
      const link = item.querySelector("link")?.textContent;
      const submenu = item.querySelector("submenu");

      /* ================= DESKTOP MENU ================= */
      if (submenu) {
        const dropdown = document.createElement("li");
        dropdown.className = "nav-item dropdown";

        dropdown.innerHTML = `
          <button class="nav-link dropdown-toggle"
             data-bs-toggle="dropdown"
             aria-expanded="false">
            ${title}
          </button>
          <ul class="dropdown-menu"></ul>
        `;

        const dropdownMenu = dropdown.querySelector(".dropdown-menu");

        submenu.querySelectorAll("item").forEach(sub => {
          dropdownMenu.innerHTML += `
            <li>
              <a class="dropdown-item" href="${sub.querySelector("link").textContent}">
                ${sub.querySelector("title").textContent}
              </a>
            </li>`;
        });

        desktopMenu.appendChild(dropdown);

      } else {
        desktopMenu.innerHTML += `
          <li class="nav-item">
            <a class="nav-link" href="${link}">${title}</a>
          </li>`;
      }

      /* ================= MOBILE MENU ================= */
      if (submenu) {
        const collapseId = `mobileCollapse${index}`;

        mobileMenu.innerHTML += `
          <a class="nav-link" data-bs-toggle="collapse" href="#${collapseId}">
            ${title}
            <i class="bi bi-chevron-down float-end"></i>
          </a>
          <div class="collapse ps-3" id="${collapseId}">
            ${Array.from(submenu.querySelectorAll("item")).map(sub => `
              <a class="nav-link small" href="${sub.querySelector("link").textContent}">
                ${sub.querySelector("title").textContent}
              </a>
            `).join("")}
          </div>
        `;
      } else {
        mobileMenu.innerHTML += `
          <a class="nav-link" href="${link}">${title}</a>
        `;
      }

    });

    /* ================= MOBILE CTA ================= */
    const cta = xml.querySelector("cta");
    if (cta) {
      mobileMenu.innerHTML += `
        <div class="mt-4 d-grid gap-3">
          <a href="tel:${cta.querySelector("call").textContent}"
             class="btn btn-cta d-flex align-items-center justify-content-center gap-2 py-3">
            <i class="bi bi-telephone-fill"></i> Call Now
          </a>

          <a href="https://wa.me/${cta.querySelector("whatsapp").textContent}"
             target="_blank"
             class="btn btn-whatsapp d-flex align-items-center justify-content-center gap-2 py-3">
            <i class="bi bi-whatsapp"></i> Chat on WhatsApp
          </a>
        </div>
      `;
    }

  })
  .catch(err => console.error("Menu XML Error:", err));
