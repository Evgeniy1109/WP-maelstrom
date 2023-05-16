document.querySelector('.burger').addEventListener('click',function(){
    document.querySelector('.burger span').classList.toggle('active');
    document.querySelector('.menu').classList.toggle('animate');
});
function menu_img_close() {
    document.querySelector('.menu').classList.toggle('animate');
}

function show() {
    document.querySelector('.modal_form_active').classList.toggle('modal_close')
    document.querySelector('.menu').classList.remove('animate');
    document.querySelector('.modal_window_img').addEventListener('click', function(){
      document.querySelector('.modal_form_active').classList.add('modal_close')
    })
}



let swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    keyboard: {
      enabled: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  /* Отзывы */

  let controls = document.querySelectorAll(".controls");
  for (let i = 0; i < controls.length; i++) {
    controls[i].style.display = "inline-block";
  }

  let slides = document.querySelectorAll("#slides .slide");
  let currentSlide = 0;
  let slideInterval = setInterval(nextSlide, 5000);

  function nextSlide() {
    goToSlide(currentSlide + 1);
  }

  function previousSlide() {
    goToSlide(currentSlide - 1);
  }

  function goToSlide(n) {
    slides[currentSlide].className = "slide";
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].className = "slide showing";
  }

  let playing = true;
  let pauseButton = document.getElementById("pause");

  function pauseSlideshow() {
    pauseButton.innerHTML = "&#9658;"; // play character
    playing = false;
    clearInterval(slideInterval);
  }

  function playSlideshow() {
    pauseButton.innerHTML = "&#10074;&#10074;"; // pause character
    playing = true;
    slideInterval = setInterval(nextSlide, 5000);
  }

  pauseButton.onclick = function () {
    if (playing) {
      pauseSlideshow();
    } else {
      playSlideshow();
    }
  };

  let next = document.getElementById("next");
  let previous = document.getElementById("previous");

  next.onclick = function () {
    pauseSlideshow();
    nextSlide();
  };
  previous.onclick = function () {
    pauseSlideshow();
    previousSlide();
  };

  // Кавказ
const tab = document.querySelectorAll('.tab_header');
const caucasus = document.querySelectorAll('.caucasus')


for (let i=0; i<tab.length; i++){
    tab[i].addEventListener('click', function(e) {
        e.preventDefault();
        let activeTab = e.target.getAttribute('data-tab');
        for (let j=0; j<tab.length; j++){
            let content = caucasus[j].getAttribute('data-tab-content');

            if (activeTab === content){
                tab[j].classList.add('active');
                caucasus[j].classList.add('active');
            }else{
                tab[j].classList.remove('active');
                caucasus[j].classList.remove('active');
            }
        }
    })
}
// ----------------------------


// Модальное окно с телефонами

function icon_over() {
  document
    .querySelector(".modal_telephone_window")
    .classList.toggle("modal_telephone_close");
}
function icon_out() {
  document
    .querySelector(".modal_telephone_window")
    .classList.toggle("modal_telephone_close");
}


  // const iconPhone = document.querySelector('.header_icon_telephone');
  // const mod = document.querySelector('.modal_telephone_window');


  // iconPhone.addEventListener('click', function(){
  //   mod.classList.toggle('modal_telephone_close')
  // })

//   iconPhone.addEventListener('mouseover', function(){
//     mod.classList.toggle('modal_telephone_close')
// })

// iconPhone.addEventListener('mouseout', function(){
//   mod.classList.toggle('modal_telephone_close')
// })


  // window.addEventListener('click', function(e){
  //     const target = e.target
  //     if (!target.closest('.modal_telephone_window') && !target.closest('.header_icon_telephone')){
  //         document.querySelector('.modal_telephone_window').classList.add('modal_telephone_close')
  //     }
  // })

// ---------------------

