<?php 
require './connect.php';
	// $products = [];
$products = [];
$postdata = file_get_contents("php://input");
	$request=json_decode($postdata);
if (isset($request) && !empty($request)) {
	
	$ids = mysqli_real_escape_string($conn,$request->id);
	// $passwords = mysqli_real_escape_string($conn,$request->passwords);

$query = "SELECT * FROM products WHERE id='{$ids}' LIMIT 1";

if ($result = mysqli_query($conn,$query)) {
	$cr = 0;
	while($row= mysqli_fetch_assoc($result)){
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
} else {
	http_response_code(402);
}
}
	
 ?>