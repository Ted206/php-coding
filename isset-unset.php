<?php
$s1 = isset($name); // $s1 is false
$name = "Ted";
$s2 = isset($name); // $s2 is true

$name = "Ted";
unset($name); // $name is NULL
?>
