<?php include('admin/functions.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Klang The Guide - Nearby Islands</title>

  <meta name="description"
    content="Beyond KL is the best KL guide for discovering the city beyond KL's everyday destinations.">
  <meta content="" name="keywords">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.kltheguide.com.my/beyondkl.php" />
  <meta property="og:title" content="KL The Guide - Beyond KL" />
  <meta property="og:description"
    content="Beyond KL is the best KL guide for discovering the city beyond KL's everyday destinations." />
  <meta property="og:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.kltheguide.com.my/beyondkl.php" />
  <meta property="twitter:title" content="KL The Guide - Beyond KL" />
  <meta property="twitter:description"
    content="Beyond KL is the best KL guide for discovering the city beyond KL's everyday destinations." />
  <meta property="twitter:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg" />



  <?php include 'header.php'; ?>

</head>

<body>

  <?php include 'nav.php'; ?>



  <main id="beyondkl">



    <br>

    <!-- ======= About Section ======= -->
    <section id="explorekl" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-5" style="margin-bottom:0px;">
          <h2>Map of Islands</h2>
          <!-- <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas
            asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p> -->
        </div>
        <div class="row " data-aos="fade-up" data-aos-delay="200">

          <div class="col-12 mx-auto  justify-content-center align-items-center " style="max-height:300px"  >

            <!-- <img src="assets/img/kampunglife/map/map.png" class="img-fluid" alt=""> -->
            <a href="assets/img/islands/map/map.png" class="glightbox ">
              <img src="assets/img/islands/map/map.png" class="img-fluid d-flex justify-content-center align-items-center mx-auto" style="object-fit: cover;max-width:300px" alt="">
            </a>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" >

        <ul class="nav nav-tabs row gy-4  my-5 d-flex justify-content-center">

          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link beyond1" id="tab-1-link" href="#tab-1" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4 class="text-center">Pulau Ketam</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link beyond2" id="tab-2-link" data-bs-toggle="tab" href="#tab-2" data-bs-target="#tab-2">
              <h4 class="text-center">Pulau Indah</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <!-- <li class="nav-item col-4 col-lg">
            <a class="nav-link beyond3" id="tab-3-link" data-bs-toggle="tab" href="#tab-3" data-bs-target="#tab-3">
              <h4 class="text-center">Waterfall</h4>
            </a>
          </li> -->
          <!-- End Tab 3 Nav -->

          <!-- <li class="nav-item col-4 col-lg">
            <a class="nav-link beyond4" id="tab-4-link" data-bs-toggle="tab" href="#tab-4" data-bs-target="#tab-4">
              <h4 class="text-center">Hiking</h4>
            </a>
          </li> -->
          <!-- End Tab 4 Nav -->

          <!-- <li class="nav-item col-4 col-lg">
            <a class="nav-link beyond5" id="tab-5-link" data-bs-toggle="tab" href="#tab-5" data-bs-target="#tab-5">
              <h4 class="text-center">Extreme Sports</h4>
            </a>
          </li> -->
          <!-- End Tab 5 Nav -->
        </ul>

        <div class="tab-content">

          <div class="tab-pane" id="tab-1">

          <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Pulau Ketam</h3>

                </p>
              </div>


              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2  d-flex justify-content-center active" data-bs-toggle="pill"
                          href="#tabe1">Must Visits Spots</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabe2">Grab A Bite</a></li>

                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="tabe1">
                        <div class="row">



                          <?php

                          $query = "SELECT * FROM islands WHERE islands_category='ketam-mv'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {


                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img " src="assets/img/explorekl/islands/' . $row['islands_image'] . '" alt="' . $row['islands_title'] . '" loading="lazy" >';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100">';
                            echo '          <h5 class="card-title">' . urldecode($row['islands_title']) . '</h5>';
                            if ($row['islands_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['islands_locationurl'] . '">' . urldecode($row['islands_location']) . '</a></p>';
                            }
                            if ($row['islands_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['islands_hours']) . '</p>';
                            }
                            if ($row['islands_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['islands_phone'] . '</p>';
                            }
                            if ($row['islands_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['islands_website'] . '">' . $row['islands_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>



                      </div><!-- End Tab 1 Content -->

                      <div class="tab-pane fade show" id="tabe2">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM islands WHERE islands_category='ketam-res'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img  " src="assets/img/explorekl/islands/' . $row['islands_image'] . '" alt="' . $row['islands_title'] . '" loading="lazy">';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100 ">';
                            echo '          <h5 class="card-title">' . urldecode($row['islands_title']) . '</h5>';
                            if ($row['islands_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['islands_locationurl'] . '">' . urldecode($row['islands_location']) . '</a></p>';
                            }
                            if ($row['islands_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['islands_hours']) . '</p>';
                            }
                            if ($row['islands_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['islands_phone'] . '</p>';
                            }
                            if ($row['islands_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['islands_website'] . '">' . $row['islands_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 2 Content -->



                    </div>

                  </div>

                </div>

              </div>


            </div>

          </div><!-- End Tab Content 1 -->



          <div class="tab-pane" id="tab-2">

          <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Pulau Indah</h3>

                </p>
              </div>


              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2  d-flex justify-content-center active" data-bs-toggle="pill"
                          href="#tabf1">Must Visits Spots</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabf2">Grab A Bite</a></li>

                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="tabf1">
                        <div class="row">



                          <?php

                          $query = "SELECT * FROM islands WHERE islands_category='indah-mv'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {


                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img " src="assets/img/explorekl/islands/' . $row['islands_image'] . '" alt="' . $row['islands_title'] . '" loading="lazy" >';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100">';
                            echo '          <h5 class="card-title">' . urldecode($row['islands_title']) . '</h5>';
                            if ($row['islands_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['islands_locationurl'] . '">' . urldecode($row['islands_location']) . '</a></p>';
                            }
                            if ($row['islands_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['islands_hours']) . '</p>';
                            }
                            if ($row['islands_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['islands_phone'] . '</p>';
                            }
                            if ($row['islands_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['islands_website'] . '">' . $row['islands_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>



                      </div><!-- End Tab 1 Content -->

                      <div class="tab-pane fade show" id="tabf2">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM islands WHERE islands_category='indah-res'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img  " src="assets/img/explorekl/islands/' . $row['islands_image'] . '" alt="' . $row['islands_title'] . '" loading="lazy">';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100 ">';
                            echo '          <h5 class="card-title">' . urldecode($row['islands_title']) . '</h5>';
                            if ($row['islands_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['islands_locationurl'] . '">' . urldecode($row['islands_location']) . '</a></p>';
                            }
                            if ($row['islands_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['islands_hours']) . '</p>';
                            }
                            if ($row['islands_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['islands_phone'] . '</p>';
                            }
                            if ($row['islands_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['islands_website'] . '">' . $row['islands_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 2 Content -->



                    </div>

                  </div>

                </div>

              </div>


            </div>

          </div><!-- End Tab Content 2 -->


  



 




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
    window.addEventListener(
      "hashchange",
      () => {
        let text = window.location.hash;
        let result = text.includes("tab");
        if (result) {

          location.reload()

          //  block of code to be executed if the condition is true
        }
      },
      false
    );
  </script>
</body>

</html>