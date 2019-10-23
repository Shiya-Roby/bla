<?php
require 'dbconfi/config.php';
$error = "";
if(isset($_POST['submit'])){
	if(isset($_POST['que1'],$_POST['que2'],$_POST['que3'],$_POST['que4'],$_POST['que5'],$_POST['que6'],$_POST['que7'])){

			print_r($_POST);
			die();
		$string = $_POST['que1'].$_POST['que2'].$_POST['que3'].$_POST['que4'].$_POST['que5'].$_POST['que6'].$_POST['que7'];
		print_r($string);
		$query = "UPDATE signin SET profile = '$string' WHERE username = '{$_SESSION['username']}'";
		$sth = mysqli_query($con,$query);
	}
	else{
		$error ="Choose one option for all questions";
	}
}
?>
<!DOCTYPE html>

<html>
	<head>
		<title>www.questionairre.com</title>
	<style>
body {
	background-image: url("signup3.jpg");
        background-repeat:repeat;
       background-size:cover;
} 

</style>		
	</head>

<body bgcolor="black" text="white">
<form method="post">


<br><br><br>
<center><div>
<center><b><h1>LET US KNOW..............</h1></I></b></center><hr>
<h2>
1: I am able to complete the tasks that I set for a day<BR>
<input type="radio" id="one" name="que1" value="1">&nbspMostly&nbsp <BR>
<input type="radio" id="two" name="que1" value="1">&nbspRarely&nbsp<br>
<input type="radio" id="there" name="que1" value="0">&nbspNever&nbsp
<BR><BR><BR>


2: I feel I’m living a well-balanced life (academic, relationships, personal growth, interests/hobbies)

<br><input type="radio" id="one" name="que2" value="1">&nbspMostly&nbsp 
<br><input type="radio" id="two" name="que2" value="1">&nbspRarely&nbsp
<br><input type="radio" id="there" name="que2" value="0">&nbspNever&nbsp
<BR><BR><BR>

3: Most of my submissions get delayed, due to one reason or the other


<br><input type="radio" id="one" name="que3" value="1">&nbspMostly&nbsp 
<br><input type="radio" id="two" name="que3" value="1">&nbspRarely&nbsp
<br><input type="radio" id="there" name="que3" value="0">&nbspNever&nbsp
<BR><BR><BR>

4: When I get into an argument or a fight with my friends or family members, I....
Become very agitated or totally numb


<br><input type="radio" id="one" name="que4" value="1">&nbspTry to understand why we fought, then think of a possible solution to resolve the fight&nbspp
<br><input type="radio" id="two" name="que4" value="1">&nbsPShare it with someone i trust because it calms me down&nbsp
<br><input type="radio" id="three" name="que4" value="0">&nbspDo nothing much as things will settle down automatically&nbsp 

<BR><BR><BR>





5:I feel that my talents are not recognized well enough in my college/class

<br><input type="radio" id="one" name="que5" value="1">&nbspMostly&nbsp 
<br><input type="radio" id="two" name="que5" value="1">&nbspRarely&nbsp
<br><input type="radio" id="there" name="que5" value="0">&nbspNever&nbsp
<BR><BR><BR>



6:I am able to manage my schedule well


<br><input type="radio" id="one" name="que6" value="1">&nbspMostly&nbsp 
<br><input type="radio" id="two" name="que6" value="1">&nbspRarely&nbsp
<br><input type="radio" id="there" name="que6" value="0">&nbspNever&nbsp

<BR><BR><BR>



7:I feel life is not fair

<br><input type="radio" id="one" name="que7" value="1">&nbspAlways&nbsp
<br><input type="radio" id="two" name="que7" value="1">&nbspMostly&nbsp
<br><input type="radio" id="three" name="que7" value="0" >&nbspSometimes/Rarely&nbsp 
<BR><BR><BR>

<!--  

8:I lose my calm with my peers or my family...

<br><input type="radio" id="one" name="que">&nbspAt least once a fortnight&nbsp 
<br><input type="radio" id="two" name="que">&nbspOnce in a blue moon&nbsp
<br><input type="radio" id="there" name="que">&nbspNever&nbsp
<BR><BR><BR>

