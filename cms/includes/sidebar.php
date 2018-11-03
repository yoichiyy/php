<div class="col-md-4">
<!-- ★検索ウインドウ -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="POST">
            <div class="input-group">
                <input name="search" type="text" class="form-control">
                <span class="input-group-btn">
                    <button name="submit" class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
    </div>
<!-- ★ログイン -->
    <div class="well">
        <h4>Login  <div style="color:red"><?php echo $_SESSION['username'] ?></div></h4>
        <form action="includes/login.php" method="POST">
            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Enter Username">
            </div>
            <div class="input-group">
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                <span class="input-group-btn">
                    <button name="login" class="btn btn-primary" type="submit">Submit
                    </button>
                </span>
            </div>
        </form>
    </div>

<!-- Blog Categories Well -->
    <div class="well">
<?php
$query = "SELECT * FROM categories";
$select_categories_sidebar = mysqli_query($connection, $query);
?>
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
<?php
while($row = mysqli_fetch_assoc($select_categories_sidebar)){
$cat_title = $row['cat_title'];
$cat_id = $row['cat_id'];
echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
}?>
                </ul>
            </div><!-- col12 -->
        </div><!-- row -->
      </div>
</div><!-- colmd4-->
