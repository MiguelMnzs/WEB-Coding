<!DOCTYPE html>
<html>
<body>

<?php
// case-sensitive constant name
define("GREEETING", "Welcome to W3Schools.com!");
echo GREEETING;
?> 

<?php
// case-insensitive constant name
define("GREEEETING", "Welcome to W3Schools.com!", true);
echo greeeeting;
?> 

<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?> 

<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
?> 


</body>
</html>
