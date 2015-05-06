<?php
session_start();

if (!isset($_SESSION['userName'])) {
    header("Location: login.html");
}



?>

<!DOCTYPE html>
<html>
<head>
<title> Assignment5: AJAX QUIZ</title>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


<link href="css/stylesa5.css" rel="stylesheet"/>
<style>
#q2Div img { cursor: pointer}
</style>
</head>
<body>

<div id="wrapper">
    
 
<h1 id="mainHeader"> United States of America Emergency Services Quiz </h1>

    <div id="userInfo">
        
    
    <table  border="1">      
    <tr>
    <td>Username: <?=$_SESSION['userName']?> </td> 
    <!-- delete later--> <td> TotalScore: <?=$_SESSION['runningScore']?> </td>
    <!-- fix --><td>Last Quiz Attempt Date and Time: <?=$_SESSION['timeStamp']?> </td>
    <td>Quiz Aaverage: <?=$_SESSION['quizAttempts']?> </td>
    <td>Quiz Attempts: <?=$_SESSION['quizAttempts']?> </td>
    </tr>
        </table>
    </div>
<br>
<br> 
<form id="quizForm">
    
    
<div id="q1Div">

<strong>1. What is the number to call in case of an emergency?</strong>
<input type="text" id="q1"><div id="feedback1">
</div>
<div id="feedback1"></div>
<br />
    
    
<div id="q2Div">

<strong>2. Click on the image of a Doctor <br /></strong>

<div id="images">
    
    
<img id="doctor" src="img/doctor.png" alt="Doctor" width="175px" height="155">
<img id="construction" src="img/construction.png" alt="Construction Worker"  width="175px" height="155">
<img id="police" src="img/police.jpg" alt="Police Officer"  width="175px" height="155">
<img id ="scientist" src="img/scientist.jpg" alt="Scientist"  width="175px" height="155">
</div>
    
</div>

<br><br><br><br><br><br><br><br><br><br><br>
<div id="feedback2"></div>
<div id="q3Div">

<strong>3. Which is "considered" an Emergency?<br /></strong>
<input type="radio" name="q3" value="fall"> Someone has fallen and scraped their knee.<br />
<input type="radio" name="q3" value="missing"> Your favorite video game is missing. <br />
<input type="radio" name="q3" value="bad"> Your Classmate called you a bad name. <br />
<input type="radio" name="q3" value="not responding"> Someone has fallen and is not responding to asking " are you ok ? " <br />

</div>
<div id="feedback3"></div>
<br />

<div id="q4Div">

<strong>4. Which one of these is not a type of emergency service available?<br /></strong>
<input type="checkbox" name="q4" value="police"> Police <br />
<input type="checkbox" name="q4" value="clowns"> Clowns <br />
<input type="checkbox" name="q4" value="ambulance"> Ambulance <br />
<input type="checkbox" name="q4" value="fire"> Fire Department <br />

</div>
<div id="feedback4"></div>

<br>

<div id="q5Div">
<img id="sprinkler" src="img/sprinkler.jpg"><br><br>
<div id="q5p">
    <strong>5. What service is called when a building's inside sprinkler system is activated?<br /></strong>

<select id="q5">
    <option value="police">Police</option>
    <option value="fire">Fire Department</option>
    <option value="landscaping">Landscaping</option>
    <option value="ambulance">Ambulance</option>
  </select>
<div id="feedback5"></div>
</div>

<br>
</form>
<br><br><br><br> <br><br><br><br>   
<input type="button" value="Submit!" id="submitQuiz">
<input type="button" onclick="resetFunction()" value="Reset form">

 
<h2 id="score"></h2>
<h2 id="successMessage"></h2>
<h2 id="average"></h2>
    
</div> 
    

<script>

var quizAttempts = 0;
var q2_answer;
var score = 0;
var totalScore = 0;    
var averageScore = 0;

$("#q2Div img").mouseenter( function(){
$(this).css("width","175px");
$(this).css("height","155px");
} );

$("#q2Div img").mouseleave( function(){
$(this).css("width","180px");
$(this).css("height","155px");
} );

$("#q2Div img").click( function(){
$("img").css("border","");
$(this).css("border","20px solid green");
//alert($(this).attr("id"));
q2_answer = $(this).attr("id");
} );

//reset Button Function
function resetFunction() {
  document.getElementById("quizForm").reset();
}

    
//Submit Quiz Function
$("#submitQuiz").click( function(){
    


//
    
quizAttempts++;

var q1_answer = $("#q1").val();  //what user typed in
            
            if (q1_answer == "911"){
                score += 20;
                $("#feedback1").css("background-color","rgba(179, 226, 170,1)");
                $("#feedback1").html("Correct");
                
            }
            else{
                $("#feedback1").css("background-color","red");
                $("#feedback1").html("Incorrect");
            }
            
           
            
    
            if (q2_answer == "doctor" ) {
                score += 20;
                $("#feedback2").css("background-color","rgba(179, 226, 170,1)");
                $("#feedback2").html("Correct");
                
            }
            else{
                $("#feedback2").css("background-color","red");
                $("#feedback2").html("Incorrect");
            }

var q3_answer = $("input[name = 'q3']:checked").val();
            
            if(q3_answer == "not responding"){
                score += 20;
                $("#feedback3").css("background-color","rgba(179, 226, 170,1)");
                $("#feedback3").html("Correct");
                
            }
            else{
                $("#feedback3").css("background-color","red");
                $("#feedback3").html("Incorrect");
            }
    
var q4_answer = $("input[name = 'q4']:checked").val();
            
            if(q4_answer == "clowns"){
                score += 20;
            $("#feedback4").css("background-color","rgba(179, 226, 170,1)");
                $("#feedback4").html("Correct");
                
            }
            else{
                $("#feedback4").css("background-color","red");
                $("#feedback4").html("Incorrect");
            }
    
var e = document.getElementById("q5");
var q5_answer = e.options[e.selectedIndex].value;
    
         
            if(q5_answer == "fire"){
                score += 20;
                $("#feedback5").css("background-color","rgba(179, 226, 170,1)");
                $("#feedback5").html("Correct");
                
            }
            else{
                $("#feedback5").css("background-color","red");
                $("#feedback5").html("Incorrect");
            }

//totalScore += score

//averageScore = totalScore / quizAttempts;

$("#score").html("Your score is: " + score);

$("#attempts").html("You attempted this quiz: " + quizAttempts);
    


$("#average").html("Your quiz average is " + averageScore);
 
document.getElementById("quizForm").reset();

    
   
    
     
    
})


  

    
</script>
    

</body>
</html>

