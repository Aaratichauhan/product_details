<?php

$id = $_GET['id'];

include 'conn.php';

$sql = "DELETE FROM product WHERE id={$id}";

$result = mysqli_query($conn,$sql);

header("Location: http://localhost/product_management/product-view.php");
mysqli_close($conn);

?>