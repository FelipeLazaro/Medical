<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once('header.php');
require_once(($_GET['page']!='' ? $_GET['page'] : 'home') . '.php');
require_once('footer.php');
?>