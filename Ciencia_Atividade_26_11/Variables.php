<!DOCTYPE html>
<html>
<body>

<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

<?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  //echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<?php
function myTeste() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTeste();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

<?php
$x = 5;
$y = 10;

function myTestx() {
  global $x, $y;
  $y = $x + $y;
} 

myTestx();  // run function
echo $y; // output the new value for variable $y
?>

<?php
$x = 5;
$y = 10;

function myTest2() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest2();
echo $y;
?>

<?php
function myTest4() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest4();
echo "<br>";
myTest4();
echo "<br>";
myTest4();
?> 


</body>
</html>