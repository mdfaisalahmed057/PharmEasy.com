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
                                <p class="card-text"><?php echo $data[$i]['item_content'] ?></p> <a href="#" class="btn btn-success">More details</a>

                            </div>
                        </div>
                    </div>
                <?php
                }
                unset($data);
                if ($num < 8) {
                    $data = all_items();
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
                                    <p class="card-text"><?php echo $data[$i]['item_content'] ?></p> <a href="#" class="btn btn-success">More details</a>

                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
            } else {
                ?>
                <h1 style="text-align: center; font-family: 'Fredoka One', cursive;">No results</h1>
                <p style="text-align: center; font-family: 'Fredoka One', cursive;">No product found with this name !</p>
                <img src="images/noResult.png" style="height: auto; width:auto; margin-left: auto; margin-right: auto;">
            <?php
            }

            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>