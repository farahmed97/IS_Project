<?php

$user = 'root';
$pass = '';
$db = 'grading_system';

$db = new mysqli ('localhost', $user, $pass, $db) or die ("Unable to connect");

echo "Great work!!";

?>