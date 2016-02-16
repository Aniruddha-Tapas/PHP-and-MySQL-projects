<?php include 'includes/header.php'; ?>
<?php
    // Create DB Object
    $db = new Database();

	//Check if submit button is clicked
    if(isset($_POST['submit'])) {
        // Assign Variables
        $name= mysqli_real_escape_string($db->link, $_POST['name']);

        // Simple Validation
        if($name == '') {
            // Set Error
            $error = 'Please fill out all required fields';
        }
		//Insert into categories
        else {
            $query = "INSERT INTO categories (name) VALUES ('$name')"; // string needs quotes, integer doesn't
            $insert_row = $db->update($query);
        }
    }
?>

<form role="form" method="post" action="add_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category">
  </div>

  <div>
    <input name="submit" type="submit" class="btn btn-success" value="Submit">
    <a href="index.php" class="btn btn-primary">Cancel</a>
  </div>
  <br/>
</form>
<?php include 'includes/footer.php'; ?>
