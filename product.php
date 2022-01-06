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
        <p style="font-weight: bold;"><?php echo $data[0]['item_title'] ?><br>
        <h1 class="border border-1" style="width: 100%;"> </h1>
        <div class="container">
          <div class="row">
            <div class="col-6 col-sm-4" style="font-weight:bold">Brand</div>
            <div class="col-6 col-sm-4"><?php echo $data[0]['item_brand'] ?></div><br>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-6 col-sm-4" style="padding-top: 20px;font-weight:bold">category </div>
            <div class="col-6 col-sm-4" style="padding-top: 20px;font-weight: bold"> <?php echo $data[0]['item_cat'] ?></div>
          </div>
        </div>
        <h1 class="border border-1" style="width: 100%;  "> </h1>
        <h5 style="width: 100%; padding-right: 180px; font-weight: bold;">About this item</h5>
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
            ?>
              <small style="color: red;">Out Of Stock</small>

            <?php
            }
            $user = get_user($_SESSION['user_id']);
            ?>
            <p class="card-text">
              <span style="color: blue;">Deliver to :</span>
              <?php
              if (isset($user)) {
                echo $user[0]['user_address'];
              } else {
                echo "Btm 1st stage opp maruthi layout,4th 560029 bagalore (Store)";
              }
              ?>
            </p>
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

          </div>

        </div>
      </div>
    </div>
    <br>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>