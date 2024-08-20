<?php
session_start();
$_SESSION['membre'] = 0; // Je détruit la session membre
// session_destroy();
header('location:connection.php');
?>

