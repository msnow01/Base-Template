<?php
$dir="../";
include $dir."admin/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php
$page_title="Dashboard";
include $dir."inc/connection.php";
include $dir."inc/functions.php";
include $dir."inc/header.php";
include $dir."inc/menu.php";
?>
<body>
    <h1>Welcome <?php echo $session_row['name'];?>!</h1>
    <p><a class="btn btn-primary" href="<?php echo $dir;?>admin/logout.php">Log out</a></p>
</body>
<?php include $dir."inc/footer.php"; ?>
</html>
