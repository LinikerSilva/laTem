<?php
$mysqli = new mysqli('localhost', 'admin',
'@Luno123', 'la_tem');
if ($mysqli->connect_errno) {
echo 'Connect failed: ' . $mysqli->connect_error;
exit();
}