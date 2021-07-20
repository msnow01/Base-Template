<?PHP
$db_hostname = "";
$db_username = "";
$db_password = "";
$db_databasename = "";

$link = mysqli_connect($db_hostname, $db_username, $db_password, $db_databasename);

if (!$link) {
    echo "Error: ".mysqli_connect_error();
}

?>
