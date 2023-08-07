<?php include('admin/functions.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Klang The Guide - Shop Til Drop</title>

  <meta name="description"
    content="Explore the best stores and local boutiques in KL, find out all there is to know about shopping, including shopping hotspots, shopping malls, shopping districts, shopping on your smartphone and more.">
  <meta content="" name="keywords">


  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.kltheguide.com.my/where-to-shop.php" />
  <meta property="og:title" content="KL The Guide - Places to Shop In KL" />
  <meta property="og:description"
    content="Explore the best stores and local boutiques in KL, find out all there is to know about shopping, including shopping hotspots, shopping malls, shopping districts, shopping on your smartphone and more." />
  <meta property="og:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.kltheguide.com.my/where-to-shop.php" />
  <meta property="twitter:title" content="KL The Guide - Places to Shop In KL" />
  <meta property="twitter:description"
    content="Explore the best stores and local boutiques in KL, find out all there is to know about shopping, including shopping hotspots, shopping malls, shopping districts, shopping on your smartphone and more." />
  <meta property="twitter:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg" />


  <?php include 'header.php'; ?>

</head>

<body>

  <?php include 'nav.php'; ?>



  <main id="medicaltourism">



    <br>


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 my-5 d-flex justify-content-center">



          <li class="nav-item  col-6 col-md-3 col-lg-3">
            <a class="nav-link acco2" id="tab-2-link" data-bs-toggle="tab" href="#tab-2" data-bs-target="#tab-2">
              <!-- <img src="assets/img/recommendation/3.png" class="img-fluid" alt=""> -->
              <h4>Shopping Malls</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link acco3" id="tab-3-link" data-bs-toggle="tab" href="#tab-3" data-bs-target="#tab-3">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4>Day Markets</h4>
            </a>
          </li><!-- End Tab 3 Nav -->
          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link acco3" id="tab-3-link" data-bs-toggle="tab" href="#tab-4" data-bs-target="#tab-4">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4>Night Markets</h4>
            </a>
          </li><!-- End Tab 3 Nav -->


        </ul>

        <div class="tab-content">



          <div class="tab-pane" id="tab-2">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Shopping Malls</h3>


                </p>
              </div>

            </div>


            <div class="row">



              <?php

              $query = "SELECT * FROM shop WHERE shop_category='mall'";
              $result = mysqli_query($db, $query);
              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {


                echo '<div class="col-12 col-lg-6 mb-3  ">';
                echo '  <div class="card h-100">';
                echo '    <div class="row h-100">';
                echo '      <div class="col-6">';
                echo '        <img class="card-img h-100 " src="assets/img/shop/mall/' . $row['shop_image'] . '" alt="' . urldecode($row['shop_title']) . '" loading="lazy">';
                echo '      </div>';
                echo '      <div class="col-6 " >';
                echo '        <div class="card-body ">';
                echo '          <h5 class="card-title">' . urldecode($row['shop_title']) . '</h5>';
                if ($row['shop_location']) {
                  echo '          <p class="card-text">Location: <a href="' . $row['shop_locationurl'] . '">' . urldecode($row['shop_location']) . '</a></p>';
                }
                if ($row['shop_hours']) {
                  echo '          <p class="card-text">Operating Hours: ' . $row['shop_hours'] . '</p>';
                }
                if ($row['shop_phone']) {
                  echo '          <p class="card-text">Contact Number: ' . $row['shop_phone'] . '</p>';
                }

                echo '        </div>';
                echo '      </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
              }
              ?>

            </div>

          </div><!-- End Tab Content 2 -->
          <div class="tab-pane" id="tab-3">


            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Day Market</h3>


                </p>
              </div>


            </div>
            <div class="row">



              <?php

              $query = "SELECT * FROM shop WHERE shop_category='daym'";
              $result = mysqli_query($db, $query);
              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {


                echo '<div class="col-12 col-lg-6 mb-3  ">';
                echo '  <div class="card h-100">';
                echo '    <div class="row h-100">';
                echo '      <div class="col-6">';
                echo '        <img class="card-img h-100 " src=assets/img/shop/daym/' . $row['shop_image'] . '" alt="' . urldecode($row['shop_title']) . '" loading="lazy">';
                echo '      </div>';
                echo '      <div class="col-6 " >';
                echo '        <div class="card-body ">';
                echo '          <h5 class="card-title">' . urldecode($row['shop_title']) . '</h5>';
                if ($row['shop_location']) {
                  echo '          <p class="card-text">Location: <a href="' . $row['shop_locationurl'] . '">' . urldecode($row['shop_location']) . '</a></p>';
                }
                if ($row['shop_hours']) {
                  echo '          <p class="card-text">Operating Hours: ' . $row['shop_hours'] . '</p>';
                }
                if ($row['shop_phone']) {
                  echo '          <p class="card-text">Contact Number: ' . $row['shop_phone'] . '</p>';
                }

                echo '        </div>';
                echo '      </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
              }
              ?>

            </div>

          </div>


          <div class="tab-pane" id="tab-4">


            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Night Market</h3>


                </p>
              </div>


            </div>
            <div class="row">



              <?php

              $query = "SELECT * FROM shop WHERE shop_category='nightm'";
              $result = mysqli_query($db, $query);
              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {


                echo '<div class="col-12 col-lg-6 mb-3  ">';
                echo '  <div class="card h-100">';
                echo '    <div class="row h-100">';
                echo '      <div class="col-6">';
                echo '        <img class="card-img h-100 " src="assets/img/shop/nightm/' . $row['shop_image'] . '" alt="' . urldecode($row['shop_title']) . '" loading="lazy">';
                echo '      </div>';
                echo '      <div class="col-6 " >';
                echo '        <div class="card-body ">';
                echo '          <h5 class="card-title">' . urldecode($row['shop_title']) . '</h5>';
                if ($row['shop_location']) {
                  echo '          <p class="card-text">Location: <a href="' . $row['shop_locationurl'] . '">' . urldecode($row['shop_location']) . '</a></p>';
                }
                if ($row['shop_hours']) {
                  echo '          <p class="card-text">Operating Hours: ' . $row['shop_hours'] . '</p>';
                }
                if ($row['shop_phone']) {
                  echo '          <p class="card-text">Contact Number: ' . $row['shop_phone'] . '</p>';
                }

                echo '        </div>';
                echo '      </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
              }
              ?>

            </div>

          </div>



    </section><!-- End Features Section -->





  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function () {

      $(window.location.hash).addClass('active show');

      $(window.location.hash + "-link").addClass('active show');


    });
  </script>
</body>

</html>