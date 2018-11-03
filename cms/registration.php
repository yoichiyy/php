<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php
if(isset($_POST['create_user'])){
$username = $_POST['username'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

if(!empty($username) && !empty($user_email) && !empty($user_password)){

$username = mysqli_real_escape_string($connection, $username);
$user_email = mysqli_real_escape_string($connection, $user_email);
$user_password = mysqli_real_escape_string($connection, $user_password);

$user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));
$query = "INSERT INTO users(username, user_email, user_password) ";

$query .= "VALUES('{$username}', '{$user_email}', '{$user_password}') ";
$create_user_query = mysqli_query($connection, $query);
confirm($create_user_query);
echo "User Created: " . " " . "<a href='users.php'>View Users</a>";
}else{
  die("あうと" . mysqli_error($connection));
}

}?>

<!-- Navigation -->
<?php  include "includes/navigation.php"; ?>
<!-- Page Content -->
<div class="container">
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="form-wrap">
                        <h1>Register</h1>
                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="post_tags">Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>

                            <div class="form-group">
                                <label for="post_content">Email</label>
                                <input type="email" class="form-control" name="user_email">
                            </div>

                            <div class="form-group">
                                <label for="post_content">Password</label>
                                <input type="password" class="form-control" name="user_password">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="create_user" value="Add User">
                            </div>
                        </form>
                    </div>
                </div> <!-- /.col-xs-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <hr>
    <?php include "includes/footer.php";?>
