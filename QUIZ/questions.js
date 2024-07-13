const answersList = document.querySelectorAll('ol.answers li');

answersList.forEach(li => li.addEventListener('click',checkClickedAnswer));
function checkClickedAnswer(event){
  
  let clickedAnswerElement=event.currentTarget;
  let selectedAnswer="A";
  let correctedAnswer=clickedAnswerElement.dataset.answer;

  let message;
  let answerColorCode;


  
  
  if(correctedAnswer==selectedAnswer){
    message='正解';
    answerColorCode ='';
  }else{
    message='不正解';
    answerColorCode ='rgb(223, 30, 30)';
  }

  alert(message);

  document.querySelector('#correct-answer').style.color=answerColorCode;
  document.querySelector('#section-correct-answer').style.display='block';
};