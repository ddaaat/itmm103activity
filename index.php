<!DOCTYPE html>
<html>
<head>
	<h1>HELLO WORLD</h1>
</head>
<body>
<?php
 $a;
 $b;

 for($a=0;$a<=5;$a++)
 {
 	for($b=0;$b<=5;$b++)
 	{
 		if($a>$b)
 			echo '*';
 		if($a<$b)
 			echo ' ';
 	}echo "<br>";
 }
 echo "<br>";
?>
<?php
 $a;
 $b;
 $c;

  for($a=5;$a>0;$a--)
  {
  	for($b=1;$b<$a;$b++){
  		echo "_";
  	}
  	for($c=5;$c>=$a;$c--){
  		echo "*";
  	}
  	echo "<br>";
  }
  		echo "<br>";
?>
<?php
 $a;
 $b;

 for($a=0;$a<=5;$a++)
 {
 	for($b=0;$b<=5;$b++)
 	{
 		if($a>$b)
 			echo ' ';
 		if($a<$b)
 			echo '*';
 	}echo "<br>";
 }
 echo "<br>";
?>
<?php
 $a;
 $b;

 for($a=0;$a<5;$a++)
 {
 	for($b=0;$b<5;$b++)
 	{
 		if($a==1 && $b==0)
 			echo '_';
 		else if($a==2 && $b==0)
 			echo '_';
 		else if($a==2 && $b==1)
 			echo '_';
 			else if($a==3 && $b==0)
 			echo '_';
 			else if($a==3 && $b==1)
 			echo '_';
 			else if($a==3 && $b==2)
 			echo '_';
 			else if($a==4 && $b==0)
 			echo '_';
 			else if($a==4 && $b==1)
 			echo '_';
 			else if($a==4 && $b==2)
 			echo '_';
 			else if($a==4 && $b==3)
 			echo '_';
 		else
 			echo '*';
 	}echo "<br>";
 }
 echo "<br>";
?>
<a href="form.php">click me</a>
</body>
</html>