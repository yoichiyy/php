<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<?php include "includes/db.php"; ?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
<?php
$per_page = 2;
if(isset($_GET['page'])){
  $page = $_GET['page'];
} else {
  $page = "";
}
if($page == "" || $page == 1){
  $page_1 = 0;
} else {
  $page_1 = ($page * $per_page) - $per_page;
}

$post_query_count = "SELECT * FROM posts";
$find_count = mysqli_query($connection, $post_query_count);
$count = mysqli_num_rows($find_count);
$count = ceil($count / $per_page);

$query = "SELECT * FROM posts LIMIT $page_1, $per_page";
$select_all_posts_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_all_posts_query)){
  $post_id = $row['post_id'];
  $post_title = $row['post_title'];
  $post_author = $row['post_author'];
  $post_date = $row['post_date'];
  $post_image = $row['post_image'];
  $post_content = substr($row['post_content'], 0, 100);
?>

<!-- First Blog Post -->
<?php echo $count; ?>

<h2><a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title ?></a></h2>
<p class="lead">by <a href="author_posts.php?author=<?php echo $post_author ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_author ?></a></p>
<!-- ★日付 -->
<p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
<!-- ★イメージ -->
<hr>
<a href="post.php?p_id=?<?php echo $post_id; ?>">
<img class="img-responsive" src="<?php echo $post_image; ?>" alt="">
</a>
<hr>

<p><?php echo $post_content ?></p>
<a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
<hr>
<?php } ?>
</div>
<?php include "includes/sidebar.php"; ?>
</div>
</div>
<hr>
<ul class="pager">
<?php
for($i = 1; $i <= $count; $i++){
  echo "<li><a href='index.php?page={$i}'>{$i}</a></li>";
}?>
</ul>

<?php include "includes/footer.php"; ?>