const nav_links = document.querySelectorAll(".nav-link");
const burger = document.querySelector(".burger");

window.onresize = () => {
  const active = document.querySelector(".active");
  underlineLink(active);
};

function underlineLink(elem) {
  const underline = document.getElementById("underline");
  underline.style.left = `${elem.offsetLeft}px`;
  underline.style.width = `${elem.offsetWidth}px`;
}

nav_links.forEach((nav_link) => {
  nav_link.addEventListener("click", (e) => {
    nav_links.forEach((link) => link.classList.remove("active"));
    e.target.classList.add("active");
    underlineLink(e.target);
  });
});

/* burger */
burger.addEventListener("click", () => {
  if (burger.classList.contains("fa-bars")) {
    burger.classList.replace("fa-bars", "fa-times");
  } else {
    burger.classList.replace("fa-times", "fa-bars");
  }
});



/*------------------------SCROLL NAVIGATION-----------------------*/
window.addEventListener('scroll', function() {
  const header = document.querySelector('header');
  if (window.scrollY > 0) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});


/*------------------------SMOOTH SCROLLING-----------------------*/
document.addEventListener('DOMContentLoaded', function() {
  let scrollLinks = document.querySelectorAll('a[href^="#"]');
  
  for (let link of scrollLinks) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      
      let targetId = this.getAttribute('href').substring(1);
      let targetElement = document.getElementById(targetId);
      
      window.scrollTo({
        top: targetElement.offsetTop,
        behavior: 'smooth'
      });
    });
  }
});