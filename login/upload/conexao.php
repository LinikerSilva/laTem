<?php
$mysqli = new mysqli('localhost', 'root',
'', 'la_tem');
if ($mysqli->connect_errno) {
echo 'Connect failed: ' . $mysqli->connect_error;
exit();
}