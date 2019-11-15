<!DOCTYPE html>
<html>
<head>
	<title>Add complete</title>
	<style type="text/css">
		.a{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php 
		$productid = $_POST["productid"];
		$productname = $_POST["productname"];
		$productdescription = $_POST["productdescription"];	
		$price = $_POST["price"];
		echo $name;
		
		//Refere to database 
	   $db = parse_url(getenv("DATABASE_URL"));
	   $pdo = new PDO("pgsql:" . sprintf(
	        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
	        $db["host"],
	        $db["port"],
	        $db["user"],
	        $db["pass"],
	        ltrim($db["path"], "/")
	   ));
	   $data = [
		    'productid' => $productid,
		    'productname' => $productname,
		    'productdescription' => $productdescription,
		    'price' => $price,
		];
		$stmt =  $pdo->prepare("INSERT INTO student(productid, productname, productdescription, price) VALUES (:productid,:productname,:productdescription,:price)");
		$stmt->execute($data);

	 ?>
	 <h2 class="a">Add Complete
	 </h2>
	 <ul>
	 	<li class="a"><?php echo $productid?></li>
	 	<li class="a"><?php echo $productname?></li>
	 	<li class="a"><?php echo $productdescription?></li>
	 	<li class="a"><?php echo $price?></li>
	 </ul>
	 <div class="a"><a href="index.php">Return</a> </div>
</body>
</html>