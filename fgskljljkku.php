<?php
/*
$i=0;
$s=0;
for($a=10;$a<100;$a++)
{
	if($a%3==0 && $a%7==0)
	{
		$s=$s+$a;
		$i++;
		print($a."<br>");
	}
}
print($s."<br>");
$s=$s/$i;
print($s);*/
$k=0;
for($a=9;$a>=1;$a--)
{
	$k=$a*$a;
	print($k);
	if($k%2==0)
	{
		print("- parzysta");
	}
	print("<br>");
}





?>