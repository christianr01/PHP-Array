<!-- RULLODA, Christian S. -->
<!-- CIT17 | CITCS INTL -->
<!-- PHP Arrays Ex. 2 -->
 	<html>
 	<head>
 		<title>PHP Arrays Ex. 2</title>
 	</head>
 	<body>
 	<?php 
 	$largestcities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo");

 	for ($i=0;$i<(count($largestcities));$i++){
	 		echo ($largestcities[$i]) . ", ";
 	}

	array_push($largestcities,"Los Angeles", "Calcutta", "Osaka", "Beijing");  

	   sort($largestcities); 
	   var_dump($largestcities); 
			for ($i=0;$i<(count($largestcities));$i++){	 			
 			echo "<li>($largestcities[$i])</li>";
	 		}
?> 
 </body>
 </html>