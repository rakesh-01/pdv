var submitButton = document.getElementById('submit');
var correctAnswer=[];
var totalscore=document.getElementById('totalscore');
var please=document.getElementById('please');
function load(){
  var i;
	var output = [];
  var values;
	var answers;
  var ajaxRequest = new XMLHttpRequest();
  ajaxRequest.onload = function(){
     var y = document.getElementById("start");
    y.style.display = "none";
    var x = document.getElementById("submit");
    x.style.display = "block";
    totalscore.style.display="none";
    please.style.display="none";

    console.log(this);
    var jsonObj = JSON.parse(ajaxRequest.responseText);

//get random object from array
    var randomMessagesArray = jsonObj;
    console.log(Object.keys(randomMessagesArray.quiz.maths).length);
    var topic=randomMessagesArray.quiz.maths;
    console.log(randomMessagesArray['quiz']);
    for(i=1;i<=(Object.keys(randomMessagesArray.quiz.maths).length);i++)
    {
      var act=i.toString();
      var ques='q'+act;
      answers = [];
      console.log(topic[ques]);
      var options=topic[ques]['options'];
      console.log(options);
      correctAnswer.push(topic[ques]['answer']);
      for(values=0;values<options.length;values++)
      {
        answers.push(
          `<label>
            <input type="radio" name="question${i}" value="${options[values]}">
            ${options[values]}
          </label>
          <br>`
        );
      }
      output.push(
			'<h3 class="question">' + topic[ques]['question'] + '</h3>'
			+ '<div class="answers">' + answers.join('') + '</div>'
		);
    }
    topic=randomMessagesArray.quiz.sport;
    for(i=1;i<=(Object.keys(randomMessagesArray.quiz.sport).length);i++)
    {
      var act=i.toString();
      var ques='q'+act;
      answers = [];
      console.log(topic[ques]);
      var options=topic[ques]['options'];
      console.log(options);
      correctAnswer.push(topic[ques]['answer']);
      for(values=0;values<options.length;values++)
      {
        answers.push(
          `<label>
          <input type="radio" name="question${i+2}" value="${options[values]}">
            ${options[values]}
          </label>
          <br>`
        );
      }
      output.push(
			'<h3 class="question">' + topic[ques]['question'] + '</h3>'
			+ '<div class="answers">' + answers.join('') + '</div>'
		);
    }
    document.getElementById("quiz").innerHTML=output.join('');
    quiz.style.display='block';

  	//more on this in a second
  }
  ajaxRequest.open("GET", "https://api.mocki.io/v1/04170ca0", true);
  ajaxRequest.send();
}
submitButton.onclick = function(){
  var quiz=document.getElementById("quiz");
  var questions = quiz.querySelectorAll('.question');
	showResults(questions, quiz);


}
function showResults(questions, quizContainer){
var displayscore=0;
 var answerContainers = document.querySelectorAll('.answers');
	// keep track of user's answers
	var userAnswer = '';
	var numCorrect = 0;

  for(var i=0; i<questions.length; i++){
		// find selected answer
		userAnswer = (answerContainers[i].querySelector('input[name=question'+(i+1)+']:checked')||{}).value;
    console.log(userAnswer);
    if(userAnswer==undefined)
    {
      displayscore=displayscore+1;
    }
    if(userAnswer===correctAnswer[i]){
			// add to the number of correct answers
			numCorrect=numCorrect+2;
      answerContainers[i].style.color = 'green';

			// color the answers green
		}else{
      numCorrect=numCorrect-1;
      answerContainers[i].style.color = 'red';
    }
		// if answer is correct
	// show number of correct answers out of total
}

console.log(displayscore);
totalscore.innerHTML="Total score is "+numCorrect;
if(displayscore==0)
{
  var y = document.getElementById("start");
 y.style.display = "block";
 var x = document.getElementById("submit");
 x.style.display = "none";
 totalscore.style.display="block"
 please.style.display='none'
}else{
please.innerHTML='Answer all the questions to submit the quiz'
please.style.display='block'
}

}