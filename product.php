<!doctype html>
<html lang="en">

<?php
include "includes/head.php";
include "includes/header.php";


?>

<body>
  <?php
  session_start()
  ?>




  <h4 style="margin-left: 20px;">product:Dettol</h4>
  <p style="margin-left: 20px;">Dettol Liquid Disinfectant for Floor Cleaner, Surface Disinfection , Personal Hygiene (Lime Fresh , 1L)</p>
  <h1 class="border border-1" style="width: 100%;"> </h1>
  <!-- <img src="http://127.0.0.1:5500/dettol.jpg" class="card-img-top" alt="..." style="width: 200px;"> -->
  <!-- <div class="card border border-success" style="width: 16rem;">  -->


  <div class="buy-product">

    <img src="50-percent.png" style="padding-left:30px;">
    <img src="dettttol.png" class="card-img-top" alt="..." style="width: 250px;">

  </div>

  <!-- <div class="card " style="width: 16rem;">  -->

  <!-- <div class="card-body">
      <h5 class="card-title"> Dettol</h5>
      <p class="card-text">
          M.R.P:330<br>
          End in 13h 05min 21s<br>
          You Save:RS-100(30%)<br>
      </p>
      <a href="#" class="btn btn-primary" >buy</a>
    </div>
  </div> -->

  <div class="details" style="padding-left: 50px;">
    <p class="card-text">
      M.R.P:330<br>
      End in 13h 05min 21s<br>
      You Save:RS-100(30%) <br>
      Rating (5)
      <img src="ratings.png" style="width: 80px;"><br>
      <button class="btn btn-success">Add to Cart</button>
    </p>
    <form>
      <div class="mb-3 ">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control  border border-success " placeholder=" Enter Your Email" styel="width:30px" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Enter Name</label>
        <input type=" name" placeholder="Enter Your Name" class="form-control  border border-success" id="exampleInputPassword1">
      </div>
      <!-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input type="Last Name" placeholder=" Last Name" class="form-control  border border-success" id="exampleInputEmail1" aria-describedby="emailHelp">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone Number</label>
        <input type=" Phone Number" placeholder="Phone Number" class="form-control  border border-success" id="exampleInputPassword1">
      </div>

      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Open this to select state</option>
        <option value="1"> karnataka </option>
        <option value="2"> AndhraPerdesh</option>
        <option value="3">Gujarat </option>
        <option value="3"> Haryana</option>
        <option value="1"> Jharkhand</option>
        <option value="2"> AndhraPerdesh</option>
        <option value="3"> Assam </option>
        <option value="3"> Chhattisgarh</option>

      </select>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> Address</label>
        <input type="Address" placeholder="Address" class="form-control  border border-success" id="exampleInputPassword1">
      </div>
      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Address Type</option>
        <option value="1">Home(7am-9pm delivery)</option>
        <option value="2">Office/commercial(10AM-6PM delivery)</option>

      </select>
      <button type="button" class="btn btn-lg btn-primary" style="width: 40%; height: 30px; padding-bottom: 40px; margin-left: 100px; margin-top: 20px;">Buy Now</button>
      <h1> congratulation</h1>
    </form>
    <!-- <a href="#" class="btn btn-primary" >buy</a> -->
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>