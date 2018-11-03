<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand" href="../index.php">ホーム</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username'] ?><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li>
          <a href="./index.php"><i class="fa fa-fw fa-file"></i>ダッシュボード</a>
      </li>
<!-- ★サイドバーのDropDown -->
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="posts" class="collapse">
                    <li>
                        <a href="./posts.php">全投稿</a>
                    </li>
                    <li>
                        <a href="posts.php?source=add_post">Add Posts</a>
                    </li>
                </ul>
            </li>
<!-- ★サイドバー単騎 -->
            <li>
                <a href="./categories.php"><i class="fa fa-fw fa-file"></i>Categories</a>
            </li>
            <li>
                <a href="./comments.php"><i class="fa fa-fw fa-dashboard"></i>Comments</a>
            </li>
<!-- ★サイドバーのDropDown2 -->
<li>
    <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
    <ul id="users" class="collapse">
        <li>
            <a href="./users.php">ユーザー表示</a>
        </li>
        <li>
            <a href="users.php?source=add_user">ユーザー追加</a>
        </li>
    </ul>
</li>
<!-- ★サイドバー単騎2 -->
<!-- <li>
    <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i>Profile</a>
</li> -->
</ul>
</div>
</nav>
