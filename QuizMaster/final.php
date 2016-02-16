<?php include 'database.php'; ?>
<?php session_start() ?>
<?php
// Get total number of questions
	
	$query = "SELECT * FROM `questions`";
	// Get result
	$result = $mysqli->query($query) or die($mysqli->error." on line ".__LINE__);
	$total_questions = $result->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Quiz Master</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<header>
		<div class="container">
			<h1>Quiz Master</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>You're Done!</h2>
			<p>Congrats! You have completed the test!</p>
			<p>Final Score: <?php echo $_SESSION['score'].'/'.$total_questions ?></p>
			<a href="question.php?n=1" class="start">Take Again</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2016, PHP Quizzer
		</div>
	</footer>
</body>
</html>
