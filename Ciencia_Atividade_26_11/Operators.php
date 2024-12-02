<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
$y = 6;

echo $x + $y;
?>  

<?php
$x = 10;  
$y = 6;

echo $x - $y;
?>  

<?php
$x = 10;  
$y = 6;

echo $x * $y;
?>  

<?php
$x = 10;  
$y = 6;

echo $x / $y;
?>  

<?php
$x = 10;  
$y = 6;

echo $x % $y;
?>  

<?php
$x = 10;  
echo $x;
?> 

<?php
$x = 20;  
$x += 100;

echo $x;
?>  

<?php
$x = 50;
$x -= 30;

echo $x;
?>  

<?php
$x = 5;
$x *= 6;

echo $x;
?>  

<?php
$x = 10;
$x /= 5;

echo $x;
?>  

<?php
$x = 15;
$x %= 4;

echo $x;
?>  

<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?>  

<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>  

<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal
?>  

<?php
$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal
?>  

<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
?>  

<?php
$x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y
?>  

<?php
$x = 10;
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y
?>  

<?php
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y
?>  

<?php
$x = 50;
$y = 50;

var_dump($x <= $y); // returns true because $x is less than or equal to $y
?>  

<?php
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?>  

<?php
$x = 10;  
echo ++$x;
?>  

<?php
$x = 10;  
echo $x++;
?>  

<?php
$x = 10;  
echo --$x;
?>  

<?php
$x = 10;  
echo $x--;
?>  

<h1>The and Operator</h1>

<p>Write a message if both conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>  

<h1>The or Operator</h1>

<p>Write a message if at least one of the conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
?>  

<h1>The xor Operator</h1>

<p>Write a message if one of the conditions are true, bot not if both conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
?>  


<h1>The && Operator</h1>

<p>Write a message if both conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
?>  

<h1>The || Operator</h1>

<p>Write a message if at least one of the conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
?>  

<h1>The ! Operator</h1>

<p>Write a message if the condition is NOT true.</p>

<?php
$x = 100;  

if (!($x == 90)) {
    echo "Hello world!";
}
?>  

<?php
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?> 

<?php
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
?>  

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
?>  

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);
?>  

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
?>  

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y);
?>  

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y);
?>  

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);
?>  

<?php
   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
?>  

<?php
   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?>  


</body>
</html>
