const navMenu = document.getElementById("nav-menu"),
      navToggle = document.getElementById("nav-toggle"),
      navClose = document.getElementById("nav-close");


if(navToggle){

    navToggle.addEventListener('click', () => {

        navMenu.classList.add("show-menu");

    })

}


if(navClose){

    navClose.addEventListener('click', () => {

        navMenu.classList.remove("show-menu");
       
    })

}


const navLink = document.querySelectorAll('.nav__link');

function linkAction(){

    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu');

}

navLink.forEach(n => n.addEventListener('click', linkAction));



const skillsContent = document.getElementsByClassName('skills__content'),
    skillsHeader = document.querySelectorAll('.skills__header');

    function toggleSkills(){

        let itemClass=this.parentNode.className;

        for(i=0; i < skillsContent.length; i++){

            skillsContent[i].className='skills__content skills__close'

        }

        if(itemClass=== 'skills__content skills__close'){

            this.parentNode.className = 'skills__content skills__open'

        }

    }

    skillsHeader.forEach((el)=>{

        el.addEventListener('click', toggleSkills)

    });






    const tabs = document.querySelectorAll('[data-target]'),
          tabContents = document.querySelectorAll('[data-content]');

    
    tabs.forEach(tab => {
        tab.addEventListener('click', () =>{

            const target = document.querySelector(tab.dataset.target);

            tabContents.forEach(tabContent =>{

                tabContent.classList.remove('qualification__active')

            })

            target.classList.add('qualification__active');

            tabs.forEach( tab => {

                tab.classList.remove('qualification__active');
            })

            tab.classList.add('qualification__active');

        })
    })


const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'uil-sun'

const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light';
const getCurrentIcon = () => document.body.classList.contains(iconTheme) ? 'bx-moon' : 'bx-sun';

if(selectedTheme){

    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme);
    themeButton.classList[selectedIcon === 'bx-moon' ? 'add' : 'remove'](iconTheme);

}

themeButton.addEventListener('click', () =>{

    document.body.classList.toggle(darkTheme);
    themeButton.classList.toggle(iconTheme)

    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon());

});



let swiper = new Swiper('.portfolio__container', {
    cssMode: true,
    loop:true,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable:true,
    },
  });



  function confeti() {

    const jsConfetti = new JSConfetti();

    setTimeout(function() {
      jsConfetti.addConfetti({
        // emojis: ['🐶', '💙', '⚡', '🐾'],
     });
    }, 300);


  };

  const formulario = document.getElementById("formulario");

    


  function hideForm(){


    formulario.style.display="none";


  }



// function scrollUp(){

//     const scrollUp = document.getElementById('scroll-up');
//     if(this.scrollY >=560) scrollUp.classList.add('show-scroll');
//     else scrollUp.classList.remove('show-scroll');


// }

// window.addEventListener('scroll', scrollUp);