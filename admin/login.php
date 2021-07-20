<?php
session_start();
if (isset($_SESSION['login_id'])) {
    $location = "location: dashboard.php";
    header($location);
}

$dir="../";
include $dir."inc/connection.php";
include $dir."inc/functions.php";

//login form functionality
if (isset($_POST['submit'])) {

    $email = addslashes(strtolower($_POST['email']));
    $pass = addslashes($_POST['password']);
    $password = sha1($pass); //encrypt password

    //check that all fields are filled
    if (!$email || !$pass){
        $alert_message = printAlert('danger', 'Sorry, you must provide your email address and password.');
    } else {
        //check data base for account
        $query = "SELECT * from users WHERE email='".$email."' and password='".$password."'";
        $result = mysqli_query($link,$query);
        $rowcount = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

        // set session variables
        if ($rowcount == 1){
            $_SESSION['login_id'] = $row['id'];
            $location = "location: dashboard.php";
            header($location);
        } else {
            $alert_message = printAlert('danger', 'Incorrect email or password. Please try again.');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
include $dir."inc/header.php";
include $dir."inc/menu.php";
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php echo $alert_message; ?>
                <h1>Log In</h1>
                <form method="post">
                    <p>
                        <label for="email" class="display-none">Email</label>
                        <input type="text" placeholder="Email" name="email" class="form-control" required>
                    </p>
                    <p>
                        <label for="password" class="display-none">Password</label>
                        <input type="password" id="password" placeholder="Password" name="password" class="form-control" required>
                    </p>
                    <p class="form-check">
                        <input name="showpass" id="showpass" type="checkbox" class="form-check-input" onclick="showpassword()">
                        <label for="showpass" class="form-check-label">Show Password</label>
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        <label for="submit" class="display-none">Submit</label>
                        <input type="submit" name="submit" class="btn btn-dark">
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include $dir."inc/footer.php"; ?>
</html>

<script>
function showpassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
