document.addEventListener("DOMContentLoaded", () => {
  if (window.lucide) window.lucide.createIcons();
  const header = document.querySelector(".site-header");
  const onScroll = () => header?.classList.toggle("is-scrolled", window.scrollY > 12);
  onScroll();
  window.addEventListener("scroll", onScroll, { passive: true });
  const nav = document.querySelector("#mainNav");
  document.querySelectorAll("#mainNav .nav-link:not(.dropdown-toggle)").forEach(link => {
    link.addEventListener("click", () => {
      if (window.innerWidth < 992 && nav?.classList.contains("show")) {
        bootstrap.Collapse.getOrCreateInstance(nav).hide();
      }
    });
  });
});

  const topButton = document.getElementById("backToTop");
  const updateTopButton = () => topButton?.classList.toggle("is-visible", window.scrollY > 420);
  updateTopButton();
  window.addEventListener("scroll", updateTopButton, { passive: true });
  topButton?.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));

  document.querySelectorAll("[data-slide-prev], [data-slide-next]").forEach(button => {
    button.addEventListener("click", () => {
      const id = button.dataset.slidePrev || button.dataset.slideNext;
      const carousel = bootstrap.Carousel.getOrCreateInstance(document.getElementById(id));
      button.hasAttribute("data-slide-prev") ? carousel.prev() : carousel.next();
    });
  });


// Show the welcome prompt five seconds after the first page view in a browser session.
document.addEventListener("DOMContentLoaded", function () {
  const modalElement = document.getElementById("unirevoWelcomeModal");
  if (!modalElement || !window.bootstrap) return;
  try {
    if (sessionStorage.getItem("unirevoWelcomeSeen") === "1") return;
    window.setTimeout(function () {
      if (sessionStorage.getItem("unirevoWelcomeSeen") === "1") return;
      const modal = bootstrap.Modal.getOrCreateInstance(modalElement);
      modal.show();
      sessionStorage.setItem("unirevoWelcomeSeen", "1");
    }, 5000);
  } catch (error) {
    window.setTimeout(function () {
      bootstrap.Modal.getOrCreateInstance(modalElement).show();
    }, 5000);
  }
});


// EMI calculator interactions
document.addEventListener("DOMContentLoaded", function () {
  const amount = document.getElementById("loanAmount");
  if (!amount) return;
  const rate = document.getElementById("interestRate");
  const years = document.getElementById("loanTenure");
  const amountNumber = document.getElementById("loanAmountNumber");
  const rateNumber = document.getElementById("interestNumber");
  const yearsNumber = document.getElementById("tenureNumber");
  const inr = value => "₹" + Math.round(value).toLocaleString("en-IN");
  function calculate() {
    const p = Number(amount.value), annualRate = Number(rate.value), months = Number(years.value) * 12;
    const monthlyRate = annualRate / 1200;
    const emi = monthlyRate === 0 ? p / months : p * monthlyRate * Math.pow(1 + monthlyRate, months) / (Math.pow(1 + monthlyRate, months) - 1);
    const total = emi * months, interest = total - p;
    document.getElementById("loanAmountOutput").textContent = inr(p);
    document.getElementById("interestOutput").textContent = annualRate.toFixed(1).replace(/\.0$/,"") + "%";
    document.getElementById("tenureOutput").textContent = years.value + (Number(years.value) === 1 ? " Year" : " Years");
    document.getElementById("monthlyEmi").textContent = Math.round(emi).toLocaleString("en-IN");
    document.getElementById("heroEmi").textContent = Math.round(emi).toLocaleString("en-IN");
    document.getElementById("principalResult").textContent = inr(p);
    document.getElementById("interestResult").textContent = inr(interest);
    document.getElementById("totalResult").textContent = inr(total);
    const principalPct = total > 0 ? (p / total) * 100 : 100;
    document.getElementById("principalBar").style.width = principalPct + "%";
    document.getElementById("interestBar").style.width = (100-principalPct) + "%";
    amountNumber.value = p; rateNumber.value = annualRate; yearsNumber.value = years.value;
  }
  function bind(range, number, min, max) {
    range.addEventListener("input", calculate);
    number.addEventListener("change", function () {
      let value = Number(number.value);
      if (!Number.isFinite(value)) value = min;
      value = Math.min(max, Math.max(min, value));
      range.value = value; calculate();
    });
  }
  bind(amount, amountNumber, 50000, 10000000);
  bind(rate, rateNumber, 1, 30);
  bind(years, yearsNumber, 1, 30);
  calculate();
});


// Subtle scroll reveals and image/card interactions across the site.
document.addEventListener("DOMContentLoaded", function () {
  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const revealTargets = document.querySelectorAll(
    "main section:not(.contact-hero), .product-card, .contact-method-card, .about-value-card, .about-stand-card, .review-card, .faq-item, .contact-form-card, .emi-calculator-card"
  );

  if (!reduceMotion && "IntersectionObserver" in window) {
    revealTargets.forEach((element, index) => {
      element.classList.add("unirevo-reveal");
      if (element.matches(".product-card, .about-value-card, .about-stand-card, .contact-method-card")) {
        element.style.setProperty("--reveal-delay", (index % 4) * 75 + "ms");
      }
    });

    const observer = new IntersectionObserver((entries, revealObserver) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-revealed");
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: "0px 0px -35px 0px" });

    revealTargets.forEach(element => observer.observe(element));
  }

  // Give meaningful image areas a gentle hover zoom without changing layout.
  document.querySelectorAll(
    ".about-photo, .experience-photo, .contact-hero-image, .contact-aside-image, .about-page-hero-visual, .about-commitment-image, .contact-map-card"
  ).forEach(element => element.classList.add("unirevo-image-hover"));
});


// Shared footer back-to-top control.
document.addEventListener("DOMContentLoaded", function () {
  const top = document.querySelector(".unirevo-floating-tools .top-action");
  if (!top) return;
  const toggle = () => top.classList.toggle("is-visible", window.scrollY > 350);
  toggle();
  window.addEventListener("scroll", toggle, { passive: true });
  top.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));
});
