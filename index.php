<?php
include "includes/head.php"
?>

<body>
  <!----------------         carousel                     --------->


  <?php
  session_start();
  include "includes/header.php";
  ?>
  <div class="container-fluid ">

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/carousel1.jpg" class="d-block w-100 `" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/carousel2.jpg" class="d-block w-100 `" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/carousel3.jpg" class="d-block w-100 `" alt="...">
        </div>
        <div class="carousel-item">
          <img src=" images/carousel4.jpg" class="d-block w-100 `" alt="...">
        </div>
        <div class="carousel-item">
          <img src=" images/carousel5.jpg" class="d-block w-100 ` " alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



    <!----------------       end of carousel                     --------->

    <!-- categories-->

    <h2 style="margin-top: 10px;">Categories : </h2>

    <div class="row" id="cards">
      <div class="col-sm-4">
        <div class="card border border-warning">
          <div class="card-body">
            <img src="images/macine.png" style="width: 25rem;" class="d-block " alt="...">
            <h5 class="card-title">Medicine</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="search.php?cat=medicine" class="btn btn-success">Go to Medicine</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card border border-warning">
          <div class="card-body">
            <img src="images/macine.png" style="width: 25rem;" class="d-block " alt="...">
            <h5 class="card-title">self care </h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="search.php?cat=self-care" class="btn btn-success">Go self care </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card border border-warning">
          <div class="card-body">

            <img src="images/macine.png" style="width: 25rem;" class="d-block " alt="...">
            <h5 class="card-title">machines</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="search.php?cat=machine" class="btn btn-success">Go machines</a>
          </div>
        </div>
      </div>
    </div>
    <!-- end of categories-->


    <!----------------         products might you like                     --------->

    <h2 style="margin-top: 10px;">Products you might like : </h2>

    <div class="row">
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
        if ($i == 7) {
          break;
        }
      }
      ?>
    </div>

    <!----------------        end of products might you like                     --------->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>

</html>