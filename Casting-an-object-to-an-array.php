<?php
class Person
{
var $name = "Ted";
var $age = 36;
}
$o = new Person;
$a = (array) $o;
print_r($a);
Array (
[name] => Ted
[age] => 36
)
$a = array('name' => "Ted", 'age' => 36, 'wife' => "Anna");
$o = (object) $a;
echo $o->name;
?>

//Ted
