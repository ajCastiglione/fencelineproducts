function shortenProductDesc($) {
  let descriptions = $(".text");
  for (let description of descriptions) {
    let wordArr = $(description).text().split(" ");
    let newDescription = wordArr.splice(0, 8).join(" ") + "...";
    $(description).html(newDescription);
  }
}

function slider($) {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
      '<i class="fas fa-caret-left" />',
      '<i class="fas fa-caret-right" />',
    ],
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
    },
  });
}

jQuery(document).ready(function ($) {
  if ($("body").hasClass("home")) {
    shortenProductDesc($);
    slider($);
  }
}); /* end of as page load scripts */
