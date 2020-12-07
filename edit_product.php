<?php
  $page = 'profile';
  include('assets/layouts/header2.php');
?>

  <main id="main">

    <div class="container">
      <h1 class="text-center py-4">
        Profile
      </h1>
    </div>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-10">
            <a href="#"><img class="card-img-top" src="assets/img/farm_produce_0.1.png" alt="Farm produce"></a>
            <div class="card-body">
              <h4 class="card-title">
                Name of product
                <!-- <a href="#">Project One</a> -->
              </h4>
              <p class="card-text"><strong>Seller's name:</strong> John Doe</p>
              <p class="card-text"><strong>Location:</strong> Accra</p>
              <p class="card-text"><strong>Product description:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
              <p class="card-text"><strong>Available:</strong> Now</p>
              <p class="card-text"><strong>Quantity:</strong> 10 sacs</p>
              <!-- <p class="card-text text-center">Farm produce</p> -->
            </div>
          </div>
        </div>

      <!-- /.row -->
    <!-- /.container -->

  </main><!-- End #main -->

<?php
  include('assets/layouts/footer.php');
?>