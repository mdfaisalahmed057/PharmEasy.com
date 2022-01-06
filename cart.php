<?php
include "includes/head.php"
?>

<body>
    <?php
    include "includes/header.php";
    // echo '<pre>';
    // print_r($_SESSION['cart']);
    // echo '</pre>';
    // echo 1;
    // $data = get_cart();
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    ?>


    </div>
    <!-- PRODUCT header-->
    <div class="shopping" style="margin: 10px; border-bottom: 4px; font-weight: bold;">
        <h3> Shopping Cart</h3>
        <h1 class="border border-1.5" style="width: 100%;"> </h1>
    </div>
    <!-- end of PRODUCT header-->

    <!-- PRODUCTS-->
    <div class="container-fluid">
        <?php
        echo '<pre>';
        print_r($_SESSION['cart']);
        echo '</pre>';
        if (!empty($_SESSION['cart'])) {
            echo 1;
            $data = get_cart();
            delete_from_cart();
            $num = sizeof($data);
            for ($i = 0; $i < $num; $i++) {
                if (isset($data[$i])) {
        ?>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/<?php echo $data[$i][0]['item_image'] ?>" class="img-fluid rounded-start" style="margin: 10px; width: 20.45rem; height: 15.45rem; " alt="...">
                            </div>

                            <!--CATALOG FOR THE PRODUCT-->
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data[$i][0]['item_title'] ?></h5>
                                    <p class="card-text" style="font-weight: bold;"><?php echo $data[$i][0]['item_description'] ?><br>
                                        <?php if ($data[$i][0]['item_quantity'] > 0) {

                                        ?>
                                            <small style="color: rgb(58, 211, 58);">In Stock</small>
                                        <?php
                                        } else {
                                        ?>
                                            <small style="color: red;">Out Of Stock</small>

                                        <?php
                                        }
                                        ?>
                                    </p>
                                    <small style="font-weight: bold;">₹<?php echo $data[$i][0]['item_price'] ?></small><br>
                                    <small class="text-muted" style="font-weight: bold;">Brand Name </small>
                                    <small style="color: rgb(80, 223, 80);font-weight: bold;padding:10px ;"><?php echo $data[$i][0]['item_brand'] ?></small><br>
                                    <small class="text-muted" style="font-weight: bold;">Quantity </small>
                                    <small style="color: rgb(80, 223, 80);font-weight: bold;padding:10px ;"><?php echo $_SESSION['cart'][$i]['quantity'] ?></small><br><br>
                                    <?php if ($data[$i][0]['item_quantity'] != 0) { ?>

                                        <a href="product.php?product_id=<?php echo $data[$i][0]['item_id'] ?>" class="btn btn-warning"> Edit</a>
                                    <?php } ?>
                                    <a href="cart.php?delete=<?php echo $data[$i][0]['item_id'] ?>" class="btn btn-danger">Delete</a>



                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
            <!-- end of PRODUCTS -->
            <!-- TOTAL -->
            <div class="shopping" style="margin: 10px; border-bottom: 4px; font-weight: bold;">
                <h3> Total </h3>
                <h1 class="border border-1.5" style="width: 100%;"> </h1>
            </div>
            <div style="margin-left: 460px;">
                <h5>total (<?php
                            $total = total_price($data);
                            echo $num . " ";
                            if ($num == 1 or $num == 0) {
                                echo "item";
                            } else {
                                echo "items";
                            } ?>) : ₹<?php echo $total ?></h5>

                <br>

            </div>
            <div style="margin-left: 350px; padding-right: 100px;">
                <a href="product.php?delete=<?php echo $data[$i][0]['item_id'] ?>" class="btn btn-danger btn-lg"> Delete all Products !</a>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="final.php?order=done" class="btn btn-success btn-lg"> &nbsp;Proceed to Buy &nbsp;</a>
                <br><br>
            </div>
        <?php
        } else {
        ?>
            <h1 style="text-align: center; font-family: 'Fredoka One', cursive;">No products in the Cart</h1>
            <p style="text-align: center; font-family: 'Fredoka One', cursive;">Please add at least product to Buy</p>
        <?php
        }
        ?>

    </div>
    <!-- end of TOTAL -->

    <?php
    include "includes/footer.php"
    ?>
</body>

</html>