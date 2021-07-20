<!DOCTYPE html>
<html lang="en">
<?php
$dir="../";
include $dir."admin/session.php";
$page_title = "Dashboard";
include $dir."inc/connection.php";
include $dir."inc/functions.php";
include $dir."inc/header.php";
include $dir."inc/menu.php";
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome <?php echo $current_row['name'];?>!</h1>
            </div>
        </div>
    </div>
</body>
<?php include $dir."inc/footer.php"; ?>
</html>
