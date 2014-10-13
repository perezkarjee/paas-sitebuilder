<?php
//frontend home start

/*
dependency--- includes/external-links.php
dependency--- includes/header.php
dependency--- includes/menu.php
dependency--- includes/footer.php
dependency--- containers/container-status.php
dependency--- add dependency here
*/
?>

<?php
//head
$title = 'Status';
include 'includes/external-links.php';
include 'includes/header.php';
include 'includes/menu.php';
?>

<?php
//container
include 'containers/container-status.php';
?>

<?php
//foot
include 'includes/footer.php';
?>