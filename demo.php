<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
</head>
<body>
<?php
$x = 5;
$y = 10;

function myTest()
{
	$GLOBALS['y'] += $GLOBALS['x'] + $GLOBALS['y'];

}

myTest();
echo $y;
?>
</body>
</html>