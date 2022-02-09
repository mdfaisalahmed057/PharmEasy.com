<?php
include "includes/head.php"
?>

<body>
  <!----------------         carousel                     --------->

  <?php

  include "includes/header.php";
  ?>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/carousel2.jpg" class="d-block w-100" style="height: 270px;">
      </div>
      <div class="carousel-item">
        <img src="images/carousel3.jpg" class="d-block w-100" style="height: 270px;">
      </div>
      <div class="carousel-item">
        <img src="images/carousel4.jpg" class="d-block w-100" style="height: 270px;">
      </div>
      <div class="carousel-item">
        <img src="images/carousel5.jpg" class="d-block w-100" style="height: 270px;">
      </div>
      <div class="carousel-item">
        <img src="images/carousel1.jpg" class="d-block w-100" style="height: 270px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!----------------       end of carousel                     --------->
  <div class="container-fluid ">

    <!-- categories-->

    <div class="row" id="cards">
      <div class="col-sm-3" id="cards">
        <div class="card " style="background-color: AntiqueWhite; height: 70%;">
          <div class="card-body">
            <strong style="background-color:  LightSteelBlue; color: white ; ;">&nbsp;UPTO 50% OFF&nbsp;</strong>
            <strong>
              <h5 style="font-weight:bold; color: rgb(104, 97, 97);"> Medicine Products</h5>
            </strong>
            <img src="images/midicin.jpg" style="width:150.4px ; height:225px ;" class="d-block " alt="...">
            <br>
            <a href="search.php?cat=medicine"> <button class="rounded-2" style="background-color: LightSalmon;
           color: white; font-weight: bold; border-color: LightSalmon;margin:10px;">Go To Medicine Products</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3" id="cards">
        <div class="card " style="background-color: rgb(93, 179, 207) ;height: 70%; ">
          <div class="card-body">
            <strong style="background-color:  SlateGray ; color: white ; ;">&nbsp;UPTO 35% OFF&nbsp;</strong>
            <strong>
              <h5 style="font-weight:bold; color: rgb(104, 97, 97);"> Self care Products</h5>
            </strong>
            <img src="images/self-care.jpg" style=" height:200px ;">
            <br><br><br>
            <a href="search.php?cat=self-care"> <button class="rounded-2" style="background-color: SteelBlue;
           color: white; font-weight: bold; border-color: PowderBlue;margin:10px;">Go To Self Care</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3" id="cards">
        <div class="card " style="background-color: rgb(81, 211, 216);height: 70%; ">
          <div class="card-body">
            <strong style="background-color:  LightSlateGrey; color: white ; ;">&nbsp;UPTO 70% OFF&nbsp;</strong>
            <strong>
              <h5 style="font-weight:bold; color: rgb(104, 97, 97);">Machine Products</h5>
            </strong>
            <img src="images/machine.jpg" style="width:120.4px ; height:200px ;"><br>
            <br> <br>
            <a href="search.php?cat=machine"> <button class="rounded-2" style="background-color: LightSlateGrey;
           color: white; font-weight: bold; border-color: LightSlateGrey;margin:10px;">Go To Machines</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3" id="cards">
        <div class="card " style="background-color: AntiqueWhite; height: 70%;">
          <div class="card-body">
            <br>
            <h5 style="font-weight:bold; color: rgb(104, 97, 97);">Our Stores</h5>
            </strong>
            <img src="images/stores.jpeg" style="width:150.4px ; height:200px ;"><br>
            <br> <br>
            <a href="https://www.google.com/maps/search/PharmEasy/@12.9384323,77.5652432,12z/data=!3m1!4b1"> <button class="rounded-2" style="background-color: #00b9e1;
           color: white; font-weight: bold; border-color: #00b9e1;margin:10px;">Check The Locations</button></a>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row" id="cards">
      <div class="col-sm-4">
        <div class="card border border-warning">
          <div class="card-body">
            <img src="images/Medicine.png" style="width:305.4px ; height:305px ;" class="d-block " alt="...">
            <h5 class="card-title">Medicine</h5>
            <p class="card-text">All products that belongs to Medicine .</p>
            <a href="search.php?cat=medicine" class="btn btn-success">Go to Medicine</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card border border-warning">
          <div class="card-body">
            <img src="images/self-care.png" style="width:305.4px ; height:305px ;" class="d-block " alt="...">
            <h5 class="card-title">self care </h5>
            <p class="card-text">All products that belongs to Self care .</p>
            <a href="search.php?cat=self-care" class="btn btn-success">Go self care </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card border border-warning">
          <div class="card-body">

            <img src="images/machine.png" style="width:305.4px ; height:305px ;" class="d-block " alt="...">
            <h5 class="card-title">machines</h5>
            <p class="card-text">All products that belongs to Machine .</p>
            <a href="search.php?cat=machine" class="btn btn-success">Go machines</a>
          </div>
        </div>
      </div>
    </div> -->
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
            <img src="images/<?php echo $data[$i]['item_image'] ?>" class="card-img-top" style="width:305.3px ; height:305px ;">
            <div class="card-body">
              <h5 class="card-title"><?php echo $data[$i]['item_title'] ?></h5>
              <br>
              <strong>
                <h3 style="color :#82E0AA;" class="card-text"> ₹<?php echo $data[$i]['item_price'] ?></h3>
              </strong>
              <br>
              <small class="text-muted" style="font-weight: bold;">Brand Name: <?php echo $data[$i]['item_brand'] ?></small><br><br>
              <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>" class="btn btn-outline-info">More details</a>

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
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4" style="padding-left: 20px;">
          <img src="https://assets.pharmeasy.in/web-assets/dist/4d2f7c48.svg">
          <h1 style="color:  rgb(47,79,79); font-weight: bold;"> 18 MILLION </h1>
          <h5 style="color:  rgb(47,79,79);">Registr User As Of Now 31 June 2021</h5>

        </div>
        <div class="col-sm-4" style="padding-left: 40px; border-bottom-right-radius: 2px;">
          <img src="https://assets.pharmeasy.in/web-assets/dist/92c372bb.svg">
          <h1 style="color:  rgb(47,79,79); font-weight: bold;"> 8.8 MILLION </h1>
          <h5 style="color:  rgb(47,79,79);">PharmEasy Order As Of FY21</h5>
        </div>
        <div class="col-sm-4" style="padding-left: 60px;">
          <img src="https://assets.pharmeasy.in/web-assets/dist/773ae9c5.svg">
          <h1 style="color:  rgb(47,79,79); font-weight: bold;"> 50k+ </h1>
          <h5 style="color:  rgb(47,79,79);">SKUs Sold in Q1FY21</h5>
        </div>
      </div>
    </div>
    <h1 class="border border-2" style="width: 100%;"> </h1>
  </div>
  <!-- FOOTER -->
  <?php
  include "includes/footer.php"
  ?>
</body>

</html>