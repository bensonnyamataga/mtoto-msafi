
<!-- ============================================
 JARGA TOURS - PREMIUM RESPONSIVE WEBSITE HEADER
 Full HTML + CSS + JavaScript
 ============================================ -->

<style>
.jg-header {
  --jg-green: #344D0E;
  --jg-green-dark: #263A08;
  --jg-heading: #505050;
  --jg-text: #555555;
  --jg-cream: #F8F7F3;
  --jg-border: #E8EBE3;
  --jg-white: #FFFFFF;

  position: relative;
  z-index: 1000;
  width: 100%;
  background: #fff;
  color: var(--jg-heading);
  font-family: inherit;
}

.jg-header *,
.jg-header *::before,
.jg-header *::after {
  box-sizing: border-box;
}

.jg-header a {
  text-decoration: none;
  transition: color .25s, background .25s;
}

.jg-header button {
  font: inherit;
  cursor: pointer;
}

/* ============================================
 TOP CONTACT BAR
 ============================================ */

.jg-topbar {
  background: var(--jg-green);
  color: #fff;
}

.jg-top-inner {
  max-width: 1440px;
  margin: auto;
  padding: 11px 28px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
}

.jg-top-contact,
.jg-top-right,
.jg-socials {
  display: flex;
  align-items: center;
}

.jg-top-contact {
  gap: 28px;
}

.jg-top-right {
  gap: 22px;
}

.jg-socials {
  gap: 17px;
}

.jg-topbar a {
  color: #fff;
  font-size: 14px;
  font-weight: 500;
  line-height: 1.5;
}

.jg-topbar a:hover {
  color: #E6EFCF;
}

.jg-topbar i {
  margin-right: 7px;
}

.jg-socials a {
  font-size: 15px;
}

.jg-socials i {
  margin-right: 0;
}

.jg-top-divider {
  height: 18px;
  width: 1px;
  background: rgba(255,255,255,.35);
}

/* ============================================
 MAIN NAVIGATION
 ============================================ */

.jg-nav {
  background: #fff;
  border-bottom: 1px solid var(--jg-border);
  box-shadow: 0 5px 22px rgba(0,0,0,.045);
}

.jg-nav-inner {
  max-width: 1440px;
  margin: auto;
  padding: 14px 28px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 22px;
}

/* LOGO */

.jg-logo {
  display: inline-flex;
  align-items: center;
  flex-shrink: 0;
}

.jg-logo img {
  display: block;
  width: auto;
  max-width: 180px;
  max-height: 78px;
  object-fit: contain;
}

/* DESKTOP MENU */

.jg-menu {
  display: flex;
  align-items: center;
  gap: clamp(12px, 1.45vw, 26px);
  list-style: none;
  padding: 0;
  margin: 0;
}

.jg-menu > li {
  position: relative;
}

.jg-menu > li > a,
.jg-menu > li > button {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 17px 0;
  color: #454545;
  background: transparent;
  border: none;
  font-size: 16px;
  font-weight: 700;
  line-height: 1.5;
  letter-spacing: .1px;
  white-space: nowrap;
}

.jg-menu > li > a:hover,
.jg-menu > li > button:hover,
.jg-menu > li:focus-within > button {
  color: var(--jg-green);
}

.jg-chevron {
  font-size: 12px;
  transition: transform .25s ease;
}

.jg-has-dropdown:hover > button .jg-chevron,
.jg-has-dropdown:focus-within > button .jg-chevron,
.jg-has-dropdown.jg-open > button .jg-chevron {
  transform: rotate(180deg);
}

/* ============================================
 DESKTOP DROPDOWNS
 ============================================ */

.jg-dropdown {
  position: absolute;
  top: 100%;
  left: -18px;
  min-width: 285px;
  max-width: 340px;
  padding: 12px;
  margin: 0;
  list-style: none;
  background: #fff;
  border: 1px solid var(--jg-border);
  border-top: 3px solid var(--jg-green);
  border-radius: 0 0 12px 12px;
  box-shadow: 0 18px 40px rgba(0,0,0,.12);
  opacity: 0;
  visibility: hidden;
  transform: translateY(10px);
  transition: opacity .2s, visibility .2s,
              transform .2s;
  z-index: 50;
}

