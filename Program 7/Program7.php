<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1" />
<style>
	p
	{

    font-size: 39px;
    position: absolute;
    top: 38%;
    left: 35%;
    display: inline-block;
             
	}

body
{
	background-color: blue;


}
</style>
 <p>
<?php 
echo "The server time is".date(" h: i : s A"). "<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

?> 
</p>
</head>
</html>