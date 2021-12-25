<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=stylesheet href="index.css">
  <title>PharmEasy</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <?php
  session_start();
  include "includes/header.php";
  echo $_SESSION['user_id'];
  
  ?>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src=" https://cms-contents.pharmeasy.in/banner/80bea445ee2-Ease_Dweb.jpg?dim=1440x0&dpr=1&q=100" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cms-contents.pharmeasy.in/banner/bda89250126-PL_Diab_Sli_Dweb.jpg?dim=1440x0&dpr=1&q=100" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cms-contents.pharmeasy.in/banner/afc7a916c23-02.jpg?dim=1440x0&dpr=1&q=100" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src=" https://cms-contents.pharmeasy.in/banner/0ff77f182b8-UPDATEDKBCDWEB.jpg?dim=1440x0&dpr=1&q=100" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src=" https://cms-contents.pharmeasy.in/banner/2faf6dffb96-YES2021PLUSDWEB.jpg?dim=1440x0&dpr=1&q=100" class="d-block w-100" alt="...">
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
  <!-- CARDS CATALOG-->
  <div class="row" id="cards">
    <div class="col-sm-4">
      <div class="card border border-warning">
        <div class="card-body">

          <img src="dettol.jpg" id="covid" class="d-block w-100" alt="...">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4" id="cards">
      <div class="card border border-warning">
        <div class="card-body">

          <!-- <h5 class="card-title">Special title treatment</h5> -->
          <img src="dettol.jpg" id="covid" class="d-block w-100" alt="...">
          <h5>dettol</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4" id="cards">
      <div class="card border border-warning">
        <div class="card-body">

          <img src="dettol.jpg" id="covid" class="d-block w-100" alt="...">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <div class="catogary">
    <h2 class="product" style="background-color: rgb(104, 230, 110); height: 60px;">Categories of
      Products</h2>
  </div>
  <!----------------         CATAGORIES OF PRODUCTS                     --------->
  <div class="row">
    <div class="col-sm-2" id="cards">
      <div class="card border border-warning">
        <div class="card-body">
          <!-- <h5 class="card-title">Special title treatment</h5> -->
          <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
          <img src="data:image/jpeg;base64,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" id="product">
          <h3 class="card-text">BD Ultra-Fine</h3>
          <a href="#" class="btn btn-success">Go somewhere</a>

        </div>
      </div>
    </div>
    <div class="col-sm-2" id="cards">
      <div class="card ">
        <div class="card-body">
          <!-- <h5 class="card-title">Special title treatment</h5> -->
          <img src="https://cdn01.pharmeasy.in/dam/products_otc/021870/b-d-ultra-fine-ill-nano-pen-needles-4mm-32g-15-1-1636552702.jpg?dim=224x0&dpr=1&q=100 " id="product" alt="...">
          <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
          <h3 class="card-text">BD Ultra-Fine</h3>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-2" id="cards">
      <div class="card border border-warning">
        <div class="card-body">
          <!-- <h5 class="card-title">Special title treatment</h5> -->
          <img src="https://th.bing.com/th/id/OIP.yQmp9wXYSzbTNyRFXkdGzwHaHa?w=197&h=197&c=7&r=0&o=5&pid=1.7 " id="product" alt="...">
          <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
          <h3 class="card-text">Alfalfa Tonic</h3>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-2" id="cards">
      <div class="card border border-warning">
        <div class="card-body">
          <!-- <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
          <img src="https://cdn01.pharmeasy.in/dam/products_otc/264323/b-protin-chocolate-nutrition-supplement-bottle-of-500-g-2-1632775063.jpg?dim=224x0&dpr=1&q=100" id="product" alt="...">
          <h3 class="card-text">B-Protien</h3>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-2" id="cards">
      <div class="card border border-warning">
        <div class="card-body">
          <!-- <h5 class="card-title">Special title treatment</h5> -->
          <img src=" https://cdn01.pharmeasy.in/dam/products_otc/270551/revital-h-health-supplement-capsules-strip-of-10-2-1637510924.jpg?dim=224x0&dpr=1&q=100" id="product" alt="...">
          <h3 class="card-text">REVITAL-H</h3>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-2" id="cards">
      <div class="card border border-warning">
        <div class="card-body">
          <!-- <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
          <img src="https://cdn01.pharmeasy.in/dam/products_otc/O37006/cetaphil-baby-diaper-cream-70g-1-1632777031.jpg?dim=224x0&dpr=1&q=100">
          <h3 class="card-text">Catephil</h3>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <div class="catogary">


    <h2 style="background-color: rgb(104, 230, 110); height: 60px;" id="heading">Product Offers<img src="discount.png">
    </h2>

  </div>
  <!-- ---------------------  this div  for PRODUCT OFFERS ----------------------   -->
  <div class="row">
    <div class="card" style="width:10rem; height: 10rem;">
      <!-- <img src=" https://cms-contents.pharmeasy.in/offer/7412a494160-11.jpg?dim=60x0&dpr=1&q=100" class="card-img-top" alt="..."> -->
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="#" class="btn btn-success  ">Go </a>
      </div>
    </div>
    <div class="card" style="width: 10rem;">
      <img src=" https://cms-contents.pharmeasy.in/offer/7412a494160-11.jpg?dim=60x0&dpr=1&q=100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="#" class="btn btn-success  ">Go </a>
      </div>
    </div>
    <div class="card" style="width: 10rem;">
      <img src=" https://cms-contents.pharmeasy.in/offer/7412a494160-11.jpg?dim=60x0&dpr=1&q=100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="#" class="btn btn-success  ">Go </a>
      </div>
    </div>
    <div class="card" style="width: 10rem;">
      <img src=" https://cms-contents.pharmeasy.in/offer/7412a494160-11.jpg?dim=60x0&dpr=1&q=100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="#" class="btn btn-success  ">Go </a>
      </div>
    </div>
    <div class="card" style="width: 10rem;">
      <img src=" https://cms-contents.pharmeasy.in/offer/7412a494160-11.jpg?dim=60x0&dpr=1&q=100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="#" class="btn btn-success  ">Go </a>
      </div>
    </div>
    <div class="card" style="width: 10rem;">
      <img src=" https://cms-contents.pharmeasy.in/offer/7412a494160-11.jpg?dim=60x0&dpr=1&q=100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="#" class="btn btn-success  ">Go </a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>

</html>