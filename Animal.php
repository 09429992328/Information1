!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php 
include("Animal.php");

	?>


<body>


<?Php

$Sumatran = new Tiger("Sumatran ", "Orange");
echo "Its a ".$Sumatran ->get_breed();
echo " <br>Its color ".$Sumatran ->get_color();
echo "<br>It lives in Plain<br><br>";

$Chihuahua = new Dog("Chihuahua", "Gray");
$Chihuahua->set_Owner("Bieber");
echo "its a".$Chihuahua->get_breed();
echo " <br>Its color ".$Chihuahua->get_color();
echo "<br>Her master is <br>".$Chihuahua->get_owner();


?>

</body>
</html>