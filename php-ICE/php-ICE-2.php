<!DOCTYPE>
<html lang="en">
<header>
	<meta charset="UTF=8">
	<title>
	PHP-ICE2
	</title>
</header
<body>

<?php
	 $colors = ["RIT"=>"http://www.rit.edu",
   	"RPI"=>"http://www.rpi.edu",
   	"MCC"=>"http://www.monroecc.edu"];
   
   // // 1 - access elements by key 
   // $ok = $colors["red"];
   // echo "<p>$ok</p>";
   
   // 2 - add new elements by specifying a key:value
  
   
   // 3 - loop through arrays with longer version of foreach loop
   
   foreach($colors as $key=>$value){
   	echo "<ul><li><a href='$value'>$key</a></li></ul>";
   }
  
	?>
	
</body>
</html>