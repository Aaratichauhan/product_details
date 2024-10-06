<?php
include 'conn.php';

$id = $_POST['id'];
$user = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "UPDATE product SET name = '{$user}', description = '{$description}', price = '{$price}' WHERE id={$id}";

$result = mysqli_query($conn,$sql);

header("Location: http://localhost/product_management/product-view.php");
mysqli_close($conn);

?>    