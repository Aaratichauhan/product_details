<!DOCTYPE html>
<html>
<title>update</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<body class="w3-light-grey w3-content" style="max-width:1600px">
  <!-- Sidebar/menu -->
  <?php
  include_once 'sidebar.php';
  ?>
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
    title="close side menu" id="myOverlay"></div>
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px">
    <header id="product">
      <div class="w3-container">
        <h1><b>Product Management</b></h1>
      </div>
    </header>

    <!-- main Section -->
    <div class="w3-container w3-padding-large w3-light-grey">
      <h4 id="product"><b>Product Information</b></h4>

      <hr class="w3-opacity">

      <?php
            include 'conn.php';
            $id = $_GET['id'];
            $sql2 = "SELECT * FROM product WHERE id = {$id}";
            $check1 = mysqli_query($conn, $sql2);
            $row = mysqli_num_rows($check1);

            if ($row > 0) {
              while ($data = mysqli_fetch_assoc($check1)) {
                ?>

      <form action="updateData.php" method="POST">
        <div class="w3-section">
          <label>Enter product name</label>
          <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
          <input class="w3-input w3-border" type="text" name="name" value="<?php echo $data['name']; ?>" required>
        </div>
        <div class="w3-section">
          <label>Enter product description</label>
          <input class="w3-input w3-border" type="text" name="description" value="<?php echo $data['description']; ?>" required>
        </div>
        <div class="w3-section">
          <label>Total price</label>
          <input class="w3-input w3-border" type="text" name="price" value="<?php echo $data['price']; ?>" required>
        </div>
        <button type="update" class="w3-button w3-black w3-margin-bottom">Update product</button>
      </form>
      <?php 
      }
     }
      ?>
    </div>

  </div>
</body>

</html>