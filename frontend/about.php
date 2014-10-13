<?php
//frontend home start

/*
dependency--- includes/external-links.php
dependency--- includes/header.php
dependency--- includes/menu.php
dependency--- includes/footer.php
dependency--- containers/container-about.php
dependency--- add dependency here
*/
?>

<?php
//head
$title = 'About';
include 'includes/external-links.php';
include 'includes/header.php';
include 'includes/menu.php';
?>

<?php
//container
include 'containers/container-about.php';
?>

<?php
//foot
include 'includes/footer.php';
?>