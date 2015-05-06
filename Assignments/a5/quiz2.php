<?php
session_start();

if (!isset($_SESSION['userName'])) {
    header("Location: login.html");
}


if (isset($_POST['uploadForm'])) {

    move_uploaded_file($_FILES['fileName']['tmp_name'], $_FILES['fileName']['name'] );    
    echo $_FILES['fileName']['tmp_name'];
}

?>

<!DOCTYPE html>
<html>
<head>
<title> Assignment5: AJAX QUIZ</title>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

<style>
#q1 img { cursor: pointer}
</style>
</head>
<body>


<h1> United State of America Emergency Services Quiz </h1>
    
Username: <?=$_SESSION['userName']?>
<br>
<br> 
<form id="quizForm">
    
    
<div id="q1Div">

1. What is the number to call in case of an emergency?
<input type="text" id="q1">

</div>
<br />
    
<div id="q2Div">

2. Click on the image of a Doctor <br />

<img id="doctor" src="img/doctor.jpg" alt="Doctor" width="225px" height="200">
<img id="construction" src="img/construction.png" alt="Construction Worker" width="200px" height="200">
<img id="police" src="img/police.jpg" alt="Police Officer" width="200px" height="200">
<img id ="scientist" src="img/scientist.jpg" alt="Scientist" width="200px" height="200">

</div> 
<br />
    
<div id="q3Div">

3. Which is "considered" an Emergency?<br />
<input type="radio" name="q3" value="fall"> Someone has fallen and scraped their knee.<br />
<input type="radio" name="q3" value="missing"> Your favorite video game is missing. <br />
<input type="radio" name="q3" value="bad"> Your Classmate called you a bad name. <br />
<input type="radio" name="q3" value="not responding"> Someone has fallen and is not responding to asking " are you ok ? " <br />

</div>
<br />    
<div id="q4Div">

4. Which one of these is not a type of emergency service available?<br />
<input type="checkbox" name="q4" value="police"> Police <br />
<input type="checkbox" name="q4" value="clowns"> Clowns <br />
<input type="checkbox" name="q4" value="ambulance"> Ambulance <br />
<input type="checkbox" name="q4" value="fire"> Fire Department <br />

</div>
<br>

<div id="q5Div">

5. What service is called when a building's inside sprinkler system is activated?<br />
<select id="q5">
    <option value="fire">Fire Department</option>
    <option value="police">Police</option>
    <option value="landscaping">Landscaping</option>
    <option value="ambulance">Ambulance</option>
  </select>

</div>
<br>
</form>
    
<input type="button" value="Submit!" id="submitQuiz">
<input type="button" onclick="myFunction()" value="Reset form">

<h2 id="score"></h2>
<h2 id="attempts"></h2>

<script>

var quizAttempts = 0;
var q2_answer;
var score = 0;

$("#q2Div img").mouseenter( function(){
$(this).css("width","250px");
} );

$("#q2Div img").mouseleave( function(){
$(this).css("width","260px");
} );

$("#q2Div img").click( function(){
$("img").css("border","");
$(this).css("border","1px solid black");
//alert($(this).attr("id"));
q2_answer = $(this).attr("id");
} );
    
function myFunction() {
  document.getElementById("quizForm").reset();
}

$("#submitQuiz").click( function(){
    
//document.getElementById("quizForm").reset();
    
//quizAttempts++;

var q1_answer = $("#q1").val();  //what user typed in
            
            if (q1_answer == "911"){
                score += 20;
            }
            
    
if (q2_answer == "doctor" ) {
score += 20;
}

var q3_answer = $("input[name = 'q3']:checked").val();
            
            if(q3_answer == "not responding"){
                score += 20;
            }
    
var q4_answer = $("input[name = 'q4']:checked").val();
            
            if(q4_answer == "clowns"){
                score += 20;
            }
    
var e = document.getElementById("q5");
var q5_answer = e.options[e.selectedIndex].value;
    
         
            if(q5_answer == "fire"){
                score += 20;
            }


$("#score").html("Your score is: " + score);

$("#attempts").html("You attempted this quiz: " + quizAttempts);
    
$totalScore+=score
    
$averageScore = score / quizAttempts;

$("#avgScore").html("Your quiz average is " + averageScore);
    
});


</script>

</body>
</html>

