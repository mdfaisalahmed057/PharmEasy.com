<?php
include "includes/head.php"
?>

<body>

    <?php
    session_start();
    include "includes/header.php";

    ?>
    <div class="container-fluid ">
        <div class="row">
            <?php
            if (isset($data)) {
                $num = sizeof($data);
                for ($i = 0; $i < $num; $i++) { ?>
                    <div class="col-sm-2" id="cards" style="width: 20.45rem;">
                        <div class="card border border-warning">
                            <img src="images/<?php echo $data[$i]['item_image'] ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data[$i]['item_title'] ?></h5>
                                <p class="card-text"><?php echo $data[$i]['item_description'] ?></p>
                                <small class="text-muted" style="font-weight: bold;">Brand Name: <?php echo $data[$i]['item_brand'] ?></small><br><br>
                                <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>" class="btn btn-success">More details</a>

                            </div>
                        </div>
                    </div>
                <?php
                }
                unset($data);
                if ($num < 8) {
                    $data = all_products();
                    $num = sizeof($data);

                ?>

                    <h2>You might also like : </h2>
                    <?php
                    for ($i = 0; $i < $num; $i++) {

                    ?>
                        <div class="col-sm-2" id="cards" style="width: 20.45rem;">
                            <div class="card border border-warning">
                                <img src="images/<?php echo $data[$i]['item_image'] ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data[$i]['item_title'] ?></h5>
                                    <p class="card-text"><?php echo $data[$i]['item_description'] ?></p>
                                    <small class="text-muted" style="font-weight: bold;">Brand Name: <?php echo $data[$i]['item_brand'] ?></small><br><br>
                                    <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>" class="btn btn-success">More details</a>

                                </div>
                            </div>
                        </div>
                <?php
                        if ($i == 3) {
                            break;
                        }
                    }
                }
            } else {
                ?>
                <h1 style="text-align: center; font-family: 'Fredoka One', cursive;">No results</h1>
                <p style="text-align: center; font-family: 'Fredoka One', cursive;">No product found with this name !</p>
                <img src="images/noResult.png" style="height: auto; width:auto; margin-left: auto; margin-right: auto;">
                <h2 style="margin-top: 45px;">You might also like : </h2>
                <?php
                $data = all_products();
                $num = sizeof($data);
                for ($i = 0; $i < $num; $i++) {

                ?>
                    <div class="col-sm-2" id="cards" style="width: 20.45rem;">
                        <div class="card border border-warning">
                            <img src="images/<?php echo $data[$i]['item_image'] ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data[$i]['item_title'] ?></h5>
                                <p class="card-text"><?php echo $data[$i]['item_description'] ?></p>
                                <small class="text-muted" style="font-weight: bold;">Brand Name: <?php echo $data[$i]['item_brand'] ?></small><br><br>
                                <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>" class="btn btn-success">More details</a>

                            </div>
                        </div>
                    </div>
            <?php
                    if ($i == 3) {
                        break;
                    }
                }
            }

            ?>
        </div>
    </div>

    <?php
    include "includes/footer.php"
    ?>
</body>

</html>