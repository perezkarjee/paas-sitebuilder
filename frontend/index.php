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
require_once 'includes/external-links.php';
require_once 'includes/config.php';
include 'includes/header.php';
include 'includes/menu.php';
?>

<?php
//slider
include 'views/sliders/home.php';
?>

<?php
//container
include 'views/containers/container-home.php';
?>

<?php
//foot
include 'includes/footer.php';
?>