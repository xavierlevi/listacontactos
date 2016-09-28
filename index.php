<?php
require "formulario.php";
exit;
print date("Y-m-d H:i:s");
print "<br />";
print "<input type='password' />";
print_r($_SERVER);
print "<br />";
print "<br />";
print "<br />";
var_dump($_SERVER);

$variable = "mensaje";
print "<br />";
var_dump($variable);

$variable = 12;
print "<br />";
var_dump($variable);

$variable = false;
print "<br />";
var_dump($variable);

$variable = new stdClass();
print "<br />";
var_dump($variable);

if (1 !== "1") {
  print "<br />";
  print "uno es dirente a uno";
}
else {
  print "<br />";
  print "uno es igual a uno";
}

// >, >=, <, <=, ==, != , ===, !==
// || &&

for ($var=0; $var < 10; $var++) {
  print "<br />";
  print "hola mundo $var";
}

$a = 0;
while ($a <= 10) {
  print "<br />";
  print "while $a";
  $a++;
}

$b = 0;
do {
  print "<br />";
  print "Do While $b";
  $b++;
} while ($b <= 10);
