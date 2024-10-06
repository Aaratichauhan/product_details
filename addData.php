<?php
include 'conn.php';

$user = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "INSERT INTO product(name, description,price) VALUES('{$user}','{$description}','{$price}')";

$result = mysqli_query($conn,$sql);

header("Location: http://localhost/product_management/product-view.php");
mysqli_close($conn);

?>    