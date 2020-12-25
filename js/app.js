$(document).ready(function() {
  $(".testimonial-slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 3,
    prevArrow: '<button class="slide-arrow prev-arrow"><img src="http://demo.frontlinebusiness.com.ph/dev/tamar/wp-content/themes/tamarresort/images/icon_prev.png"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><img src="http://demo.frontlinebusiness.com.ph/dev/tamar/wp-content/themes/tamarresort/images/icon_next.png"></button>',
    responsive: [{
      breakpoint: 720,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false
      }
    }
  
  ]
  
  });

 
  $(".service__slider").responsiveSlides({
    auto: true,
    speed: 2500,
    pause: true,

  });

  $(".ceremony__slider").slick({
    slidesToShow: 4,
    arrows: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><img src="http://demo.frontlinebusiness.com.ph/dev/tamar/wp-content/themes/tamarresort/images/icon_arrow_prev.png"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><img src="http://demo.frontlinebusiness.com.ph/dev/tamar/wp-content/themes/tamarresort/images/icon_arrow_next.png"></button>',
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: false
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false
      }
    }
    ]
  })


  $("#conference-slider").slick({
    slidesToShow: 1,
    arrows: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><img src="http://demo.frontlinebusiness.com.ph/dev/tamar/wp-content/themes/tamarresort/images/icon_prev.png"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><img src="http://demo.frontlinebusiness.com.ph/dev/tamar/wp-content/themes/tamarresort/images/icon_next.png"></button>',
    responsive: [{
    breakpoint: 1200,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: false
    }
  },
  {
    breakpoint: 420,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: false
    }
  }
  ]
  });


  $(".slick__slider").slick({
    slidesToShow: 1,
    arrows: true,
    // prevArrow: '<button class="slide-arrow prev-arrow"><img src="http://demo.frontlinebusiness.com.ph/dev/tamar/wp-content/themes/tamarresort/images/icon_prev.png"></button>',
    // nextArrow: '<button class="slide-arrow next-arrow"><img src="http://demo.frontlinebusiness.com.ph/dev/tamar/wp-content/themes/tamarresort/images/icon_next.png"></button>',
  });

  const toggleMenu = document.querySelector(".toggle-menu");
  const mainMenu = document.querySelector(".main-menu");
  const closeMenu = document.querySelector("#close-menu ");
  toggleMenu.addEventListener("click", () => {
    mainMenu.classList.add("open-nav");
  });

  closeMenu.addEventListener("click", () => {
    mainMenu.classList.remove("open-nav");
  });

  //WOW ACTIVATION

  // new WOW().init();

  



  



});


window.addEventListener('DOMContentLoaded', function(){

  const videoWrapper = document.querySelector('.video__tour');
  const btnTour = document.querySelector('#btn-tour');

  if(btnTour) {
    btnTour.addEventListener('click', (e) => {
      e.preventDefault;
      videoWrapper.classList.add('open-video');
     
    })
  }

  if(videoWrapper) {
    videoWrapper.addEventListener('click', (e) => {
      if(e.target.classList.contains('resort__tour')) {
        e.target.classList.remove('open-video');
      }
      stopVideo(videoWrapper)
  })
  }



  let stopVideo = function ( element ) {
  let iframe = element.querySelector( 'iframe');
  let video = element.querySelector( 'video' );
  if ( iframe ) {
    var iframeSrc = iframe.src;
    iframe.src = iframeSrc;
  }
  if ( video ) {
    video.pause();
  }
  };
  
  
  
  const roomBtns = document.querySelectorAll('.tab-rm');
  function tabEvent(e) {
    e.preventDefault();
    //convert htmlcollection to array
    const roomDetails = Array.from(this.parentElement.parentElement.nextElementSibling.children);
    
    //remove all details
    roomDetails.forEach((detail)=> {
      detail.classList.remove('isShow')
    })
  
    //remove all active
    removeActive ()
    //select detail base on the clicked link
    const detailShow = document.querySelector(`#${this.id}-content`)
    detailShow.classList.add('isShow');
    this.classList.add('isActive');
   
  }
  
  roomBtns.forEach(btn => btn.addEventListener('click', tabEvent));
  
  
  function removeActive () {
    document.querySelectorAll('.tab-rm').forEach(function(tab){
        tab.classList.remove('isActive');
    })
  }
  
  
  
  
  const tabInfos = document.querySelectorAll('.tab__info__wrapper');
  const tabBtns = document.querySelectorAll('.act__btn');
  
  
events();

 function events() {
  setActId()
  setFoodNavID();
  tabInfos[0].classList.add('active');
  
  //click event of btn facilities
  tabBtns.forEach(function(btn){
    btn.addEventListener('click', addActiveState)
  });
  

 }


function setActId() {
    tabBtns.forEach(function(btn, i){
      btn.setAttribute('id', 'act-' + [i])
    })   
      
    tabInfos.forEach(function(btncontent, i){
      btncontent.setAttribute('id', 'act-' + [i] + '-info');
    })   
  
  }
  
  
  
  function addActiveState(e){
    e.preventDefault();
    removeActiveState();
    const select = document.querySelector(`#${this.id}-info`);
    select.classList.add('active');
  }
  
  
  function removeActiveState () {
    tabInfos.forEach(function(info){
      info.classList.remove('active')
    })
  }
})




const foodItem = document.querySelectorAll('.food__nav__item');

function setFoodNavID() {
  foodItem.forEach(function(item, i) {
    item.setAttribute('id', 'food-' + [i]);
  })
}