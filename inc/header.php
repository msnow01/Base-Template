<?php
$base_url = "https://".$_SERVER['HTTP_HOST']."/";
include $dir."config.php";
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="author" content="Webkah Web Design">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">

    <meta name="description" content="<?php echo $website_description; ?>">
    <title><?php echo $page_title; ?> | <?php echo $website_title; ?> </title>

    <link rel="shortcut icon" href="<?php echo $dir.$logo_path;?>">

    <!-- AOS ANIMATION -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/b029d12cb7.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- CUSTOM STYLE SHEETS -->
    <link rel="stylesheet" href="<?php echo $dir;?>css/styles.css">
</head>
