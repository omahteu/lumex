<?php
session_start();
$message = $_SESSION['message'] ?? null;
unset($_SESSION['message']);
?>
