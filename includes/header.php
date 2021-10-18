<?php 
include "sys/init.php";
$page_title = isset($page_title) ? $page_title : "Default Page Title" ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title;  ?></title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <?php if ($page_title == "Registration Page") { ?>
    <link rel="stylesheet" href="assets/font-awesome/css/all.css">
    <link rel="stylesheet" href="assets/css/registration.css">
  <?php } ?>
  
</head>
<body>