<?php include('admin/functions.php'); ?>
<?php
$query = "SELECT * FROM indexpage ";
$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_assoc($result)) {


  $hero_title = $row['hero_title'];
  $hero_title2 = $row['hero_title2'];
  $hero_subtitle = $row['hero_subtitle'];

  $tile1_title = $row['tile1_title'];
  $tile1_subtitle = $row['tile1_subtitle'];
  $tile1_photo1 = $row['tile1_photo1'];
  $tile1_photo2 = $row['tile1_photo2'];
  $tile1_photo3 = $row['tile1_photo3'];

  $tile2_title = $row['tile2_title'];
  $tile2_subtitle = $row['tile2_subtitle'];
  $tile2_photo1 = $row['tile2_photo1'];
  $tile2_photo2 = $row['tile2_photo2'];
  $tile2_photo3 = $row['tile2_photo3'];
  $tile2_photo4 = $row['tile2_photo4'];
  $tile2_photo5 = $row['tile2_photo5'];
  $tile2_photo6 = $row['tile2_photo6'];

  $tile3_title = $row['tile3_title'];
  $tile3_subtitle = $row['tile3_subtitle'];

  $tile4_title = $row['tile4_title'];
  $tile4_subtitle = $row['tile4_subtitle'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Klang The Guide</title>

  <meta name="description"
    content="">
  <meta content="" name="keywords">


  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:title" content="" />
  <meta property="og:description"
    content="" />
  <meta property="og:image" content="">

  <!-- Twitter -->
  <meta property="twitter:card" content="" />
  <meta property="twitter:url" content="" />
  <meta property="twitter:title" content="" />
  <meta property="twitter:description"
    content="" />
  <meta property="twitter:image" content="" />



  <?php include 'header.php'; ?>


</head>

<body>
  <?php include 'nav.php'; ?>




  <main id="index">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000"
      touch="true">

      <div class="carousel-inner">

        <?php

        $query = "SELECT * FROM banner ORDER BY banner_order ASC";
        $result = mysqli_query($db, $query);
        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) {
          if ($counter == 1) {
            echo '<div class="carousel-item active" style="">';
          } else {
            echo '<div class="carousel-item">';

          }
          if ($row['banner_url']) {

            echo '<a href="' . $row['banner_url'] . '">';
          }
          echo '<div class="container">';
          echo '<div class="row justify-content-center gy-6">';
          if ($row['banner_filename2']) {
            echo '<picture>';
            echo '<source media="(max-width:640px)" srcset="assets/img/banner/' . $row['banner_filename2'] . '" class="img-fluid" alt="' . $row['banner_name'] . '" >';
            echo '<img src="assets/img/banner/' . $row['banner_filename'] . '" alt="' . $row['banner_name'] . '" class="img-fluid" >';
            echo '</picture>';
          } else {
            echo '<picture>';
            echo '<source media="(max-width:640px)" srcset="assets/img/banner/' . $row['banner_filename'] . '" class="img-fluid object-fit-contain" style="min-height:236px" alt="' . $row['banner_name'] . '">';
            if ($counter == 1) {
              echo '<img src="assets/img/banner/' . $row['banner_filename'] . '" alt="' . $row['banner_name'] . '" class="img-fluid">';
            } else {
              echo '<img src="assets/img/banner/' . $row['banner_filename'] . '" alt="' . $row['banner_name'] . '" class="img-fluid" loading="lazy">';
  
            }
            echo '</picture>';
          }


          echo '</div>';
          echo '</div>';
          if ($row['banner_url']) {

            echo '</a>';
          }

          echo '</div>';

          $counter++;
        }
        ?>



      </div>

      <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators"></ol>

    </section><!-- End Hero Section -->




    <section id="hero-animated" class="hero-animated d-flex  justify-content-center w-100">

      <div class="row d-flex align-items-center w-100 justify-content-center align-self-center" id="overlay22">
        <!-- <div class="col-2 d-none d-lg-block justify-content-start" style="">
          <script async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3696733888071014"
            crossorigin="anonymous"></script>
          <ins class="adsbygoogle d-lg-block mx-auto" style="display:inline-block;width:150px;height:400px"
            data-ad-client="ca-pub-3696733888071014" data-ad-slot="2572826163"></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>

        </div> -->
        <div class="col-12 col-lg-12   d-flex flex-column justify-content-center align-items-center">

          <div
            class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <h2>Welcome to <span><br>Klang</span></h2>
            <p>Travel around to experience the remarkable treasures and the hidden gems in Klang.
            </p>




          </div>


        </div>
        <!-- <div class="col-2 d-none d-lg-block justify-content-end" style="">

          <script async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3696733888071014"
            crossorigin="anonymous"></script>
          <ins class="adsbygoogle d-lg-block mx-auto" style="display:inline-block;width:150px;height:400px"
            data-ad-client="ca-pub-3696733888071014" data-ad-slot="2572826163"></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div> -->

      </div>

    </section>


    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">
        <div class="section-header">
          <h2>
            <?php echo urldecode($tile1_title) ?>
          </h2>
          <p>
            <?php echo urldecode($tile1_subtitle) ?>
          </p>
        </div>
        <div class="row gy-4 justify-content-center">

          <div class="col-6 col-lg-6 col-md-6  d-flex bg-image" data-aos="zoom-out">
            <div class="service-item  position-relative d-flex align-items-center justify-content-center  ">
              <div class="icon"> <img src="assets/img/highlights/<?php echo urldecode($tile1_photo1) ?>" class="w-100 h-100"
                  alt=""></div>
              <a class="stretched-link" href="highlights.php#tab-2"></a>
              <h4 class="text-center text">Klang @ A Glance</h4>
              <!-- <p>KL @ A Glance</p> -->
            </div>
          </div><!-- End Service Item -->
          <div class="col-6 col-lg-6 col-md-6  d-flex" data-aos="zoom-out">
            <div class="service-item  position-relative d-flex align-items-center justify-content-center">

              <div class="icon"> <img src="assets/img/highlights/<?php echo urldecode($tile1_photo2) ?>" class="w-100 h-100"
                  alt=""></div>
                  <a class="stretched-link" href="highlights.php#tab-3"></a>
              <h4 class="text-center text">People Of Klang</h4>
              <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
          </div><!-- End Service Item -->



        </div>

      </div>
    </section><!-- End Featured Services Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 class="text-break">
            <?php echo urldecode($tile2_title) ?>
          </h2>
          <p>
            <?php echo urldecode($tile2_subtitle) ?>
          </p>
        </div>

        <div class="row gy-5 d-flex justify-content-center ">

          <div class="d-flex col-xl-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <a href="exploreklang.php" class="stretched-link">

                <div class="img">
                  <img src="assets/img/recommendation/<?php echo $tile2_photo1 ?>" class="img-fluid object-fit-cover"
                    alt="Explore Klang">
                </div>
                <div class="details position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                    <h3>Explore Klang</h3>
                    <div class="icon2">
                      <i class="bi bi-box-arrow-right"></i>
                    </div>
                  </div>

                  <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                      perferendis.</p> -->
                </div>
              </a>

            </div>
          </div><!-- End Service Item -->
          <div class="d-flex col-xl-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <a href="shoptildrop.php" class="stretched-link">

                <div class="img">
                  <img src="assets/img/recommendation/<?php echo $tile2_photo2 ?>" class="img-fluid object-fit-cover"
                    alt="Shop Til Drop">
                </div>
                <div class="details position-relative">

                  <div class="d-flex align-items-center justify-content-center">
                    <h3>Shop Til Drop</h3>
                    <div class="icon2">
                      <i class="bi bi-box-arrow-right"></i>
                    </div>
                  </div>
                  <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                      perferendis.</p> -->
                </div>
              </a>

            </div>
          </div><!-- End Service Item -->
          <div class="d-flex col-xl-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <a href="accommodation.php" class="stretched-link">

                <div class="img">
                  <img src="assets/img/recommendation/<?php echo $tile2_photo3 ?>" class="img-fluid object-fit-cover"
                    alt="Accommodation">
                </div>
                <div class="details position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                    <h3>Accommodation</h3>
                    <div class="icon2">
                      <i class="bi bi-box-arrow-right"></i>
                    </div>
                  </div>
                  <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                      perferendis.</p> -->
                </div>
              </a>

            </div>
          </div><!-- End Service Item -->
          <div class="d-flex col-xl-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <a href="healthcare.php" class="stretched-link">

                <div class="img">
                  <img src="assets/img/recommendation/<?php echo $tile2_photo4 ?>" class="img-fluid object-fit-cover"
                    alt="Healthcare">
                </div>
                <div class="details position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                    <h3>Healthcare</h3>
                    <div class="icon2">
                      <i class="bi bi-box-arrow-right"></i>
                    </div>
                  </div>
                  <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                      perferendis.</p> -->
                </div>
              </a>

            </div>
          </div><!-- End Service Item -->
          <div class="d-flex col-xl-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <a href="kampunglife.php" class="stretched-link">

                <div class="img">
                  <img src="assets/img/recommendation/<?php echo $tile2_photo5 ?>" class="img-fluid object-fit-cover"
                    alt="Kampung Life">
                </div>
                <div class="details position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                    <h3>Kampung Life</h3>
                    <div class="icon2">
                      <i class="bi bi-box-arrow-right"></i>
                    </div>
                  </div>
                  <!-- </a> -->
                  <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                      perferendis.</p> -->
                </div>
              </a>

            </div>
          </div><!-- End Service Item -->
          <div class="d-flex col-xl-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <a href="nearbyislands.php" class="stretched-link">

                <div class="img">
                  <img src="assets/img/recommendation/<?php echo $tile2_photo6 ?>" class="img-fluid object-fit-cover"
                    alt="Nearby Islands">
                </div>
                <div class="details position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                    <h3>Nearby Islands</h3>
                    <div class="icon2">
                      <i class="bi bi-box-arrow-right"></i>
                    </div>
                  </div>
                  <!-- </a> -->
                  <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                      perferendis.</p> -->
                </div>
              </a>

            </div>
          </div><!-- End Service Item -->


        </div>

      </div>
    </section><!-- End Services Section -->







    <!-- <div class="row d-flex justify-content-center btmbanner mt-4">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3696733888071014"
        crossorigin="anonymous"></script>
      <ins class="adsbygoogle" align="center" data-ad-client="ca-pub-3696733888071014" data-ad-slot="5212427798"
        data-ad-format="auto" data-full-width-responsive="true"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div> -->


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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- <script src="assets/js/index.js"></script> -->

</body>

</html>