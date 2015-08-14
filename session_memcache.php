<?php
ob_start();
echo 'save path -> ' . ini_get('session.save_path');
echo '<br/>save handler -> ' . ini_get('session.save_handler');
session_start();

$_SESSION['first_name'] = 'Ranjeet';
$_SESSION['first_name'] = 'Ranjeet';

print_r($_SESSION);
ob_flush();
?>