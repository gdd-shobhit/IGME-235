<!DOCTYPE>
<html lang="en">
<header>
	<meta charset="UTF=8">
	<title>
	OK
	</title>
</header
<body>

<?php
	 $colors = ["red"=>"red","green"=>"green","blue"=>"blue"];
   
   // 1 - access elements by key 
   $ok = $colors["red"];
   echo "<p>$ok</p>";
   
   // 2 - add new elements by specifying a key:value
  
   
   // 3 - loop through arrays with longer version of foreach loop
   
   foreach($colors as $value){
   	echo "<ul><li>$value</li></ul>";
   }
  
	?>
	
</body>
</html>