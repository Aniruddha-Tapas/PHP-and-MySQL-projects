<?php include 'includes/header.php'; ?>
<?php 
    // Create DB Object
    $db = new Database();

    // Create Query
    $query = "SELECT * FROM posts ORDER BY id DESC";

    // Run Query
    $posts = $db->select($query);
    //
    // Create Query
    $query = "SELECT * FROM categories";

    // Run Query
    $categories = $db->select($query);
?>

<!-- Check if there are any posts
	If there are any, display them,
	else print "There are no posts yet"
<?php if($posts) : ?>
    <?php while($row = $posts->fetch_assoc()) :?> <!--This gets an associative array with the results-->
          <div class="blog-post">
          <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
          <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author'];?></a></p>  <!--formatDate function is defined in "helpers/format_helper.php" file to properly format the date to be printed.--> 
               <?php echo shortenText($row['body']); ?>  <!--shortenText function is defined in "helpers/format_helper.php" file to shorten the text to be displayed.-->
    <a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>">Read More</a>
          </div><!-- /.blog-post -->
    <?php endwhile; ?>

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

<?php else: ?>
    <p>There are no post yet</p>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>
