<?php
//frontend home start

/*
dependency--- includes/external-links.php
dependency--- includes/header.php
dependency--- includes/menu.php
dependency--- includes/footer.php
dependency--- containers/container-plans.php
dependency--- add dependency here
*/
?>

<?php
//head
$title = 'Plans';
require_once '../includes/config.php';
require_once '../includes/external-links.php';
include '../includes/header.php';
include '../includes/menu.php';
?>

<?php
//container
include 'containers/container-plans.php';
?>

<?php
//foot
include '../includes/footer.php';
?>