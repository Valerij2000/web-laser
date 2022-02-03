// preloader
window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
}
// navbar active links
const arrNavLinks = document.querySelectorAll('.nav-link')
// default
arrNavLinks[0].classList.add('active');

function removeClassActive() {
  for (item of arrNavLinks) {
    item.classList.remove('active');
  }
}

function addClassActive() {
  for(item of arrNavLinks) {
    item.addEventListener('click', (e) => {
      removeClassActive();
      e.target.classList.add('active');
    })
  }
}
addClassActive();

// reset navbar active links if user scrolling
document.getElementById("scroll").addEventListener("wheel", removeClassActive);