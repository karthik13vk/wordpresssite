const sections = document.querySelectorAll('.scroll-animation');

const options = {
  root: null, 
  threshold: 0.1
};
const handleIntersection = (entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    } else {
      entry.target.classList.remove('visible');
    }
  });
};

const observer = new IntersectionObserver(handleIntersection, options);

sections.forEach(section => observer.observe(section));


function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }
  
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }
