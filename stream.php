<?php 
session_start();
if (isset($_GET['h'])) {
$hash = $_GET['h'];

if (isset($_SESSION[$hash]) && $_SESSION[$hash]) {
echo file_get_contents(''.$_SESSION[$hash]);
unset($_SESSION[$hash]);
}
}
?>  