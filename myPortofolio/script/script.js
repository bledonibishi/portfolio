const menu = document.querySelector(".nav-icon");
const nav = document.querySelector(".navbar");
const links = document.querySelectorAll(".links-control");

menu.addEventListener("click", function (e) {
  e.preventDefault();
  nav.classList.toggle("active");
  // links.forEach((link) => link.classList.toggle("active"));
});
menu.onClick = function (e) {};
document.querySelector(".nav-icon").addEventListener("click", function (e) {
  e.preventDefault();
  // console.log("bab");
});
