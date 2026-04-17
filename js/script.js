const menu = document.querySelector("#hamburger-menu");
const nav = document.querySelector(".navbar-nav");
const overlay = document.querySelector(".overlay");

menu.onclick = () => {
  nav.classList.toggle("active");
  overlay.classList.toggle("active");
};
