const questionToggle = document.getElementsByClassName('question-toggle')
let questionContainer = document.getElementsByClassName('question-container')
let creationPlus = document.getElementsByClassName('creation-plus')
let creationMinus = document.getElementsByClassName('creation-minus')

for (let i = 0; i < questionToggle.length; i++){
    questionToggle[i].addEventListener('click', function() {
        questionContainer[i].classList.toggle('hidden')
        creationPlus[i].classList.toggle('hidden')
        creationMinus[i].classList.toggle('hidden')
    })
}
