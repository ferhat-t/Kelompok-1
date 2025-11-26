// Toggle class active
const navbarNav = document.querySelector(".navbar-nav");

//ketika menu icon diklik
document.querySelector("#menu-icon").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik di luar sidebar untuk menghilangkkan nav
const menu = document.querySelector("#menu-icon");
document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
