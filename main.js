const title1 = document.querySelector('#title_1 span');
const title2 = document.querySelector('#title_2');
const head1 = document.getElementById('head_1');
const head2 = document.getElementById('head_2');
const head3 = document.getElementById('head_3');
const head4 = document.getElementById('head_4');
const nav = document.querySelector('nav');
const navUl = document.querySelector('nav ul');
const navUla = document.querySelectorAll('nav ul a');
const anchorHome = document.getElementById('home_anchor');
const anchorAbout = document.getElementById('about_anchor');
const anchorBilder = document.getElementById('pictures_anchor');
const anchorUnterricht = document.getElementById('unterricht_anchor');
const anchorKontakt = document.getElementById('kontakt_anchor');
const burger = document.getElementById('burger');
const topBtn = document.getElementById('top_btn');
const pic1 = document.querySelector('#pic_1');
const navLinks = document.querySelectorAll('nav a');
const navUlli = document.querySelectorAll('nav li');
const unterrichtPic = document.querySelectorAll('#drumsetoverhead_pic div p');
const picAnim = document.querySelectorAll('#pictures img');
const modal = document.getElementById('modal');
const clickedPic = document.querySelectorAll('#grid_cnt img');
const exitBtn = document.getElementById('exit_btn');
const modalPic = document.querySelectorAll('.modal_pic');
const nextBtn = document.getElementById('next_button');
const prevBtn = document.getElementById('prev_button');
const playBtn = document.getElementById('play_button');
const submitBtn = document.getElementById('submit');
const form = document.querySelector('form');
const messageStatus = document.getElementById('message_status');
let auto = false;
let slideInterval;

// Set the real Viewport-height for mobile devices

let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

// Animation Landingpage

window.addEventListener('load', () => {
    title1.style.left = "50%";
    title2.style.right = "50%";

    for (let i = 0; i < navLinks.length; i++) {
            setTimeout(() => {navLinks[i].style.opacity = ".7";}, 200*(i + 1));
    }   
})

window.addEventListener('scroll', () => {
if (nav.getBoundingClientRect().top <= 0) {
    nav.style.position = "fixed";
    nav.style.top = "0";
    nav.style.bottom = ""; 
    title1.style.left = "-50%";    
    title2.style.right = "-50%";  
} 
})

// the height-value of the nav-bar is stored in navHeight as a number

let style = window.getComputedStyle(nav);
let navHeight = parseInt(style.getPropertyValue("height"));

window.addEventListener('scroll', () => {
    if (window.pageYOffset - window.innerHeight <= - navHeight) {
        nav.style.position = "absolute";
        nav.style.top= "";
        nav.style.bottom = "0";
        title1.style.left = "50%";
        title2.style.right = "50%";
    }
})

// Headline Animation

window.addEventListener('scroll', () => {
    if (head1.getBoundingClientRect().top < 420) {
        head1.style.left = "50%";
        head1.style.transform.translateX = "-50%";
        head1.style.backgroundColor = "black";
        head1.style.color = "white";
        head1.style.border = "2px solid white";
    } else {
            head1.style.left = "-50%";
            head1.style.backgroundColor = "white";
            head1.style.color = "black";
            head1.style.border = "2px solid black";
            }
    if (window.innerWidth <= 760) {
        head1.style.backgroundColor = "white";
        head1.style.color = "black";
        head1.style.border = "2px solid black";
    }
})

window.addEventListener('scroll', () => {
    if (head2.getBoundingClientRect().top < 420) {
        head2.style.left = "50%";
        head2.style.transform.translateX = "-50%";
        head2.style.backgroundColor = "black";
        head2.style.color = "white";
        head2.style.border = "2px solid white";
    } else {
            head2.style.left = "-50%";
            head2.style.backgroundColor = "white";
            head2.style.color = "black";
            head2.style.border = "2px solid black";
            } 
    if (window.innerWidth <= 760) {
        head2.style.backgroundColor = "white";
        head2.style.color = "black";
        head2.style.border = "2px solid black";
    }
})

window.addEventListener('scroll', () => {
    if (head3.getBoundingClientRect().top < 420) {
        head3.style.left = "50%";
        head3.style.transform.translateX = "-50%";
        head3.style.backgroundColor = "black";
        head3.style.color = "white";
        head3.style.border = "2px solid white";
    } else {
            head3.style.left = "-50%";
            head3.style.backgroundColor = "white";
            head3.style.color = "black";
            head3.style.border = "2px solid black";
            } 
    if (window.innerWidth <= 760) {
        head3.style.backgroundColor = "white";
        head3.style.color = "black";
        head3.style.border = "2px solid black";
    }
})

window.addEventListener('scroll', () => {
    if (head4.getBoundingClientRect().top < 420) {
        head4.style.left = "50%";
        head4.style.transform.translateX = "-50%";
        head4.style.backgroundColor = "black";
        head4.style.color = "white";
        head4.style.border = "2px solid white";
    } else {
            head4.style.left = "-50%";
            head4.style.backgroundColor = "white";
            head4.style.color = "black";
            head4.style.border = "2px solid black";
            } 
    if (window.innerWidth <= 760) {
        head4.style.backgroundColor = "white";
        head4.style.color = "black";
        head4.style.border = "2px solid black";
        head4.style.boxShadow = "none";
    }
})

// Unterrichts Headline Animation

window.addEventListener('scroll', () =>{
    for (let i = 0; i < unterrichtPic.length; i++) {
        if (unterrichtPic[i].getBoundingClientRect().top < 620) {
            setTimeout(() => {unterrichtPic[i].style.opacity = "1";}, 300*(i + 1))
        }
    }
})

// Picture Gallery Animation

