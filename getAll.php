<?php 
require "./connect.php";
error_reporting('E_RROR');
$products = [];

$query = "SELECT * FROM products";
if ($result = mysqli_query($conn,$query)) {
	$cr = 0;
	while ($row = mysqli_fetch_assoc($result)) {
		$products[$cr]['id'] = $row['id'];
		$products[$cr]['name'] = $row['name'];
		$products[$cr]['description'] = $row['description'];
		$products[$cr]['unit_price'] = $row['unit_price'];
		$products[$cr]['unit_quantity'] = $row['unit_quantity'];
		$products[$cr]['status'] = $row['status'];
		$products[$cr]['unit_sold'] = $row['unit_sold'];
		$cr++;
	}
	echo json_encode($products);
}else{
	http_response_code(404);
}

 ?>