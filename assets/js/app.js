const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const body = document.getElementById("body-area");

menuIcon.addEventListener("click", function () {
  if (slideoutMenu.style.opacity == "1") {
    slideoutMenu.style.opacity = "0";
    slideoutMenu.style.pointerEvents = "none";
    // navcolored.style.boxShadow = "0 1px 2px rgba(0, 0, 0, 0.5)";
    body.style.overflow = "auto";

    $(".hamburger").toggleClass("is-active");
  } else {
    slideoutMenu.style.opacity = "1";
    slideoutMenu.style.pointerEvents = "auto";
    body.style.overflow = "hidden";
    // navcolored.style.boxShadow = "none";
    $(".hamburger").toggleClass("is-active");
  }
});

(function () {
  $(".menu-lists").on("click", function () {
    $(".hamburger").toggleClass("is-active");
  });
})();

function closeNavSp() {
  if (slideoutMenu.style.opacity == "1") {
    slideoutMenu.style.opacity = "0";
    slideoutMenu.style.pointerEvents = "none";
    body.style.overflow = "auto";
    $(".hamburger").toggleClass("is-active");
  } else {
    slideoutMenu.style.opacity = "1";
    slideoutMenu.style.pointerEvents = "auto";
    $(".hamburger").toggleClass("is-active");
    body.style.overflow = "hidden";
  }
}
