<!DOCTYPE html>
<html>
<title>View</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    <div class="w3-container w3-padding-large w3-light-grey">
      <h4 id="product"><b>Product Information</b></h4>

      <hr class="w3-opacity">

      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">NAME</th>
              <th scope="col">DESCRIPTION</th>
              <th scope="col">PRICE</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'conn.php';
            $sql1 = "SELECT * FROM product";
            $check = mysqli_query($conn, $sql1);
            $row = mysqli_num_rows($check);

            if ($row > 0) {
              while ($data = mysqli_fetch_assoc($check)) {
                ?>
                <tr>
                  <th scope="row"><?php echo $data['name']; ?></th>
                  <td><?php echo $data['description']; ?></td>
                  <td><?php echo $data['price']; ?></td>
                  <td> <a href="product-edit.php?id=<?php echo $data['id']; ?>" title="Edit"><button class="btn btn-primary btn-sm"><i
                          class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                    <form method="POST" action="product-delete.php?id=<?php echo $data['id']; ?>" accept-charset="UTF-8" style="display:inline">
                      <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick=""><i
                          class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                  </td>
                </tr>
              </tbody>
              <?php
              }
            } else {
echo "No Data Found";
            }
            mysqli_close($conn);
            ?>

        </table>
      </div>
    </div>





















  </div>
  <script>
    // Script to open and close sidebar
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }
  </script>
</body>

</html>