.jg-has-dropdown:hover > .jg-dropdown,
.jg-has-dropdown:focus-within > .jg-dropdown,
.jg-has-dropdown.jg-open > .jg-dropdown {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

.jg-dropdown a {
  display: block;
  padding: 12px 14px;
  color: var(--jg-text);
  font-size: 15px;
  font-weight: 600;
  line-height: 1.5;
  border-radius: 7px;
}

.jg-dropdown a:hover {
  background: var(--jg-cream);
  color: var(--jg-green);
}

/* ============================================
 HEADER CTA
 ============================================ */

.jg-header-actions {
  display: flex;
  align-items: center;
  gap: 14px;
  flex-shrink: 0;
}

.jg-cta {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  min-height: 54px;
  padding: 15px 23px;
  background: var(--jg-green);
  border: 2px solid var(--jg-green);
  border-radius: 11px;
  color: #fff !important;
  font-size: 15px;
  font-weight: 800;
  line-height: 1.4;
  text-transform: uppercase;
  letter-spacing: .2px;
  white-space: nowrap;
  transition: background .25s, transform .25s,
              box-shadow .25s;
}

.jg-cta:hover {
  background: var(--jg-green-dark);
  border-color: var(--jg-green-dark);
  color: #fff !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 22px rgba(52,77,14,.2);
}

.jg-cta i {
  font-size: 14px;
}

/* ============================================
 MOBILE MENU BUTTON
 ============================================ */

.jg-toggle {
  display: none;
  align-items: center;
  justify-content: center;
  width: 48px;
  height: 48px;
  flex-shrink: 0;
  border: 0;
  border-radius: 9px;
  background: var(--jg-green);
  color: #fff;
  font-size: 22px;
}

.jg-toggle:hover {
  background: var(--jg-green-dark);
}

/* ============================================
 MOBILE NAVIGATION
 ============================================ */

.jg-mobile {
  display: none;
  background: #fff;
  border-top: 1px solid var(--jg-border);
  max-height: calc(100dvh - 90px);
  overflow-y: auto;
  overscroll-behavior: contain;
}

.jg-mobile.jg-active {
  display: block;
}

.jg-mobile-inner {
  padding: 16px 24px 30px;
}

.jg-mobile-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.jg-mobile-list > li {
  border-bottom: 1px solid var(--jg-border);
}

.jg-mobile-list > li > a,
.jg-mobile-list > li > button {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  padding: 16px 4px;
  border: 0;
  background: transparent;
  color: var(--jg-heading);
  font-size: 17px;
  font-weight: 700;
  line-height: 1.5;
  text-align: left;
}

.jg-mobile-list > li > a:hover,
.jg-mobile-list > li > button:hover,
.jg-mobile-list > li > button[aria-expanded="true"] {
  color: var(--jg-green);
}

.jg-mobile-list > li > button i {
  font-size: 13px;
  transition: transform .2s;
}

.jg-mobile-list > li > button[aria-expanded="true"] i {
  transform: rotate(180deg);
}

.jg-mobile-sub {
  list-style: none;
  margin: 0;
  padding: 0 0 14px 16px;
}

.jg-mobile-sub[hidden] {
  display: none;
}

.jg-mobile-sub a {
  display: block;
  padding: 11px 9px;
  color: #666;
  font-size: 15.5px;
  font-weight: 500;
  line-height: 1.5;
}

.jg-mobile-sub a:hover {
  color: var(--jg-green);
}

.jg-mobile-cta {
  width: 100%;
  margin-top: 24px;
}

.jg-mobile-contact {
  display: grid;
  gap: 15px;
  margin-top: 25px;
}

.jg-mobile-contact a {
  color: #666;
  font-size: 15px;
  font-weight: 500;
}

.jg-mobile-contact i {
  width: 23px;
  color: var(--jg-green);
}

/* ACCESSIBILITY */

.jg-header a:focus-visible,
.jg-header button:focus-visible {
  outline: 3px solid #8EA65A;
  outline-offset: 3px;
}

/* ============================================
 RESPONSIVE TABLET
 ============================================ */

@media (max-width: 1280px) {
  .jg-desktop-navigation {
    display: none;
  }

  .jg-toggle {
    display: inline-flex;
  }
}

@media (max-width: 900px) {
  .jg-top-inner {
    padding: 10px 20px;
  }

  .jg-top-right {
    gap: 15px;
  }

  .jg-top-contact {
    gap: 16px;
  }
}

/* ============================================
 RESPONSIVE MOBILE
 ============================================ */

@media (max-width: 767px) {
  .jg-topbar {
    display: none;
  }

  .jg-nav-inner {
    padding: 12px 18px;
  }

  .jg-logo img {
    max-width: 155px;
    max-height: 65px;
  }

  .jg-header-actions > .jg-cta {
    display: none;
  }

  .jg-mobile-list > li > a,
  .jg-mobile-list > li > button {
    font-size: 16px;
  }

  .jg-mobile-sub a {
    font-size: 15px;
  }

  .jg-mobile-cta {
    font-size: 15px;
  }
}

@media (prefers-reduced-motion: reduce) {
  .jg-header *,
  .jg-header *::before,
  .jg-header *::after {
    transition: none !important;
  }
}
</style>

<!-- ============================================
 HEADER HTML
 ============================================ -->

<header class="jg-header" id="jg-header">

  <!-- TOP BAR -->
  <div class="jg-topbar">
    <div class="jg-top-inner">

      <div class="jg-top-contact">

        <a href="mailto:info@jargatours.com">
          <i class="fas fa-envelope"
             aria-hidden="true"></i>
          info@jargatours.com
        </a>

        <a href="tel:+255741312874">
          <i class="fas fa-phone-alt"
             aria-hidden="true"></i>
          +255 741 312 874
        </a>

      </div>

      <div class="jg-top-right">

        <div class="jg-socials">

          <a href="https://www.facebook.com/profile.php?id=61567099386498"
             target="_blank"
             rel="noopener noreferrer"
             aria-label="Facebook">
            <i class="fab fa-facebook-f"
               aria-hidden="true"></i>
          </a>

          <a href="https://www.instagram.com/jargatours/"
             target="_blank"
             rel="noopener noreferrer"
             aria-label="Instagram">
            <i class="fab fa-instagram"
               aria-hidden="true"></i>
          </a>

        </div>

        <span class="jg-top-divider"></span>

        <a href="about-us">About Us</a>
        <a href="contact-us">Contact Us</a>

      </div>
    </div>
  </div>

  <!-- MAIN HEADER -->
  <div class="jg-nav">
    <div class="jg-nav-inner">

      <!-- LOGO -->
      <a class="jg-logo"
         href="index.php"
         aria-label="Jarga Tours Home">

        <img src="assets/img/newversion.png"
             alt="Jarga Tours Logo">

      </a>

      <!-- DESKTOP NAVIGATION -->
      <nav class="jg-desktop-navigation"
           aria-label="Main navigation">

        <ul class="jg-menu">

          <li>
            <a href="index.php">Home</a>
          </li>

          <!-- SAFARI -->
          <li class="jg-has-dropdown">

            <button type="button"
                    aria-expanded="false">
              Tanzania Safari
              <i class="fas fa-chevron-down jg-chevron"
                 aria-hidden="true"></i>
            </button>

            <ul class="jg-dropdown">

              <li><a href="tanzania-camping-safari">Tanzania Camping Safari</a></li>

              <li><a href="tanzania-mid-range-safari">Tanzania Lodge Safari</a></li>

              <li><a href="northern-tanzania-safari-packages">Northern Tanzania Safaris</a></li>

              <li><a href="best-tanzania-luxury-safaris">Best Tanzania Luxury Safaris</a></li>

              <li><a href="hot-air-balloon-safari">Hot Air Balloon Safari</a></li>

              <li><a href="walking-tanzania-safari">Walking Tanzania Safari</a></li>

              <li><a href="wildbeest-migration-safari">Wildebeest Migration Safari</a></li>

            </ul>
          </li>

          <!-- MOUNTAIN -->
          <li class="jg-has-dropdown">

            <button type="button"
                    aria-expanded="false">
              Mountain Trekking
              <i class="fas fa-chevron-down jg-chevron"
                 aria-hidden="true"></i>
            </button>

            <ul class="jg-dropdown">

              <li><a href="why-climbing-mt-kilimanjaro">Why Climb Kilimanjaro</a></li>

              <li><a href="kilimanjaro-climbing-itineraries">Kilimanjaro Climbing Itineraries</a></li>

              <li><a href="kilimanjaro-packing-list">Kilimanjaro Packing List</a></li>

              <li><a href="kilimanjaro-guides-and-porters">Kilimanjaro Guides &amp; Porters</a></li>

              <li><a href="kilimanjaro-healthy-and-safety">Kilimanjaro Health &amp; Safety</a></li>

              <li><a href="best-time-to-climb-kilimanjaro">Best Time to Climb Kilimanjaro</a></li>

              <li><a href="mt-meru-trekking-tour">Mount Meru Climbing</a></li>

              <li><a href="mt-oldonyo-lengai-trekking">Mount Ol Doinyo Lengai</a></li>

              <li><a href="usambara-mt-trekking">Usambara Mountains Trekking</a></li>

            </ul>
          </li>

          <!-- ZANZIBAR -->
          <li>
            <a href="zanzibar-holiday">
              Zanzibar Holiday
            </a>
          </li>

          <!-- DAY TRIPS -->
          <li class="jg-has-dropdown">

            <button type="button"
                    aria-expanded="false">
              Day Trips
              <i class="fas fa-chevron-down jg-chevron"
                 aria-hidden="true"></i>
            </button>

            <ul class="jg-dropdown">

              <li><a href="materuni-waterfalls-day-tour">Materuni Waterfalls</a></li>

              <li><a href="arusha-national-park-day-tour">Arusha National Park</a></li>

              <li><a href="tarangire-national-park-day-tour">Tarangire National Park</a></li>

              <li><a href="ngorongoro-day-tour">Ngorongoro Day Tour</a></li>

              <li><a href="lake-manyara-day-tour">Lake Manyara Day Tour</a></li>

              <li><a href="kikuletwa-hot-spring-day-tour">Kikuletwa Hot Springs</a></li>

              <li><a href="lake-chala-day-tour">Lake Chala</a></li>

              <li><a href="maasai-village-cultural-tour">Maasai Cultural Tour</a></li>

            </ul>
          </li>

          <!-- OUR STORY -->
          <li class="jg-has-dropdown">

            <button type="button"
                    aria-expanded="false">
              Our Story
              <i class="fas fa-chevron-down jg-chevron"
                 aria-hidden="true"></i>
            </button>

            <ul class="jg-dropdown">

              <li><a href="about-us">About Us</a></li>

              <li><a href="our-booking-terms-and-conditions">Booking Terms &amp; Conditions</a></li>

              <li><a href="passport-and-visas-requirements">Passport &amp; Visa Requirements</a></li>

              <li><a href="travel-insurance">Travel Insurance</a></li>

            </ul>
          </li>

        </ul>
      </nav>

      <!-- ACTION BUTTONS -->
      <div class="jg-header-actions">

        <a href="contact-us"
           class="jg-cta">
          Plan Your Safari
          <i class="fas fa-arrow-right"
             aria-hidden="true"></i>
        </a>

        <button class="jg-toggle"
                type="button"
                aria-label="Open navigation menu"
                aria-controls="jg-mobile-menu"
                aria-expanded="false">

          <i class="fas fa-bars"
             aria-hidden="true"></i>

        </button>

      </div>

    </div>
  </div>

  <!-- ============================================
       MOBILE MENU
       ============================================ -->

  <nav class="jg-mobile"
       id="jg-mobile-menu"
       aria-label="Mobile navigation">

    <div class="jg-mobile-inner">

      <ul class="jg-mobile-list">

        <li>
          <a href="index.php">Home</a>
        </li>

        <!-- MOBILE SAFARI -->
        <li>
          <button type="button"
                  aria-expanded="false"
                  aria-controls="jg-sub-safari">
            Tanzania Safari
            <i class="fas fa-chevron-down"
               aria-hidden="true"></i>
          </button>

          <ul class="jg-mobile-sub"
              id="jg-sub-safari"
              hidden>

            <li><a href="tanzania-camping-safari">Tanzania Camping Safari</a></li>

            <li><a href="tanzania-mid-range-safari">Tanzania Lodge Safari</a></li>

            <li><a href="northern-tanzania-safari-packages">Northern Tanzania Safaris</a></li>

            <li><a href="best-tanzania-luxury-safaris">Best Tanzania Luxury Safaris</a></li>

            <li><a href="hot-air-balloon-safari">Hot Air Balloon Safari</a></li>

            <li><a href="walking-tanzania-safari">Walking Tanzania Safari</a></li>

            <li><a href="wildbeest-migration-safari">Wildebeest Migration Safari</a></li>

          </ul>
        </li>

        <!-- MOBILE MOUNTAIN -->
        <li>
          <button type="button"
                  aria-expanded="false"
                  aria-controls="jg-sub-mountain">
            Mountain Trekking
            <i class="fas fa-chevron-down"
               aria-hidden="true"></i>
          </button>

          <ul class="jg-mobile-sub"
              id="jg-sub-mountain"
              hidden>

            <li><a href="why-climbing-mt-kilimanjaro">Why Climb Kilimanjaro</a></li>

            <li><a href="kilimanjaro-climbing-itineraries">Kilimanjaro Climbing Itineraries</a></li>

            <li><a href="kilimanjaro-packing-list">Kilimanjaro Packing List</a></li>

            <li><a href="kilimanjaro-guides-and-porters">Guides &amp; Porters</a></li>

            <li><a href="kilimanjaro-healthy-and-safety">Health &amp; Safety</a></li>

            <li><a href="best-time-to-climb-kilimanjaro">Best Time to Climb</a></li>

            <li><a href="mt-meru-trekking-tour">Mount Meru Climbing</a></li>

            <li><a href="mt-oldonyo-lengai-trekking">Mount Ol Doinyo Lengai</a></li>

            <li><a href="usambara-mt-trekking">Usambara Mountains</a></li>

          </ul>
        </li>

        <!-- MOBILE ZANZIBAR -->
        <li>
          <a href="zanzibar-holiday">
            Zanzibar Holiday
          </a>
        </li>

        <!-- MOBILE DAY TRIPS -->
        <li>
          <button type="button"
                  aria-expanded="false"
                  aria-controls="jg-sub-trips">
            Day Trips
            <i class="fas fa-chevron-down"
               aria-hidden="true"></i>
          </button>

          <ul class="jg-mobile-sub"
              id="jg-sub-trips"
              hidden>

            <li><a href="materuni-waterfalls-day-tour">Materuni Waterfalls</a></li>

            <li><a href="arusha-national-park-day-tour">Arusha National Park</a></li>

            <li><a href="tarangire-national-park-day-tour">Tarangire National Park</a></li>

            <li><a href="ngorongoro-day-tour">Ngorongoro Day Tour</a></li>

            <li><a href="lake-manyara-day-tour">Lake Manyara</a></li>

            <li><a href="kikuletwa-hot-spring-day-tour">Kikuletwa Hot Springs</a></li>

            <li><a href="lake-chala-day-tour">Lake Chala</a></li>

            <li><a href="maasai-village-cultural-tour">Maasai Cultural Tour</a></li>

          </ul>
        </li>

        <!-- MOBILE OUR STORY -->
        <li>
          <button type="button"
                  aria-expanded="false"
                  aria-controls="jg-sub-about">
            Our Story
            <i class="fas fa-chevron-down"
               aria-hidden="true"></i>
          </button>

          <ul class="jg-mobile-sub"
              id="jg-sub-about"
              hidden>

            <li><a href="about-us">About Us</a></li>

            <li><a href="our-booking-terms-and-conditions">Booking Terms &amp; Conditions</a></li>

            <li><a href="passport-and-visas-requirements">Passport &amp; Visas</a></li>

            <li><a href="travel-insurance">Travel Insurance</a></li>

          </ul>
        </li>

        <li>
          <a href="contact-us">Contact Us</a>
        </li>

      </ul>

      <!-- MOBILE CTA -->
      <a href="contact-us"
         class="jg-cta jg-mobile-cta">
        Plan Your Safari
        <i class="fas fa-arrow-right"
           aria-hidden="true"></i>
      </a>

      <!-- MOBILE CONTACT -->
      <div class="jg-mobile-contact">

        <a href="tel:+255741312874">
          <i class="fas fa-phone-alt"
             aria-hidden="true"></i>
          +255 741 312 874
        </a>

        <a href="mailto:info@jargatours.com">
          <i class="fas fa-envelope"
             aria-hidden="true"></i>
          info@jargatours.com
        </a>

      </div>

    </div>
  </nav>

</header>

<!-- ============================================
 HEADER JAVASCRIPT
 ============================================ -->

<script>
(function () {
  "use strict";

  const header = document.getElementById("jg-header");
  if (!header) return;

  const toggle = header.querySelector(".jg-toggle");
  const mobile = header.querySelector(".jg-mobile");
  const desktopButtons =
    header.querySelectorAll(".jg-has-dropdown > button");

  function closeMobile() {
    mobile.classList.remove("jg-active");
    toggle.setAttribute("aria-expanded", "false");
    toggle.setAttribute(
      "aria-label",
      "Open navigation menu"
    );

    const icon = toggle.querySelector("i");
    if (icon) icon.className = "fas fa-bars";
  }

  function closeDesktopDropdowns() {
    header.querySelectorAll(".jg-has-dropdown")
      .forEach(function (item) {
        item.classList.remove("jg-open");

        const button = item.querySelector("button");
        if (button) {
          button.setAttribute("aria-expanded", "false");
        }
      });
  }

  /* Mobile menu */
  toggle.addEventListener("click", function () {
    const isOpen =
      !mobile.classList.contains("jg-active");

    mobile.classList.toggle("jg-active", isOpen);

    toggle.setAttribute(
      "aria-expanded",
      String(isOpen)
    );

    toggle.setAttribute(
      "aria-label",
      isOpen
        ? "Close navigation menu"
        : "Open navigation menu"
    );

    const icon = toggle.querySelector("i");

    if (icon) {
      icon.className =
        isOpen ? "fas fa-times" : "fas fa-bars";
    }
  });

  /* Mobile dropdowns */
  header.querySelectorAll(
    ".jg-mobile-list > li > button"
  ).forEach(function (button) {

    button.addEventListener("click", function () {
      const targetId =
        button.getAttribute("aria-controls");

      const target =
        document.getElementById(targetId);

      if (!target) return;

      const isOpen =
        button.getAttribute("aria-expanded") !== "true";

      button.setAttribute(
        "aria-expanded",
        String(isOpen)
      );

      target.hidden = !isOpen;
    });

  });

  /* Desktop dropdowns */
  desktopButtons.forEach(function (button) {

    button.addEventListener("click", function () {
      const parent = button.parentElement;
      const isOpen =
        !parent.classList.contains("jg-open");

      closeDesktopDropdowns();

      parent.classList.toggle("jg-open", isOpen);

      button.setAttribute(
        "aria-expanded",
        String(isOpen)
      );
    });

  });

  /* Click outside */
  document.addEventListener("click", function (event) {
    if (!header.contains(event.target)) {
      closeMobile();
      closeDesktopDropdowns();
    }
  });

  /* Escape key */
  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      closeMobile();
      closeDesktopDropdowns();
    }
  });

  /* Resize */
  window.addEventListener("resize", function () {
    if (window.innerWidth > 1280) {
      closeMobile();
    }
  });

})();
</script>

<!-- END JARGA TOURS HEADER -->
