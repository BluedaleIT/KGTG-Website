<?php include('admin/functions.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Klang The Guide - Healthcare</title>

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



  <main id="medicaltourism">



    <br>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4  my-5 d-flex  justify-content-center">

          <!-- <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link mt1" id="tab-1-link" href="#tab-1" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Healthcare</h4>
            </a>
          </li> -->
          <!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link mt2" id="tab-2-link" data-bs-toggle="tab" href="#tab-2" data-bs-target="#tab-2">
              <!-- <img src="assets/img/recommendation/3.png" class="img-fluid" alt=""> -->
              <h4>Traditional Chinese Medicine</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link mt3" id="tab-3-link" data-bs-toggle="tab" href="#tab-3" data-bs-target="#tab-3">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4>Healthcare Facilities</h4>
            </a>
          </li><!-- End Tab 3 Nav -->
<!-- 
          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link mt4" id="tab-4-link" data-bs-toggle="tab" href="#tab-4" data-bs-target="#tab-4">
              <h4>Ophthalmologist</h4>
            </a>
          </li> -->
          <!-- End Tab 3 Nav -->

        </ul>

        <div class="tab-content">


          <div class="tab-pane" id="tab-2">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Traditional Chinese Medicine</h3>


                </p>
              </div>

            </div>


            <?php

            $query = "SELECT * FROM healthcare WHERE healthcare_category='tcm'";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['healthcare_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['healthcare_content']) ?>
                    </p>
                    <p><b>Location :</b><a href=" <?php echo urldecode($row['healthcare_locationurl']) ?>"> <?php echo urldecode($row['healthcare_location']) ?></a>
                    </p>

                    <?php if ($row['healthcare_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['healthcare_hours'])); ?>
                      </p>
                    <?php } ?>
                    <?php if ($row['healthcare_website']) { ?>
                      <p><b>Website :</b><br>
                      <a href=" <?php echo urldecode($row['healthcare_website']) ?>"> <?php echo urldecode($row['healthcare_website']) ?></a>
                      </p>
                    <?php } ?>
                    <?php if ($row['healthcare_phone']) { ?>

                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>",$row['healthcare_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-1  text-center align-self-center">
                    <img src="assets/img/healthcare/tcm/<?php echo $row['healthcare_image'] ?>"
                      alt="<?php echo urldecode($row['healthcare_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['healthcare_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['healthcare_content']) ?>
                    </p>
                    <p><b>Location :</b><a href=" <?php echo urldecode($row['healthcare_locationurl']) ?>"> <?php echo urldecode($row['healthcare_location']) ?></a>
                    </p>
                    <?php if ($row['healthcare_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['healthcare_hours'])); ?>
                      </p>
                    <?php } ?>
                    <?php if ($row['healthcare_website']) { ?>
                      <p><b>Website :</b><br>
                      <a href=" <?php echo urldecode($row['healthcare_website']) ?>"> <?php echo urldecode($row['healthcare_website']) ?></a>
                      </p>
                    <?php } ?>
                    <?php if ($row['healthcare_phone']) { ?>
                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['healthcare_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                    <img src="assets/img/healthcare/tcm/<?php echo $row['healthcare_image'] ?>"
                      alt="<?php echo urldecode($row['healthcare_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php }
              ?>


            <?php
            $counter++;
            }
            ?>

          </div><!-- End Tab Content 2 -->
          <div class="tab-pane" id="tab-3">


            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Healthcare Facilities</h3>


                </p>
              </div>

              <?php

              $query = "SELECT * FROM healthcare WHERE healthcare_category='facility'  ";
              $result = mysqli_query($db, $query);
              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                if ($counter % 2 != 0) {
                  ?>
                  <div class="row gy-4 mb-5">

                    <div class="col-md-8 order-2 ">
                      <h3>
                        <?php echo urldecode($row['healthcare_title']) ?>
                      </h3>
                      <p>
                        <?php echo urldecode($row['healthcare_content']) ?>
                      </p>
                      <p><b>Location :</b><a href=" <?php echo urldecode($row['healthcare_locationurl']) ?>"> <?php echo urldecode($row['healthcare_location']) ?></a>
                      </p>

                      <?php if ($row['healthcare_hours']) { ?>
                        <p><b>Operation Hours :</b><br>
                          <?php echo str_replace("/", "<br>", urldecode($row['healthcare_hours'])); ?>
                        </p>
                      <?php } ?>
                      <?php if ($row['healthcare_phone']) { ?>

                        <p><b>Phone :</b><br>
                          <?php echo str_replace("/", "<br>", $row['healthcare_phone']); ?>
                        </p>
                      <?php } ?>

                    </div>
                    <div class="col-md-4 order-1  text-center align-self-center">
                      <img src="assets/img/healthcare/facility/<?php echo $row['healthcare_image'] ?>"
                        alt="<?php echo urldecode($row['healthcare_title']) ?>" class="img-fluid" loading="lazy">
                    </div>
                  </div>
                  <hr>
                <?php } else { ?>
                  <div class="row gy-4 mb-5">

                    <div class="col-md-8 order-md-1 order-2">
                      <h3>
                        <?php echo urldecode($row['healthcare_title']) ?>
                      </h3>
                      <p>
                        <?php echo urldecode($row['healthcare_content']) ?>
                      </p>
                      <p><b>Location :</b><a href=" <?php echo urldecode($row['healthcare_locationurl']) ?>"> <?php echo urldecode($row['healthcare_location']) ?></a>
                      </p>
                      <?php if ($row['healthcare_hours']) { ?>
                        <p><b>Operation Hours :</b><br>
                          <?php echo str_replace("/", "<br>", urldecode($row['healthcare_hours'])); ?>
                        </p>
                      <?php } ?>

                      <?php if ($row['healthcare_phone']) { ?>
                        <p><b>Phone :</b><br>
                          <?php echo str_replace("/", "<br>", $row['healthcare_phone']); ?>
                        </p>
                      <?php } ?>

                    </div>
                    <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                      <img src="assets/img/healthcare/facility/<?php echo $row['healthcare_image'] ?>"
                        alt="<?php echo urldecode($row['healthcare_title']) ?>" class="img-fluid" loading="lazy">
                    </div>
                  </div>
                  <hr>
                <?php }
                ?>


              <?php
              $counter++;
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