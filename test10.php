<!DOCTYPE html>
<html>
<body>

<?php
function myTest(){
	static $x=0;
	echo $x;
	$x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest ();
myTest();

?>

</body>
</html>