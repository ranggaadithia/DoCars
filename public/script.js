// animation
AOS.init();
// carosel
$(".owl-carousel").owlCarousel({
  loop: false,
  nav: false,
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});

// popover
("use strict");
$(function () {
  $(".example-popover").popover({
    container: "body",
  });
  var dcolor = $(".example-popover").attr("data-theme");
  if (dcolor == "dark") {
    $(".popover").addClass("bg-dark");
  }
});

// smooth scroll
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

// active
const active = document.querySelector(".nav-link");
active.addEventListener("click", function () {
  active.classList.add("active");
});