window.addEventListener('scroll', () => {
    if (pageYOffset > 2500) {
    for (let i = 0; i < picAnim.length; i++) {
        setTimeout(() => {picAnim[i].style.opacity = "1";}, 200*(i + 1));
        }
    }
})

// Modal Window Picture Gallery

for (let i = 0; i < clickedPic.length; i++) {
    if (window.innerWidth >=760) {
        clickedPic[i].addEventListener('click', openModal)
    }
}

function openModal() {
    modal.style.display = "block";
    let index = Array.from(this.parentElement.parentElement.children).indexOf(this.parentElement);
    console.log(index);
    modalPic[index].classList.add('current');   
}

function nextSlide() {
    let current = document.querySelector('.current');
    current.classList.remove('current');
    if(current.nextElementSibling) {
        current.nextElementSibling.classList.add('current');
    } else {
        modalPic[0].classList.add('current');
    }
}

function prevSlide() {
    let current = document.querySelector('.current');
    current.classList.remove('current');
    if(current.previousElementSibling) {
        current.previousElementSibling.classList.add('current');
    } else {
        modalPic[modalPic.length - 1].classList.add('current');
    }
}

// Autoplay Function

nextBtn.addEventListener('click', () => {
    nextSlide();
    if (auto) {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 4000);
    }
});

prevBtn.addEventListener('click', () => {
    prevSlide();
    if (auto) {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 4000);
    }
});

if (auto) { 
    slideInterval = setInterval(nextSlide, 4000);
}

playBtn.addEventListener('click', () => {
    if(auto) {
        auto = false;
        clearInterval(slideInterval);
    } else {auto = true;
            slideInterval = setInterval(nextSlide, 4000);
           }
})

// Modal Window Exit

exitBtn.addEventListener('click', () => {
    document.querySelector('.current').classList.remove('current');
    clearInterval(slideInterval);
    auto = false;
    modal.style.display = "none";
})

window.addEventListener('click', (e) => {
    if (e.target == modal) {
        document.querySelector('.current').classList.remove('current');
        clearInterval(slideInterval);
        auto = false;
        modal.style.display = "none";
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
                link.style.animation = "";
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

// Nav-Link Animation when scrolling through sections

console.log(anchorHome.getBoundingClientRect().top);

if (window.innerWidth >= 760) {
    window.addEventListener('scroll', () => {
        if (anchorHome.getBoundingClientRect().top <= 0 && anchorHome.getBoundingClientRect().top > -653) {
            navUla[0].classList.add('fill_anim');
            navUla[0].style.color = "rgb(54, 133, 235)";
            navUla[0].style.opacity = ".7";
        } else {
            navUla[0].classList.remove('fill_anim');
            navUla[0].style.color = "";
            navUla[0].style.opacity = ".7";
        }
        if (anchorHome.getBoundingClientRect().top <= -653 && anchorHome.getBoundingClientRect().top > -2136) {
            navUla[1].classList.add('fill_anim');
            navUla[1].style.color = "rgb(54, 133, 235)";
            navUla[1].style.opacity = ".7";
        } else {
            navUla[1].classList.remove('fill_anim');
            navUla[1].style.color = "";
            navUla[1].style.opacity = ".7";
        }
        if (anchorHome.getBoundingClientRect().top <= -2136 && anchorHome.getBoundingClientRect().top > -3284) {
            navUla[2].classList.add('fill_anim');
            navUla[2].style.color = "rgb(54, 133, 235)";
            navUla[2].style.opacity = ".7";
        } else {
            navUla[2].classList.remove('fill_anim');
            navUla[2].style.color = "";
            navUla[2].style.opacity = ".7";
        }
        if (anchorHome.getBoundingClientRect().top <= -3284 && anchorHome.getBoundingClientRect().top > -6503) {
            navUla[3].classList.add('fill_anim');
            navUla[3].style.color = "rgb(54, 133, 235)";
            navUla[3].style.opacity = ".7";
        } else {
            navUla[3].classList.remove('fill_anim');
            navUla[3].style.color = "";
            navUla[3].style.opacity = ".7";
        }
        if (anchorHome.getBoundingClientRect().top <= -6503) {
            navUla[5].classList.add('fill_anim');
            navUla[5].style.color = "rgb(54, 133, 235)";
            navUla[5].style.opacity = ".7";
        } else {
            navUla[5].classList.remove('fill_anim');
            navUla[5].style.color = "";
            navUla[5].style.opacity = ".7";
        }
    })
    }


// AJAX contact form

form.addEventListener('submit', e => {;
    e.preventDefault();
    submitBtn.disabled = true;
    let formdata = new FormData(form);
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'form.php', true);
    xhr.onload = function() {
        if (this.status == 200) {
            console.log(this.responseText);
            if (xhr.responseText == "success") {
                if(messageStatus.classList.contains('message_failed')) {
                    messageStatus.classList.remove('message_failed');
                }
                messageStatus.classList.add('message_sent');
                messageStatus.textContent = "Ihre Nachricht wurde erfolgreich versendet!";
                form.reset();
                submitBtn.disabled = false;
            } else if (xhr.responseText == "failed email") {
                messageStatus.classList.add('message_failed');
                messageStatus.textContent = "Geben Sie eine gültige E-mail Adresse ein!";
                submitBtn.disabled = false;
            } else if (xhr.responseText == "no text") {
                messageStatus.classList.add('message_failed');
                messageStatus.textContent = "Füllen Sie bitte alle Felder aus!";
                submitBtn.disabled = false;
            } else {
                messageStatus.classList.add('message_failed');
                messageStatus.textContent = "Ihre Nachricht konnte nicht versendet werden!";
                submitBtn.disabled = false;
            }
        }
    }
    xhr.send(formdata);
})



