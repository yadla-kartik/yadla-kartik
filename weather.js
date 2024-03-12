function fetchWeatherData() {
    return new Promise(e=>{
        setTimeout(()=>{
            console.log("Weather data fetched"),
            e()
        }
        , 1e3)
    }
    )
}
document.getElementById("loadingAnimation").style.display = "block",
fetchWeatherData().then(()=>{
    document.getElementById("loadingAnimation").style.display = "none"
}
),
document.addEventListener("DOMContentLoaded", function() {
    let e = document.querySelector(".navbar.fixed-top");
    if (e) {
        let t = e.offsetHeight;
        document.body.style.paddingTop = `${t}px`
    }
    let n = document.querySelectorAll(".navbar-nav .nav-link, .navbar-nav .dropdown-item");
    n.forEach(function(e) {
        e.addEventListener("click", function(e) {
            if (e.target.classList.contains("dropdown-toggle"))
                return;
            let t = document.querySelector(".navbar-collapse");
            t.classList.contains("show") && t.classList.remove("show")
        })
    }),
    window.addEventListener("scroll", function() {
        var e = document.querySelector("nav.navbar");
        window.pageYOffset > 0 ? e.classList.add("scrolled") : e.classList.remove("scrolled")
    }),
    new SimpleLightbox(".simple-lightbox"),
    "undefined" != typeof Swiper ? new Swiper(".swiper-container",{
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            640: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 50
            }
        }
    }) : console.error("Swiper is not defined. Ensure the Swiper script is loaded."),
    "undefined" != typeof Swiper ? new Swiper(".swiper-container2",{
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-container2 .swiper-button-next",
            prevEl: ".swiper-container2 .swiper-button-prev"
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 40
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 50
            }
        }
    }) : console.error("Swiper is not defined. Ensure the Swiper script is loaded.");
    let i = document.querySelectorAll("#forecastTabs a");
    i.forEach(function(e) {
        e.addEventListener("click", function(e) {
            e.preventDefault(),
            i.forEach(function(e) {
                e.classList.remove("active")
            }),
            this.classList.add("active");
            let t = this.getAttribute("href").substring(1)
              , n = document.querySelectorAll(".tab-pane");
            n.forEach(function(e) {
                e.classList.remove("active")
            }),
            document.getElementById(t).classList.add("active")
        })
    });
    let s = document.getElementById("scrollToTop");
    window.addEventListener("scroll", function() {
        window.scrollY > 300 ? s.classList.remove("d-none") : s.classList.add("d-none")
    }),
    s.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        })
    });
    let a = document.getElementById("contactForm");
    a.addEventListener("submit", function(e) {
        e.preventDefault();
        let t = document.getElementById("name").value
          , n = document.getElementById("email").value
          , i = document.getElementById("message").value;
        t && n && i ? (alert("Thank you for contacting us. We will get back to you soon."),
        a.reset()) : alert("Please fill in all fields.")
    });
    let l = document.getElementById("newsletterForm");
    l.addEventListener("submit", function(e) {
        e.preventDefault();
        let t = document.getElementById("email").value;
        console.log("Subscribed with email:", t),
        l.reset()
    })
});

 // Initialize Swiper
 var swiper = new Swiper('.swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });