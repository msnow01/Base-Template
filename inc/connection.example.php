<?PHP
$db_hostname = "";
$db_username = "";
$db_password = "";
$db_databasename = "";

$link = mysqli_connect($db_hostname, $db_username, $db_password, $db_databasename);

if (!$link) {
    echo "Error: ".mysqli_connect_error();
} else {
    $session_query = "SELECT * FROM users WHERE id='".$_SESSION['login_id']."'";
    $session_row = mysqli_fetch_assoc(mysqli_query($link,$session_query));
}

?>
