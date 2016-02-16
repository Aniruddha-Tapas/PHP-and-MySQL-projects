
<?php include 'database.php'; ?>  
<?php 

//Create queries to show our messages , latest messages first.
$query = "SELECT * FROM messages ORDER BY id DESC";
$messages = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html>

	<head>
	<meta charset="utf-8">
		<title>MessageBox</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

		<div id="container">

			<header>
				<h1>MessageBox</h1>
			</header>
			
			<!--Display the messages from the database in a list format-->
			<div id="messages">
				<ul>
				<?php while($row = mysqli_fetch_assoc($messages)) : ?>
					<li class="message"><span><?php echo $row['time']?> - </span> <strong><?php echo $row['user']?>:</strong> <?php echo $row['message']?> </li>
				<?php endwhile; ?>
				</ul>
			</div> <!-- messages -->
			<div id="input">
				<?php if(isset($_GET['error']) ) : ?>
					<div class="error">
						<?php echo $_GET['error']; ?>
					</div>
				<?php endif ?>
				<form method="post" action="process.php">
					<input type="text" name="user" placeholder="Enter Your Name">
					<input type="text" name="message" placeholder="Enter a Message">
					<br>
					<input class="message-btn" type="submit" name="submit" value="Enter Your Message">
				</form>
			</div> <!-- input -->
		</div> <!-- container -->

	</body>
</html>