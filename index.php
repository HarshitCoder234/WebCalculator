<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Calculator</title>
</head>
<body>

 <div>
 	<h1>Calculator</h1>
 </div>

<p>
 <form method="get" action="index.php">
 	<input name="v1">
 	<select name="action">
 		<option value="plus">+</option>
 		<option value="minus">-</option>
 	</select>
 	<input name="v2">
 	<input type="submit" name="submit" value="Submit">
 </form>
</p>

<p>
 <?php 

 	if(isset($_GET["submit"])) {
 		$v1 = $_GET["v1"];
 		$v2 = $_GET["v2"];

 		if ($_GET["action"] == "plus") {
 			$result = $v1 + $v2;
 			echo "<h1>$v1 + $v2";
 		}
 		else {
 			$result = $v1 - $v2;
 			echo "<h1>$v1 - $v2";
 		}

 		echo " = $result</h1>";
 	}

 ?>
</p>

</body>
</html>