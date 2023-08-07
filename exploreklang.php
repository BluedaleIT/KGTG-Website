<?php include('admin/functions.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Klang The Guide - Explore Klang</title>

  <meta name="description"
    content="This page contains the menu for navigating to the various sights, activities and locations throughout Kuala Lumpur">
  <meta content="" name="keywords">


  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.kltheguide.com.my/explorekl.php" />
  <meta property="og:title" content="KL The Guide - Explore KL" />
  <meta property="og:description"
    content="This page contains the menu for navigating to the various sights, activities and locations throughout Kuala Lumpur" />
  <meta property="og:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.kltheguide.com.my/explorekl.php" />
  <meta property="twitter:title" content="KL The Guide - Explore KL" />
  <meta property="twitter:description"
    content="This page contains the menu for navigating to the various sights, activities and locations throughout Kuala Lumpur" />
  <meta property="twitter:image" content="assets/img/kltgseo.jpg" />


  <?php include 'header.php'; ?>

</head>

<body>

  <?php include 'nav.php'; ?>



  <main id="exploreklbody">



    <br>


    <!-- ======= Features Section ======= -->
    <section id="explorekl" class="features">

      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4  my-5 d-flex justify-content-center">

          <li class="nav-item col-4 col-md-3 col-lg">
            <a class="nav-link explorekl3" id="tab-3-link" data-bs-toggle="tab" href="#tab-3" data-bs-target="#tab-3">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">Places Of Worship</h4>
            </a>
          </li><!-- End Tab 3 Nav -->


          <li class="nav-item col-4 col-md-3 col-lg">
            <a class="nav-link explorekl7" id="tab-7-link" data-bs-toggle="tab" href="#tab-7" data-bs-target="#tab-7">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle text-break">Sightseeing</h4>
            </a>
          </li><!-- End Tab 6 Nav -->


          <li class="nav-item col-4 col-md-3 col-lg">
            <a class="nav-link explorekl6" id="tab-6-link" data-bs-toggle="tab" href="#tab-6" data-bs-target="#tab-6">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">Event With Royals</h4>
            </a>
          </li><!-- End Tab 6 Nav -->


          <li class="nav-item col-4 col-md-3 col-lg">
            <a class="nav-link explorekl4" id="tab-4-link" data-bs-toggle="tab" href="#tab-4" data-bs-target="#tab-4">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">Sports</h4>
            </a>
          </li><!-- End Tab 4 Nav -->



          <li class="nav-item col-4 col-md-3 col-lg">
            <a class="nav-link explorekl5" id="tab-5-link" data-bs-toggle="tab" href="#tab-5" data-bs-target="#tab-5">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">Makan-Makan</h4>
            </a>
          </li><!-- End Tab 5 Nav -->










        </ul>

        <div class="tab-content">





          <div class="tab-pane" id="tab-3">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Place Of Worship</h3>

                </p>
              </div>

              <!-- ======= About Section ======= -->
              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2  d-flex justify-content-center active" data-bs-toggle="pill"
                          href="#tabc1">Muslim</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabc2">Buddhist/Tao</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabc3">Hindu</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabc4">Others</a></li>

                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="tabc1">
                        <div class="row">



                          <?php

                          $query = "SELECT * FROM pwor WHERE pwor_category='muslim'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {


                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-12 col-md-6">';
                            echo '        <img class="card-img object-fit-cover h-100" src="assets/img/pwor/muslim/' . $row['pwor_image'] . '" alt="' . $row['pwor_title'] . '" loading="lazy" >';
                            echo '      </div>';
                            echo '      <div class="col-12 col-md-6" >';
                            echo '        <div class="card-body h-100">';
                            echo '          <h5 class="card-title">' . urldecode($row['pwor_title']) . '</h5>';
                            if ($row['pwor_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['pwor_locationurl'] . '">' . urldecode($row['pwor_location']) . '</a></p>';
                            }
                            if ($row['pwor_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['pwor_hours']) . '</p>';
                            }
                            if ($row['pwor_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['pwor_phone'] . '</p>';
                            }
                            if ($row['pwor_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['pwor_website'] . '">' . $row['pwor_website'] . '</a></p>';
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

                      <div class="tab-pane fade show" id="tabc2">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM pwor WHERE pwor_category='tao'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {


                            echo '<div class="col-12 col-lg-12 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-12 col-md-6">';
                            echo '        <img class="card-img object-fit-cover h-100" src="assets/img/pwor/tao/' . $row['pwor_image'] . '" alt="' . $row['pwor_title'] . '" loading="lazy" >';
                            echo '      </div>';
                            echo '      <div class="col-12 col-md-6" >';
                            echo '        <div class="card-body h-100">';
                            echo '          <h5 class="card-title">' . urldecode($row['pwor_title']) . '</h5>';
                            if ($row['pwor_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['pwor_locationurl'] . '">' . urldecode($row['pwor_location']) . '</a></p>';
                            }
                            if ($row['pwor_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['pwor_hours']) . '</p>';
                            }
                            if ($row['pwor_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['pwor_phone'] . '</p>';
                            }
                            if ($row['pwor_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['pwor_website'] . '">' . $row['pwor_website'] . '</a></p>';
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

                      <div class="tab-pane fade show" id="tabc3">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM pwor WHERE pwor_category='hindu'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {


                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-12 col-md-6">';
                            echo '        <img class="card-img object-fit-cover h-100" src="assets/img/pwor/hindu/' . $row['pwor_image'] . '" alt="' . $row['pwor_title'] . '" loading="lazy" >';
                            echo '      </div>';
                            echo '      <div class="col-12 col-md-6" >';
                            echo '        <div class="card-body h-100">';
                            echo '          <h5 class="card-title">' . urldecode($row['pwor_title']) . '</h5>';
                            if ($row['pwor_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['pwor_locationurl'] . '">' . urldecode($row['pwor_location']) . '</a></p>';
                            }
                            if ($row['pwor_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['pwor_hours']) . '</p>';
                            }
                            if ($row['pwor_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['pwor_phone'] . '</p>';
                            }
                            if ($row['pwor_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['pwor_website'] . '">' . $row['pwor_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 3 Content -->

                      <div class="tab-pane fade show" id="tabc4">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM pwor WHERE pwor_category='others'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {


                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-12 col-md-6">';
                            echo '        <img class="card-img object-fit-cover h-100" src="assets/img/pwor/others/' . $row['pwor_image'] . '" alt="' . $row['pwor_title'] . '" loading="lazy" >';
                            echo '      </div>';
                            echo '      <div class="col-12 col-md-6" >';
                            echo '        <div class="card-body h-100">';
                            echo '          <h5 class="card-title">' . urldecode($row['pwor_title']) . '</h5>';
                            if ($row['pwor_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['pwor_locationurl'] . '">' . urldecode($row['pwor_location']) . '</a></p>';
                            }
                            if ($row['pwor_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['pwor_hours']) . '</p>';
                            }
                            if ($row['pwor_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['pwor_phone'] . '</p>';
                            }
                            if ($row['pwor_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['pwor_website'] . '">' . $row['pwor_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 3 Content -->

                    </div>

                  </div>

                </div>

              </div>


            </div>


          </div><!-- End Tab Content 3 places of worship -->



          <div class="tab-pane" id="tab-4">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Sports</h3>


                </p>
              </div>


            </div>
            <div class="row">



              <?php

              $query = "SELECT * FROM sports ";
              $result = mysqli_query($db, $query);
              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {


                echo '<div class="col-12 col-lg-6 mb-3  ">';
                echo '  <div class="card h-100">';
                echo '    <div class="row h-100">';
                echo '      <div class="col-12 col-md-6">';
                echo '        <img class="card-img  object-fit-cover h-100" src="assets/img/sports/' . $row['sports_image'] . '" alt="' . urldecode($row['sports_title']) . '" loading="lazy">';
                echo '      </div>';
                echo '      <div class="col-12 col-md-6" >';
                echo '        <div class="card-body ">';
                echo '          <h5 class="card-title">' . urldecode($row['sports_title']) . '</h5>';
                if ($row['sports_location']) {
                  echo '          <p class="card-text">Location: <a href="' . $row['sports_locationurl'] . '">' . urldecode($row['sports_location']) . '</a></p>';
                }
                if ($row['sports_hours']) {
                  echo '          <p class="card-text">Operating Hours: ' . $row['sports_hours'] . '</p>';
                }
                if ($row['sports_phone']) {
                  echo '          <p class="card-text">Contact Number: ' . $row['sports_phone'] . '</p>';
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


          <div class="tab-pane" id="tab-5">


            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Makan-makan</h3>

                </p>
              </div>


              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2  d-flex justify-content-center active" data-bs-toggle="pill"
                          href="#tabe1">Bak Kut Teh</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill" href="#tabe8">Bars &
                          Pubs</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabe2">Seafood</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabe3">Malay</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabe4">Kopitiams</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabe5">Chinese</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabe6">Indian</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabe7">Instragrammable Cafes</a></li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="tabe1">
                        <div class="row">



                          <?php

                          $query = "SELECT * FROM makan WHERE makan_category='bakkutteh'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {


                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img h-100 object-fit-cover " src="assets/img/makan/bakkutteh/' . $row['makan_image'] . '" alt="' . $row['makan_title'] . '" loading="lazy" >';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100">';
                            echo '          <h5 class="card-title">' . urldecode($row['makan_title']) . '</h5>';
                            if ($row['makan_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['makan_locationurl'] . '">' . urldecode($row['makan_location']) . '</a></p>';
                            }
                            if ($row['makan_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['makan_hours']) . '</p>';
                            }
                            if ($row['makan_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['makan_phone'] . '</p>';
                            }
                            if ($row['makan_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['makan_website'] . '">' . $row['makan_website'] . '</a></p>';
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
                      <div class="tab-pane fade" id="tabe8">
                        <div class="row">



                          <?php

                          $query = "SELECT * FROM makan WHERE makan_category='bars'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {


                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img h-100 object-fit-cover " src="assets/img/makan/bars/' . $row['makan_image'] . '" alt="' . $row['makan_title'] . '" loading="lazy" >';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100">';
                            echo '          <h5 class="card-title">' . urldecode($row['makan_title']) . '</h5>';
                            if ($row['makan_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['makan_locationurl'] . '">' . urldecode($row['makan_location']) . '</a></p>';
                            }
                            if ($row['makan_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['makan_hours']) . '</p>';
                            }
                            if ($row['makan_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['makan_phone'] . '</p>';
                            }
                            if ($row['makan_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['makan_website'] . '">' . $row['makan_website'] . '</a></p>';
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
                      <div class="tab-pane fade" id="tabe2">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM makan WHERE makan_category='seafood'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img h-100 object-fit-cover  " src="assets/img/makan/seafood/' . $row['makan_image'] . '" alt="' . $row['makan_title'] . '" loading="lazy">';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100 ">';
                            echo '          <h5 class="card-title">' . urldecode($row['makan_title']) . '</h5>';
                            if ($row['makan_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['makan_locationurl'] . '">' . urldecode($row['makan_location']) . '</a></p>';
                            }
                            if ($row['makan_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['makan_hours']) . '</p>';
                            }
                            if ($row['makan_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['makan_phone'] . '</p>';
                            }
                            if ($row['makan_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['makan_website'] . '">' . $row['makan_website'] . '</a></p>';
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

                      <div class="tab-pane fade" id="tabe3">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM makan WHERE makan_category='malay'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img h-100 object-fit-cover  " src="assets/img/makan/malay/' . $row['makan_image'] . '" alt="' . $row['makan_title'] . '" loading="lazy">';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100 ">';
                            echo '          <h5 class="card-title">' . urldecode($row['makan_title']) . '</h5>';
                            if ($row['makan_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['makan_locationurl'] . '">' . urldecode($row['makan_location']) . '</a></p>';
                            }
                            if ($row['makan_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['makan_hours']) . '</p>';
                            }
                            if ($row['makan_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['makan_phone'] . '</p>';
                            }
                            if ($row['makan_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['makan_website'] . '">' . $row['makan_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 3 Content -->

                      <div class="tab-pane fade show" id="tabe4">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM makan WHERE makan_category='kopitiams'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img h-100 object-fit-cover  " src="assets/img/makan/kopitiams/' . $row['makan_image'] . '" alt="' . $row['makan_title'] . '" loading="lazy">';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100 ">';
                            echo '          <h5 class="card-title">' . urldecode($row['makan_title']) . '</h5>';
                            if ($row['makan_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['makan_locationurl'] . '">' . urldecode($row['makan_location']) . '</a></p>';
                            }
                            if ($row['makan_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['makan_hours']) . '</p>';
                            }
                            if ($row['makan_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['makan_phone'] . '</p>';
                            }
                            if ($row['makan_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['makan_website'] . '">' . $row['makan_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 3 Content -->

                      <div class="tab-pane fade show" id="tabe5">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM makan WHERE makan_category='chinese'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img h-100 object-fit-cover  " src="assets/img/makan/chinese/' . $row['makan_image'] . '" alt="' . $row['makan_title'] . '" loading="lazy">';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100 ">';
                            echo '          <h5 class="card-title">' . urldecode($row['makan_title']) . '</h5>';
                            if ($row['makan_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['makan_locationurl'] . '">' . urldecode($row['makan_location']) . '</a></p>';
                            }
                            if ($row['makan_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['makan_hours']) . '</p>';
                            }
                            if ($row['makan_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['makan_phone'] . '</p>';
                            }
                            if ($row['makan_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['makan_website'] . '">' . $row['makan_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 3 Content -->


                      <div class="tab-pane fade show" id="tabe6">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM makan WHERE makan_category='indian'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img h-100 object-fit-cover" src="assets/img/makan/indian/' . $row['makan_image'] . '" alt="' . $row['makan_title'] . '" loading="lazy">';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100 ">';
                            echo '          <h5 class="card-title">' . urldecode($row['makan_title']) . '</h5>';
                            if ($row['makan_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['makan_locationurl'] . '">' . urldecode($row['makan_location']) . '</a></p>';
                            }
                            if ($row['makan_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['makan_hours']) . '</p>';
                            }
                            if ($row['makan_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['makan_phone'] . '</p>';
                            }
                            if ($row['makan_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['makan_website'] . '">' . $row['makan_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 3 Content -->

                      <div class="tab-pane fade show" id="tabe7">

                        <div class="row">



                          <?php


                          $query = "SELECT * FROM makan WHERE makan_category='ig'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img h-100 object-fit-cover" src="assets/img/makan/ig/' . $row['makan_image'] . '" alt="' . $row['makan_title'] . '" loading="lazy">';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100 ">';
                            echo '          <h5 class="card-title">' . urldecode($row['makan_title']) . '</h5>';
                            if ($row['makan_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['makan_locationurl'] . '">' . urldecode($row['makan_location']) . '</a></p>';
                            }
                            if ($row['makan_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['makan_hours']) . '</p>';
                            }
                            if ($row['makan_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['makan_phone'] . '</p>';
                            }
                            if ($row['makan_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['makan_website'] . '">' . $row['makan_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 3 Content -->

                    </div>

                  </div>

                </div>

              </div>


            </div>


          </div><!-- End Tab Content 5 -->


          <div class="tab-pane" id="tab-6">

            <div class="row gy-10 mb-4">
              <div class="col-12 text-center">
                <h3>Event With Royals</h3>

                </p>
              </div>

            </div>

            <?php

            $query = "SELECT * FROM eventwr";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['eventwr_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['eventwr_content']) ?>
                    </p>
                    <?php if ($row['eventwr_content2']) { ?>


                      <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                        <?php echo urldecode($row['eventwr_content2']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>
                    <?php } ?>

                    <?php if ($row['eventwr_location']) { ?>

                      <p><b>Location :</b><a href=" <?php echo urldecode($row['eventwr_locationurl']) ?>">
                          <?php echo urldecode($row['eventwr_location']) ?></a>
                      </p>
                    <?php } ?>

                    <?php if ($row['eventwr_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['eventwr_hours'])); ?>
                      </p>
                    <?php } ?>
                    <?php if ($row['eventwr_phone']) { ?>

                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['eventwr_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class=" col-md-4 order-1 text-center align-self-center">
                    <img src="assets/img/event/<?php echo $row['eventwr_image'] ?>"
                      alt=" <?php echo urldecode($row['eventwr_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['eventwr_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['eventwr_content']) ?>
                    </p>
                    <?php if ($row['eventwr_content2']) { ?>

                      <p>
                        <?php echo urldecode($row['eventwr_content2']) ?>
                      </p>
                      <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                        <?php echo urldecode($row['eventwr_content']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>
                    <?php } ?>

                    <?php if ($row['eventwr_location']) { ?>

                      <p><b>Location :</b><a href=" <?php echo urldecode($row['eventwr_locationurl']) ?>">
                          <?php echo urldecode($row['eventwr_location']) ?></a>
                      </p>
                    <?php } ?>
                    <?php if ($row['eventwr_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['eventwr_hours'])); ?>
                      </p>
                    <?php } ?>

                    <?php if ($row['eventwr_phone']) { ?>
                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['eventwr_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class=" col-md-4 order-md-2 order-1 text-center align-self-center ">
                    <img src=" assets/img/event/<?php echo $row['eventwr_image'] ?>"
                      alt="<?php echo urldecode($row['eventwr_title']) ?>" class="img-fluid" loading=" lazy">
                  </div>
                </div>
                <hr>
              <?php }
              ?>


              <?php
              $counter++;
            }
            ?>

          </div><!-- End Tab Content 6 -->



          <div class="tab-pane" id="tab-7">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Sight And Attractions</h3>

                </p>
              </div>

              <!-- ======= About Section ======= -->
              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2  active" data-bs-toggle="pill" href="#tabg1">Heritage Landmarks</a>
                      </li>
                      <li><a class="nav-link2 " data-bs-toggle="pill" href="#tabg2">Historical Sites & Museums</a>
                      </li>
                      <li><a class="nav-link2 " data-bs-toggle="pill" href="#tabg3">Eco Tourism</a></li>
                      <li><a class="nav-link2 " data-bs-toggle="pill" href="#tabg4">Agro Tourism</a></li>
                      <li><a class="nav-link2 " data-bs-toggle="pill" href="#tabg5">Instragrammable Spots</a></li>

                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="tabg1">
                        <?php

                        $query = "SELECT * FROM sight  WHERE sight_category='heritage'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {

                          ?>
                          <div class="row gy-4 mb-5">
                            <?php if ($counter % 2 != 0) { ?>
                              <div class="col-md-8 order-2 ">
                              <?php }else { ?>
                                <div class="col-md-8 order-1 ">
                                <?php } ?>

                              <h3>
                                <?php echo urldecode($row['sight_title']) ?>
                              </h3>
                              <p>
                                <?php echo urldecode($row['sight_content']) ?>
                              </p>
                              <?php if ($row['sight_content2']) { ?>


                                <div class="collapse" id="collapsesight-<?php echo $counter ?>">
                                  <?php echo urldecode($row['sight_content2']) ?>

                                </div>
                                <p>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsesight-<?php echo $counter ?>" aria-expanded="false"
                                    aria-controls="collapseExample" onclick="someFunction(this)">
                                    Read More
                                  </button>

                                </p>
                              <?php } ?>

                              <?php if ($row['sight_location']) { ?>

                                <p><b>Location :</b><a href=" <?php echo urldecode($row['sight_locationurl']) ?>">
                                    <?php echo urldecode($row['sight_location']) ?></a>
                                </p>
                              <?php } ?>

                              <?php if ($row['sight_hours']) { ?>
                                <p><b>Operation Hours :</b><br>
                                  <?php echo str_replace("/", "<br>", urldecode($row['sight_hours'])); ?>
                                </p>
                              <?php } ?>
                              <?php if ($row['sight_phone']) { ?>

                                <p><b>Phone :</b><br>
                                  <?php echo str_replace("/", "<br>", $row['sight_phone']); ?>
                                </p>
                              <?php } ?>

                            </div>
                            <?php if ($counter % 2 != 0) { ?>
                              <div class="col-md-4 order-1  text-center align-self-center">
                              <?php }else { ?>
                                <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <?php } ?>
                              <img src="assets/img/sight/heritage/<?php echo $row['sight_image'] ?>"
                                alt="<?php echo urldecode($row['sight_title']) ?>" class="img-fluid" loading="lazy">
                            </div>
                          </div>
                          <hr>
                          <?php
                          ?>
                          <?php
                          $counter++;
                        }
                        ?>


                      </div><!-- End Tab 1 Content -->

                      <div class="tab-pane fade show" id="tabg2">

                        <?php

                        $query = "SELECT * FROM sight  WHERE sight_category='museums'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['sight_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['sight_content']) ?>
                                </p>
                                <?php if ($row['sight_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['sight_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['sight_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['sight_locationurl']) ?>">
                                      <?php echo urldecode($row['sight_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['sight_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['sight_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['sight_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['sight_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/sight/museums/<?php echo $row['sight_image'] ?>"
                                  alt="<?php echo urldecode($row['sight_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['sight_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['sight_content']) ?>
                                </p>
                                <?php if ($row['sight_content2']) { ?>

                                  <p>
                                    <?php echo urldecode($row['sight_content2']) ?>
                                  </p>
                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['sight_content']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <p><b>Location :</b><a href=" <?php echo urldecode($row['sight_locationurl']) ?>">
                                    <?php echo urldecode($row['sight_location']) ?></a>
                                </p>
                                <?php if ($row['sight_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['sight_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['sight_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['sight_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/sight/museums/<?php echo $row['sight_image'] ?>"
                                  alt="<?php echo urldecode($row['sight_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php }
                          ?>


                          <?php
                          $counter++;
                        }
                        ?>


                      </div><!-- End Tab 2 Content -->

                      <div class="tab-pane fade show" id="tabg3">
                        <?php

                        $query = "SELECT * FROM sight  WHERE sight_category='eco'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['sight_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['sight_content']) ?>
                                </p>
                                <?php if ($row['sight_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['sight_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['sight_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['sight_locationurl']) ?>">
                                      <?php echo urldecode($row['sight_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['sight_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['sight_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['sight_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['sight_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/sight/eco/<?php echo $row['sight_image'] ?>"
                                  alt="<?php echo urldecode($row['sight_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['sight_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['sight_content']) ?>
                                </p>
                                <?php if ($row['sight_content2']) { ?>

                                  <p>
                                    <?php echo urldecode($row['sight_content2']) ?>
                                  </p>
                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['sight_content']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <p><b>Location :</b><a href=" <?php echo urldecode($row['sight_locationurl']) ?>">
                                    <?php echo urldecode($row['sight_location']) ?></a>
                                </p>
                                <?php if ($row['sight_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['sight_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['sight_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['sight_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/sight/eco/<?php echo $row['sight_image'] ?>"
                                  alt="<?php echo urldecode($row['sight_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php }
                          ?>


                          <?php
                          $counter++;
                        }
                        ?>
                      </div><!-- End Tab 3 Content -->

                      <div class="tab-pane fade show" id="tabg4">
                        <?php

                        $query = "SELECT * FROM sight  WHERE sight_category='agro'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['sight_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['sight_content']) ?>
                                </p>
                                <?php if ($row['sight_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['sight_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['sight_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['sight_locationurl']) ?>">
                                      <?php echo urldecode($row['sight_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['sight_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['sight_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['sight_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['sight_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/sight/agro/<?php echo $row['sight_image'] ?>"
                                  alt="<?php echo urldecode($row['sight_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['sight_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['sight_content']) ?>
                                </p>
                                <?php if ($row['sight_content2']) { ?>

                                  <p>
                                    <?php echo urldecode($row['sight_content2']) ?>
                                  </p>
                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['sight_content']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <p><b>Location :</b><a href=" <?php echo urldecode($row['sight_locationurl']) ?>">
                                    <?php echo urldecode($row['sight_location']) ?></a>
                                </p>
                                <?php if ($row['sight_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['sight_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['sight_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['sight_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/sight/agro/<?php echo $row['sight_image'] ?>"
                                  alt="<?php echo urldecode($row['sight_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php }
                          ?>


                          <?php
                          $counter++;
                        }
                        ?>
                      </div><!-- End Tab 4 Content -->


                      <div class="tab-pane fade show" id="tabg5">
                        <?php

                        $query = "SELECT * FROM sight  WHERE sight_category='ig'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['sight_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['sight_content']) ?>
                                </p>
                                <?php if ($row['sight_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['sight_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['sight_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['sight_locationurl']) ?>">
                                      <?php echo urldecode($row['sight_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['sight_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['sight_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['sight_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['sight_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/sight/ig/<?php echo $row['sight_image'] ?>"
                                  alt="<?php echo urldecode($row['sight_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['sight_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['sight_content']) ?>
                                </p>
                                <?php if ($row['sight_content2']) { ?>

                                  <p>
                                    <?php echo urldecode($row['sight_content2']) ?>
                                  </p>
                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['sight_content']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <p><b>Location :</b><a href=" <?php echo urldecode($row['sight_locationurl']) ?>">
                                    <?php echo urldecode($row['sight_location']) ?></a>
                                </p>
                                <?php if ($row['sight_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['sight_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['sight_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['sight_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/sight/ig/<?php echo $row['sight_image'] ?>"
                                  alt="<?php echo urldecode($row['sight_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php }
                          ?>


                          <?php
                          $counter++;
                        }
                        ?>
                      </div><!-- End Tab 5 Content -->

                    </div>

                  </div>

                </div>

              </div>


            </div>

          </div><!-- End Tab Content 7 -->


          <div class="tab-pane" id="tab-8">


            <div class="row gy-10 mb-4">
              <div class="col-12 text-center">
                <h3>Parks</h3>

                </p>
              </div>

            </div>

            <?php

            $query = "SELECT * FROM explorekl_p   ORDER BY explorekl_p_order DESC  ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['explorekl_p_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['explorekl_p_content']) ?>
                    </p>
                    <?php if ($row['explorekl_p_content2']) { ?>
                      <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                        <?php echo urldecode($row['explorekl_p_content2']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>

                    <?php } ?>

                    <?php if ($row['explorekl_p_location']) { ?>

                      <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekl_p_locationurl']) ?>">
                          <?php echo urldecode($row['explorekl_p_location']) ?></a>
                      </p>
                    <?php } ?>

                    <?php if ($row['explorekl_p_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['explorekl_p_hours'])); ?>
                      </p>
                    <?php } ?>
                    <?php if ($row['explorekl_p_phone']) { ?>

                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['explorekl_p_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-1  text-center align-self-center">
                    <img src="assets/img/explorekl/p/<?php echo $row['explorekl_p_image'] ?>"
                      alt="<?php echo urldecode($row['explorekl_p_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['explorekl_p_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['explorekl_p_content']) ?>
                    </p>
                    <?php if ($row['explorekl_p_content2']) { ?>
                      <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                        <?php echo urldecode($row['explorekl_p_content2']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>

                    <?php } ?>
                    <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekl_p_locationurl']) ?>">
                        <?php echo urldecode($row['explorekl_p_location']) ?></a>
                    </p>
                    <?php if ($row['explorekl_p_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['explorekl_p_hours'])); ?>
                      </p>
                    <?php } ?>

                    <?php if ($row['explorekl_p_phone']) { ?>
                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['explorekl_p_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                    <img src="assets/img/explorekl/p/<?php echo $row['explorekl_p_image'] ?>"
                      alt="<?php echo urldecode($row['explorekl_p_title']) ?>" class="img-fluid" loading="lazy">

                  </div>
                </div>
                <hr>
              <?php }
              ?>


              <?php
              $counter++;
            }
            ?>

          </div><!-- End Tab Content 8 -->


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