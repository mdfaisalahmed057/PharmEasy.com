<?php
include "includes/head.php"
?>

<body>
    <?php
    include "includes/header.php"
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
        $data = all_products();
        $num = sizeof($data);
        for ($i = 0; $i < $num; $i++) {


        ?>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/<?php echo $data[$i]['item_image'] ?>" class="img-fluid rounded-start" style="margin: 10px; width: 20.45rem; height: 15.45rem; " alt="...">
                    </div>

                    <!--CATALOG FOR THE PRODUCT-->
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data[$i]['item_title'] ?></h5>
                            <p class="card-text" style="font-weight: bold;"><?php echo $data[$i]['item_description'] ?><br>
                                <?php if ($data[$i]['item_quantity'] > 0) {

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
                            <small style="font-weight: bold;">₹<?php echo $data[$i]['item_price'] ?></small><br>
                            <small class="text-muted" style="font-weight: bold;">Brand Name </small>

                            <small style="color: rgb(80, 223, 80);font-weight: bold;padding:10px ;">taha ali and
                                company</small><br><br>

                            <?php if ($data[$i]['item_quantity'] != 0) { ?>
                                <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>" class="btn btn-warning"> Edit</a>
                            <?php } ?>
                            <a href="product.php?delete=<?php echo $data[$i]['item_id'] ?>" class="btn btn-danger">Delete</a>



                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
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
        <a href="product.php?delete=<?php echo $data[$i]['item_id'] ?>" class="btn btn-danger btn-lg"> Delete all Products !</a>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a href="final.php" class="btn btn-success btn-lg"> &nbsp;Proceed to Buy &nbsp;</a>
        <br><br>
    </div>


    <!-- end of TOTAL -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>