9:I am able to handle difficult situations

<br><input type="radio" id="one" name="que">&nbspMostly&nbsp 
<br><input type="radio" id="two" name="que">&nbspRarely&nbsp
<BR><BR><BR>

10:I can find humor and laugh at myself even during tough times


<br><input type="radio" id="one" name="que">&nbspAt least once a fortnight&nbsp 
<br><input type="radio" id="two" name="que">&nbspOnce in a blue moon&nbsp
<BR><BR><BR>

11:I feel judged

<br><input type="radio" id="one" name="que">&nbspAt least once a fortnight&nbsp 
<br><input type="radio" id="two" name="que">&nbspOnce in a blue moon&nbsp
<BR><BR><BR>


12:How I view myself in comparison to how others view me...

<br><input type="radio" id="one" name="que">&nbspI view myself like others view me&nbsp
<br><input type="radio" id="two" name="que">&nbspI am contentI am slightly affected&nbsp
<br><input type="radio" id="three" name="que">&nbspI constantly feel the pressure to improve myself&nbsp 
<br><input type="radio" id="four" name="que">&nbspI avoid situation where I will be judged
&nbsp
<BR><BR><BR>



13:Making and maintaining relationships is easy for me

<br><input type="radio" id="one" name="que">&nbspAlways&nbsp
<br><input type="radio" id="two" name="que">&nbspMostly&nbsp
<br><input type="radio" id="three" name="que">&nbspSometimes/Rarely&nbsp 
<br><input type="radio" id="four" name="que">&nbspNever&nbsp
<BR><BR><BR>


14:I usually find myself worried about my future and career choices


<br><input type="radio" id="one" name="que">&nbspMostly&nbsp 
<br><input type="radio" id="two" name="que">&nbspRarely&nbsp
<BR><BR><BR>


15:When I sit down to study, I end up spending maximum time on social media like FB, WhatsApp, Instagram, etc...

<br><input type="radio" id="one" name="que">&nbspAlways&nbsp
<br><input type="radio" id="two" name="que">&nbspMostly&nbsp
<br><input type="radio" id="three" name="que">&nbspSometimes/Rarely&nbsp 
<br><input type="radio" id="four" name="que">&nbspNever&nbsp
<BR><BR><BR>




16:I rely on my friends or family to help me with my current troubles.




<br><input type="radio" id="one" name="que">&nbspAlways&nbsp
<br><input type="radio" id="two" name="que">&nbspMostly&nbsp
<br><input type="radio" id="three" name="que">&nbspSometimes/Rarely&nbsp 
<br><input type="radio" id="four" name="que">&nbspNever&nbsp
<BR><BR><BR>



17:I am having trouble concentrating at work or school.


<br><input type="radio" id="one" name="que">&nbspAlways&nbsp
<br><input type="radio" id="two" name="que">&nbspMostly&nbsp
<br><input type="radio" id="three" name="que">&nbspSometimes/Rarely&nbsp 
<br><input type="radio" id="four" name="que">&nbspNever&nbsp
<BR><BR><BR>




18:How would you rate your communication skills as...


<br><input type="radio" id="one" name="que">&nbspnegative&nbsp
<br><input type="radio" id="two" name="que">&nbspneutral&nbsp
<br><input type="radio" id="three" name="que">&nbsppositive&nbsp 
<BR><BR><BR>


19:Do you think you are confident enough to face an interview

<br><input type="radio" id="one" name="que">&nbspAlways&nbsp
<br><input type="radio" id="two" name="que">&nbspMostly&nbsp
<br><input type="radio" id="three" name="que">&nbspSometimes/Rarely&nbsp 
<br><input type="radio" id="four" name="que">&nbspNever&nbsp
<BR><BR><BR>


20:I express my views/opinions instead of going along with what everyone else wants



<br><input type="radio" id="one" name="que">&nbspAlways&nbsp
<br><input type="radio" id="three" name="que">&nbspSometimes&nbsp 
<br><input type="radio" id="four" name="que">&nbspNever&nbsp
<BR><BR><BR>
-->

<center>
	<input type="submit" value="SUBMIT"  name="submit" id="reset"></h2>
</center> 
</div>
</forn>       
</body>
</html>
