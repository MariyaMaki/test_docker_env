<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET - POST</title>
</head>
<body>

	<form method="get" action="index.php">
    <?php
if(isset($_GET['name'])){
    $name = $_GET['name']; 
}

function greeting(){
	if(isset($_GET['name'])) {
		$name = $_GET['name']; 
		echo "Hello, " . $name;
	}
}
greeting(); 
?>
	  <input type="text" name="name">
	  <input type="text" name="lang">
	  <input type="submit" value="submit">
	</form>
</body>
</html>