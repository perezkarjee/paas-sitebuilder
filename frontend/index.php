<?php
//frontend home start

/*
dependency--- includes/external-links.php
dependency--- includes/header.php
dependency--- includes/menu.php
dependency--- sliders/home.php
dependency--- containers/container-home.php
dependency--- includes/footer.php
dependency--- add dependency here
*/
?>

<?php
//head
$title = 'Home';
include 'includes/external-links.php';
include 'includes/header.php';
include 'includes/menu.php';
?>

<?php
//slider
include 'sliders/home.php';
?>

<?php
//container
include 'containers/container-home.php';
?>

<?php
//foot
include 'includes/footer.php';
?>