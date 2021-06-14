const navbar = document.getElementById('navbar');
const navContainer = document.getElementById('nav-container');
const navA = document.getElementsByClassName('nav-a');
const logoText = document.querySelectorAll('.st0');
const logoMusic = document.querySelectorAll('.st1');
const navArr = Array.from(navA);
const navBars = document.querySelector('.nav-icon-menu');
const notificationEmailLabel = document.querySelector('#chat_alert_id');
const notificationLabel = document.querySelector('#alert_id');
let scrolled = false;

const mainMenu = document.querySelector('.main-menu');
const closeMenu = document.querySelector('.close-menu');
const openMenu = document.querySelector('.open-menu');
const msg = document.querySelector('#msg');

openMenu.addEventListener('click', () => {
    setTimeout(() => {
        mainMenu.style.display = 'flex';
        mainMenu.style.top = '0';
        navBars.style.display = 'none';
    }, 200);
});

closeMenu.addEventListener('click', () => {
    mainMenu.style.top = '-100%';
    navBars.style.display = 'inline-block';
});
window.onscroll = () => {
    if (window.pageYOffset > 100) {
        navbar.classList.remove('top');
        setTimeout(() => {
            logoText.forEach((logo => {
                logo.style.fill = '#E7BB6A';
            }));
            logoMusic.forEach((logo => {
                logo.style.fill = '#22264B';
            }));
            navContainer.style.marginTop = "2rem";
            navbar.style.minHeight = "10vh";
            navbar.style.zIndex = '1000';
            navArr.forEach((nav) => {
                nav.style.color = '#22264b';
                if (nav.className !== 'nav-a scrutiny-light-text dropdown-toggle count-info') {
                    nav.addEventListener('click', () => {
                        mainMenu.style.top = '-100%';
                        navBars.style.display = 'inline-block';
                    });
                }


            });
            // openMenu.style.color = '#fff';
            scrolled = true;
        }, 200);
    } else {
        navbar.classList.add('top');
        setTimeout(() => {
            logoText.forEach((logo => {
                logo.style.fill = '#22264B';
            }));
            logoMusic.forEach((logo => {
                logo.style.fill = '#E7BB6A';
            }));
            navContainer.style.marginTop = "0";
            navbar.style.minHeight = "12vh";
            navArr.forEach((nav) => {
                nav.style.color = '#22264b';
                if (nav.className !== 'nav-a scrutiny-primary-text dropdown-toggle count-info') {
                    nav.addEventListener('click', () => {
                        mainMenu.style.top = '-100%';
                        navBars.style.display = 'inline-block';
                    });
                }
            });
            // openMenu.style.color = '#333';
            scrolled = false;
        }, 200);

    }
};

msg.addEventListener('click', () => {
    msg.style.display = 'block !important';
    console.log('clicked');
});

window.onload = () => {
    if (notificationLabel.textContent === '') {
        notificationLabel.style.display = 'none';
    } else {
        notificationLabel.style.display = 'inline-block';
    }

    if (notificationEmailLabel.textContent === '') {
        notificationEmailLabel.style.display = 'none';
    } else {
        notificationEmailLabel.style.display = 'inline-block';
    }
}