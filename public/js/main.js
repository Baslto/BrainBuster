let createButton = document.getElementById('createButton')
let createQuizModal = document.getElementById('createQuizModal')
let createQuestionButton = document.getElementById('createQuestionButton')
let createQuestionModal = document.getElementById('createQuestionModal')
let createQuizButton = document.getElementById('createQuizButton')
let createQuizModal2 = document.getElementById('createQuizModal2')
let createAnswerButton = document.getElementById('createAnswerButton')
let createAnswerModal = document.getElementById('createAnswerModal')

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 1,
    loop: true,
    width: 800,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  

if (createButton != undefined) {
    createButton.addEventListener('click', function(){
        createQuizModal.classList.toggle('hidden')
    }) 
}

if (createQuestionButton != undefined) {
    createQuestionButton.addEventListener('click', function(){
        createQuestionModal.classList.toggle('hidden')
    })  
}

if (createQuizButton != undefined) {
    createQuizButton.addEventListener('click', function(){
        createQuizModal2.classList.toggle('hidden')
    })  
}

if (createAnswerButton != undefined) {
    createAnswerButton.addEventListener('click', function(){
        createAnswerModal.classList.toggle('hidden')
    })  
}
