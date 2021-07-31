<?php
include 'phpqrcode/qrlib.php';
session_start();

$text1 = "คิวของคุณคือ ";
$text2 = $_SESSION["queue"];
$text3 = $text1. "" . $text2;

QRcode::png($text3);
?>