<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Raleway", sans-serif
  }
</style>

<body class="w3-light-grey w3-content" style="max-width:1600px">
  <!-- Sidebar/menu -->
  <?php
  include_once 'sidebar.php';
  ?>
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
    title="close side menu" id="myOverlay"></div>
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px">
    <!-- Header -->
    <header id="product">
      <div class="w3-container">
        <h1><b>Product Management</b></h1>
      </div>
    </header>

    <div class="w3-container w3-padding-large w3-light-grey">
      <h4 id="product"><b>Product Information</b></h4>

      <hr class="w3-opacity">

      <div class="card" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">Total Product</h5>
          <p class="card-text">
            <?php
            include 'conn.php';
            $dash_product = "SELECT * FROM product";
            $dash_product_run = mysqli_query($conn,$dash_product);

            if($product_total = mysqli_num_rows($dash_product_run))
            {
              echo "$product_total";
            }else{
              echo "No Data";
            }
            ?>
          </p>
          <a href="product-view.php" class="btn btn-primary">View Details</a>
        </div>
      </div>



    </div>
</body>

</html>