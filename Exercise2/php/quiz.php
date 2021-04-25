<html>
	<head>
		<title>Quiz</title>
		<link href="..\css\style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!-- Heading -->
		<div id="header" class="title-header">
			<h1 id="title">Quiz</h1>
		</div>
		<div>
			<?php
				if($_POST['submit']){
					if($q1=='' || $q2=='' || $q3=='' || $q4=='' || $q5==''){
						$q1 = $_POST['q1'];
						$q2 = $_POST['q2'];
						$q3 = $_POST['q3'];
						$q4 = $_POST['q4'];
						$q5 = $_POST['q5'];
					}
					echo '<form><div class="form"><h3> Question 1: If soccer is called football in England, what is American football called in England?</h3>';
					echo '<ol><li> Your Answer: ';
					if($q1==1){echo 'American football</li>';}
					else if($q1==2){echo 'Combball</li>';}
					else if($q1==3){echo 'Handball</li>';}
					else if($q1==4){echo 'Touchdown</li>';}
					else {echo 'NOT ANSWERED</li>';}
					if($q1!=''){echo '<li> Correct Answer: American football</li>';}
					echo '</ol></div><br/><div class="form"><h3> Question 2: What is the largest country in the world?</h3>';
					echo '<ol><li> Your Answer: ';
					if($q2==1){echo 'Russia</li>';}
					else if($q2==2){echo 'Canada</li>';}
					else if($q2==3){echo 'China</li>';}
					else if($q2==4){echo 'United States</li>';}
					else {echo 'NOT ANSWERED</li>';}
					if($q2!=''){echo '<li> Correct Answer: Russia</li>';}
					echo '</ol></div><br/><div class="form"><h3> Question 3: An organic compound is considered an alcohol if it has what functional group?</h3>';
					echo '<ol><li> Your Answer: ';
					if($q3==1){echo 'Hydroxyl</li>';}
					else if($q3==2){echo 'Carbonyl</li>';}
					else if($q3==3){echo 'Alkyl</li>';}
					else if($q3==4){echo 'Aldehyde</li>';}
					else {echo 'NOT ANSWERED</li>';}
					if($q3!=''){echo '<li> Correct Answer: Hydroxyl</li>';}
					echo '</ol></div><br/><div class="form"><h3> Question 4: What is the 100th digit of Pi?</h3>';
					echo '<ol><li> Your Answer: ';
					if($q4==1){echo '9</li>';}
					else if($q4==2){echo '4</li>';}
					else if($q4==3){echo '7</li>';}
					else if($q4==4){echo '2</li>';}
					else {echo 'NOT ANSWERED</li>';}
					if($q4!=''){echo '<li> Correct Answer: 9</li>';}
					echo '</ol></div><br/><div class="form"><h3> Question 5: A doctor with a PhD is a doctor of what?</h3>';
					echo '<ol><li> Your Answer: ';
					if($q5==1){echo 'Philosophy</li>';}
					else if($q5==2){echo 'Psychology</li>';}
					else if($q5==3){echo 'Phrenology</li>';}
					else if($q5==4){echo 'Physical Therapy</li>';}
					else {echo 'NOT ANSWERED</li>';}
					if($q5!=''){echo '<li> Correct Answer: Philosophy</li>';}
					echo '</ol></div><br/><div class="form">';
					if($q1=='' || $q2=='' || $q3=='' || $q4=='' || $q5==''){
						echo '<h2>Please answer all of the quesitons.</h2>';
					}
					$score = 0;
					if($q1==1) {$score++;}
					if($q2==1) {$score++;}
					if($q3==1) {$score++;}
					if($q4==1) {$score++;}
					if($q5==1) {$score++;}
					echo '<h2>Correct Answers: ' . $score . ' of 5</h2>';
					$score = ($score/5.0)*100;
					echo '<h2>Your Score is: ' . $score . '%</h2>';
					echo '</div></form>';
				}
			?>
		</div>
	</body>
</html>