document.addEventListener("DOMContentLoaded", () => {
  const hero = document.querySelector('.hero');
  setTimeout(() => {
    hero.style.transition = 'opacity 1.2s ease';
    hero.style.opacity = 1;
  }, 300);
  
  // AOS initialization for smooth scroll animations
  AOS.init({
      duration: 1000,  // Durasi animasi
      easing: 'ease-in-out',  // Efek easing animasi
      once: true  // Hanya sekali animasi terjadi
  });
  
  // Scroll ke bagian portofolio saat tombol diklik
  const btn = document.querySelector('.btn');
  if (btn) {
      btn.addEventListener("click", function (e) {
          e.preventDefault();
          document.querySelector('#portofolio').scrollIntoView({
              behavior: "smooth"
          });
      });
  }
});

// Particle.js initialization
particlesJS("particle-background", {
  "particles": {
      "number": {
          "value": 80, 
          "density": {
              "enable": true,
              "value_area": 800
          }
      },
      "color": {
          "value": "#ff6f61"
      },
      "shape": {
          "type": "circle",
          "stroke": {
              "width": 0,
              "color": "#000000"
          },
      },
      "opacity": {
          "value": 0.5,
          "random": true,
          "anim": {
              "enable": true,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
          }
      },
      "size": {
          "value": 3,
          "random": true,
          "anim": {
              "enable": true,
              "speed": 5,
              "size_min": 0.1,
              "sync": false
          }
      },
      "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#ff6f61",
          "opacity": 0.4,
          "width": 1
      },
      "move": {
          "enable": true,
          "speed": 6,
          "direction": "none",
          "random": true,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
              "enable": true,
              "rotateX": 600,
              "rotateY": 1200
          }
      }
  },
  "interactivity": {
      "detect_on": "window",
      "events": {
          "onhover": {
              "enable": true,
              "mode": "repulse"
          },
          "onclick": {
              "enable": true,
              "mode": "push"
          },
          "resize": true
      }
  },
  "retina_detect": true
});
