<?php
/*if (expression)
statement
else statement*/

if ($user_validated)
echo "Welcome!";
else
echo "Access Forbidden!";
?>
<br>

<?php
if ($user_validated) {
echo "Welcome!";
$greeted = 1;
}
else {
echo "Access Forbidden!";
exit;
}
?>
<br>

<?php
if ($user_validated):
echo "Welcome!";
$greeted = 1;
else:
echo "Access Forbidden!";
exit;
endif;
?>
<br>

<?php
<? if ($user_validated) :?>
<table>
<tr>
<td>First Name:</td><td>Sophia</td>
</tr>
<tr>
<td>Last Name:</td><td>Lee</td>
</tr>
</table>
<? else: ?>
Please log in.
<? endif ?>
?>
<br>

<?php
if ($good) {
print("Dandy!");
}
else {
if ($error) {
print("Oh, no!");
}
else {
print("I'm ambivalent...");
}
}
?>
<br>

<?php

if ($good) {
print("Dandy!");
}
elseif ($error) {
print("Oh, no!");
}
else {
print("I'm ambivalent...");
?>

