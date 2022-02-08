<?php
include "includes/head.php"
?>

<body>
  <?php
  include "includes/header.php";
  $data = get_item();
  add_cart($_SESSION['item_id']);
  ?>
  <br>
  <div class="container-fluid  bg-3 text-center">

    <div class="row">
      <div class="col">
        <img src="images/<?php echo $data[0]['item_image'] ?>" alt="Image" width="450" height="585">
      </div>
      <div class=" col">
        <br>
        <h4 style="font-weight: bold;"><?php echo $data[0]['item_title'] ?><br></h4>
        <br>
        <h1 class="border border-1" style="width: 100%;"> </h1>
        <div class="container">
          <div class="row">
            <div class="col-6 col-sm-4" style="font-weight:bold">Brand</div>
            <div class="col-6 col-sm-4"><?php echo $data[0]['item_brand'] ?></div><br>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-6 col-sm-4" style="padding-top: 20px;font-weight:bold">category </div>
            <div class="col-6 col-sm-4" style="padding-top: 20px;font-weight: bold"> <?php echo $data[0]['item_cat'] ?></div>
            <br><br>
          </div>
        </div>
        <h1 class="border border-1" style="width: 100%;  "> </h1>
        <br>
        <h5 style="width: 100%; padding-right: 200px; font-weight: bold;">About this item :</h5>
        <br>
        <p style="font-weight: bold;">
          <?php echo $data[0]['item_details'] ?>
        </p>
        </p>
        <h1 class="border border-1" style="width: 100%;  "> </h1>
      </div>
      <div class="col-sm-4" style=" padding-left:5rem;">
        <div class="card" style="width: 18rem;  ">
          <div class="card-body">
            <h5 class="card-title" style="color: rgb(211, 79, 79);"> ₹ <?php echo $data[0]['item_price'] ?></h5>
            <?php if ($data[0]['item_quantity'] > 0) {

            ?>
              <h6 style="color: rgb(58, 211, 58);">In Stock</h6>
            <?php
            } else {
              $out = 1;
            ?>
              <small style="color: red;">Out Of Stock</small>

            <?php
            }
            ?>
            <p class="card-text">
              <span style="color: blue;">Deliver to :</span>
              <?php
              if (isset($_SESSION['user_id'])) {
                $user = get_user($_SESSION['user_id']);
                echo $user[0]['user_address'];
              } else {
                echo "Btm 1st stage opp maruthi layout,4th 560029 bagalore (Store)";
              }
              ?>
            </p>
            <?php
            if ($out != 1) {
            ?>

              <ul class="list-group list-group-flush">
                <form action="product.php" method="GET">
                  <div class="form-group">
                    <input value="1" type="number" class="form-control" placeholder="" name="quantity" min="1" max="999">
                  </div>
                  <br>
                  <button type="submit" value="buy" name="buy" class="btn btn-warning " style="margin: 5px;">&nbsp; Buy Now &nbsp;</button>
                  <br>
                  <button type="submit" value="" name="cart" class="btn btn-warning " style="margin: 5px;">Add to Cart</button>
                </form>
              </ul>
            <?php
            }
            ?>
          </div>

        </div>
      </div>
    </div>
    <br>
  </div>
  </div>
  <?php
  include "includes/footer.php"
  ?>
</body>

</html>