<!DOCTYPE html>
<html>
<body>

<?php
function myTest1(){
	$x=5; // local scope
	echo "<p>Variable x inside function is: $x<p>";
}

function myTest2(){
	$x=15; // local scope
	echo "<p>Variable x inside function is: $x<p>";
}

myTest1();
myTest2();

//using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>
</body>
</html>