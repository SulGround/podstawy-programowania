<?php
$x=rand(-20,20);
print($x."<br>");
if (($x>-10 && $x<=-5) || ($x>0 && $x<=5) || ($x>10 && $x<=15))
{
	print("należy do przedziału");
}


else 
print("nie należy do przedziału");
?>