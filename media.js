const nav = document.querySelector('nav');
const navUl = document.querySelector('nav ul');
const navUla = document.querySelectorAll('nav ul a');
const burger = document.getElementById('burger');
const topBtn = document.getElementById('top_btn');
const navLinks = document.querySelectorAll('nav a');
const navUlli = document.querySelectorAll('nav li');
const head5 = document.getElementById('head_5');

document.addEventListener('DOMContentLoaded', () => {
    for (let i = 0; i < navLinks.length; i++) {
            setTimeout(() => {navLinks[i].style.opacity = ".7";}, 200*(i + 1));
    }   
    if (head5 !== null) {
        head5.style.left = "50%";
        head5.style.transform.translateX = "-50%";
        head5.style.backgroundColor = "black";
        head5.style.color = "white";
        head5.style.border = "2px solid white";
    }
})

// Mobile Navigation

burger.addEventListener('click', () => {
    // Toggle Menu
    navUl.classList.toggle('nav_active');
    // Mobile-Link-Animation
    navUlli.forEach((link, index) => {
        if (link.style.animation) {
            link.style.animation = "";
        } else {
            link.style.animation = `mobile_nav_anim 1s forwards ${index / 6}s`;
        }
    })
    // burger-animation
    burger.classList.toggle('burgeranim');
})

// deactivate mobile-menu after nav link is clicked
for (let i = 0; i < navUla.length; i++) {
    navUla[i].addEventListener('click', () => {
        navUl.classList.remove('nav_active');
        burger.classList.remove('burgeranim');
        navUlli.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = "";
            }
    })
})

// deactivate mobile-navigation when window-width is > 768

window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) {
        navUl.classList.remove('nav_active');
        burger.classList.remove('burgeranim');
        navUlli.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation ="";
            }
        })
    }
})
}

// top-Button

window.addEventListener('scroll', () => {
    if (pageYOffset > 1260) {
        topBtn.style.right = "-1.7rem";
        topBtn.style.opacity = "1";
    } else {
        topBtn.style.right = "-5.3rem";
        topBtn.style.opacity = "0";
    }
})

topBtn.addEventListener('click', () => {
    scrollTo(0,0);
})




