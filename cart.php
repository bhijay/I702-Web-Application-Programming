

<?php
#require_once "config.php";
include ("header.php");

	#$conn = new mysqli("localhost", "test", "t3st3r123", "test");
	#$results = $conn->query("SELECT * FROM ccataldo_shop_product;");

	$product_id = intval($_POST["id"]);
	if (array_key_exists($product_id, $_SESSION["cart"])) {
		$_SESSION["cart"][$product_id] += 1;
	} else {
		$_SESSION["cart"][$product_id] = 1;
	}
	var_dump($_SESSION["cart"]);

#$conn->close();
?>
<br />
<br />
<a href="lab01.php">Back to product listing</a>
