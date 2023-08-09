<?php include('admin/functions.php');

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
  <title>Klang The Guide - Highlights</title>

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



  <main id="highlights">



    <br>


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4  my-5 d-flex justify-content-center">

          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link glance" id="tab-1-link" href="#tab-1" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4 class="text-center">Klang @ A Glance</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link people" id="tab-2-link" data-bs-toggle="tab" href="#tab-2" data-bs-target="#tab-2">
              <h4 class="text-center">People Of Klang</h4>
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
                <h3>Klang @ A Glance</h3>

                </p>
              </div>


              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2  d-flex justify-content-center active" data-bs-toggle="pill"
                          href="#tabe1">About Klang</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill" href="#tabe2">Royal
                          Town</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabe3">History</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill" href="#tabe4">Fun
                          Facts</a></li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="tabe1">

                        <div class="row gy-10 mb-5">


                        </div>


                        <?php

                        $query = "SELECT * FROM highlights  WHERE highlights_category='glance-about'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <!-- <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3> -->
                                <p>
                                  <?php echo urldecode($row['highlights_content']) ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapseabout-<?php echo $counter ?>" >
                                    <?php echo urldecode($row['highlights_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseabout-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/highlights/aboutklang/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <!-- <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3> -->
                                <p>
                                  <?php echo urldecode($row['highlights_content']) ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapseabout-<?php echo $counter ?>">
                                    <?php echo urldecode($row['highlights_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseabout-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/highlights/aboutklang/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php }
                          ?>


                          <?php
                          $counter++;
                        }
                        ?>



                      </div><!-- End Tab 1 Content -->

                      <div class="tab-pane fade  " id="tabe2">

                        <div class="row gy-10 mb-5">


                        </div>


                        <?php

                        $query = "SELECT * FROM highlights  WHERE highlights_category='glance-royal'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">

                                <p>
                                  <?php echo str_replace("/", "<br>", urldecode($row['highlights_content'])); ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['highlights_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/highlights/royal/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">

                                <p>
                                  <?php echo urldecode($row['highlights_content']) ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['highlights_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/highlights/royal/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php }
                          ?>


                          <?php
                          $counter++;
                        }
                        ?>



                      </div><!-- End Tab 1 Content -->

                      <div class="tab-pane fade  " id="tabe3">


                        <section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel"
                          data-bs-interval="5000">

                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <div class="container">
                                <div class="row justify-content-center gy-6">



                                  <div class="col text-center">
                                    <h2>1776</h2>
                                    <p>The Selangor sultanate was established and maintained sovereignty over Klang until the arrival of British colonial rule in 1874.</p>
                                  </div>

                                </div>
                              </div>
                            </div><!-- End Carousel Item -->

                            <div class="carousel-item">
                              <div class="container">
                                <div class="row justify-content-center gy-6">


                                  <div class="col-lg-9 text-center">
                                    <h2>1868</h2>
                                    <p>The seat of authority was shifted during the Klang War to Bandar Temasya, Kuala Langat, and later to Jugra, which became Selangor’s capital city.</p>
                                  </div>

                                </div>
                              </div>
                            </div><!-- End Carousel Item -->

                            <div class="carousel-item">
                              <div class="container">
                                <div class="row justify-content-center gy-6">

                   

                                  <div class="col-lg-9 text-center">
                                    <h2>1874</h2>
                                    <p>Klang served as the capital of the British colonial government for Selangor from 1875 to 1880. Selangor also received a British Resident who would ‘advise’ the Sultan.</p>
                                  </div>

                                </div>
                              </div>
                            </div><!-- End Carousel Item -->

                            <div class="carousel-item">
                              <div class="container">
                                <div class="row justify-content-center gy-6">

                   

                                  <div class="col-lg-9 text-center">
                                    <h2>1880</h2>
                                    <p>The capital city of Selangor was changed to Kuala Lumpur due to the rise of the city as a result of tin mining.</p>
                                  </div>

                                </div>
                              </div>
                            </div><!-- End Carousel Item -->

                            <div class="carousel-item">
                              <div class="container">
                                <div class="row justify-content-center gy-6">

                   

                                  <div class="col-lg-9 text-center">
                                    <h2>1895</h2>
                                    <p>Klang Town was governed by a local authority known as the Klang Health Board.</p>
                                  </div>

                                </div>
                              </div>
                            </div><!-- End Carousel Item -->

                            <div class="carousel-item">
                              <div class="container">
                                <div class="row justify-content-center gy-6">

                   

                                  <div class="col-lg-9 text-center">
                                    <h2>1903</h2>
                                    <p>When Klang was designated as Sultan Alauddin Sulaiman Shah’s formal residence, the royal seat was relocated back to Klang.</p>
                                  </div>

                                </div>
                              </div>
                            </div><!-- End Carousel Item -->

                            <div class="carousel-item">
                              <div class="container">
                                <div class="row justify-content-center gy-6">

                   

                                  <div class="col-lg-9 text-center">
                                    <h2>1908</h2>
                                    <p>The Belfield Bridge, the first vehicular crossing of the Klang River linking Klang North and Klang South was built.</p>
                                  </div>

                                </div>
                              </div>
                            </div><!-- End Carousel Item -->

                            <div class="carousel-item">
                              <div class="container">
                                <div class="row justify-content-center gy-6">

                   

                                  <div class="col-lg-9 text-center">
                                    <h2>1926</h2>
                                    <p>The health boards of Port Swettenham and Klang were merged.</p>
                                  </div>

                                </div>
                              </div>
                            </div><!-- End Carousel Item -->

                            <div class="carousel-item">
                              <div class="container">
                                <div class="row justify-content-center gy-6">

                   

                                  <div class="col-lg-9 text-center">
                                    <h2>1945</h2>
                                    <p>Klang Town Board was the name of the municipal administration.</p>
                                  </div>

                                </div>
                              </div>
                            </div><!-- End Carousel Item -->

                            <div class="carousel-item">
                              <div class="container">
                                <div class="row justify-content-center gy-6">

                   

                                  <div class="col-lg-9 text-center">
                                    <h2>1954</h2>
                                    <p>The Town Board became the Klang Town Council after a local election to select its members in compliance with the Local Government Election Ordinance of 1950.</p>
                                  </div>

                                </div>
                              </div>
                            </div><!-- End Carousel Item -->

                          </div>

                          <a class="carousel-control-prev test77" id="timelinep" href="#hero" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                          </a>

                          <a class="carousel-control-next test77" id="timelinen" href="#hero" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                          </a>

                          <ol class="carousel-indicators"></ol>

                        </section><!-- End Hero Section -->
                      </div><!-- End Tab 1 Content -->

                      <div class="tab-pane fade  " id="tabe4">

                        <div class="row gy-10 mb-5">


                        </div>


                        <?php

                        $query = "SELECT * FROM highlights  WHERE highlights_category='glance-funfact'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col  ">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                  <?php echo str_replace("/", "<br>", urldecode($row['highlights_content'])); ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['highlights_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <!-- <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/highlights/ss/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div> -->
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['highlights_content']) ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['highlights_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <!-- <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/explorekl/ss/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div> -->
                            </div>
                            <hr>
                          <?php }
                          ?>


                          <?php
                          $counter++;
                        }
                        ?>

                      </div><!-- End Tab 1 Content -->


                    </div>

                  </div>

                </div>

              </div>


            </div>

          </div><!-- End Tab Content 1 -->



          <div class="tab-pane" id="tab-2">


            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Get To Know The People Of Klang</h3>

                </p>
              </div>

              <!-- ======= About Section ======= -->
              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2  d-flex justify-content-center  active" data-bs-toggle="pill"
                          href="#tabd1">Malay</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabd2">Temuan</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill" href="#tabd3">Mah
                          Meri</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabd4">Chinese</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabd5">Indian</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabd6">Sikh</a></li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="tabd1">

                        <div class="row gy-10 mb-5">


                        </div>


                        <?php

                        $query = "SELECT * FROM highlights  WHERE highlights_category='gettoknow-malay'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['highlights_content']) ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapsekmalay-<?php echo $counter ?>">
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content2'])); ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapsekmalay-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content2'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/highlights/malay/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['highlights_content']) ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapsekmalay-<?php echo $counter ?>">
                                    <?php echo urldecode($row['highlights_content2']) ?>

                                  </div>
                                  <p>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapsekmalay-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/highlights/malay/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php }
                          ?>


                          <?php
                          $counter++;
                        }
                        ?>



                      </div><!-- End Tab 1 Content -->

                      <div class="tab-pane fade show" id="tabd2">

                        <div class="row gy-10 mb-5">


                        </div>


                        <?php

                        $query = "SELECT * FROM highlights  WHERE highlights_category='gettoknow-temuan'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content'])); ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapsektemuan-<?php echo $counter ?>">
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content2'])); ?>

                                  </div>
                                  <p>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapsektemuan-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content2'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/highlights/temuan/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['highlights_content']) ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapsektemuan-<?php echo $counter ?>">
                                    <?php echo urldecode($row['highlights_content2']) ?>

                                  </div>
                                  <p>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseabout-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/highlights/temuan/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
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

                      <div class="tab-pane fade show" id="tabd3">
                        <div class="row gy-10 mb-5">


                        </div>


                        <?php

                        $query = "SELECT * FROM highlights  WHERE highlights_category='gettoknow-mahmeri'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content'])); ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapsekmahmeri-<?php echo $counter ?>">
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content2'])); ?>

                                  </div>
                                  <p>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapsekmahmeri-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content2'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/highlights/mahmeri/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['highlights_content']) ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapsekmahmeri-<?php echo $counter ?>">
                                    <?php echo urldecode($row['highlights_content2']) ?>

                                  </div>
                                  <p>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapsekmahmeri-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/highlights/mahmeri/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
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
                      <div class="tab-pane fade show" id="tabd4">
                        <div class="row gy-10 mb-5">


                        </div>


                        <?php

                        $query = "SELECT * FROM highlights  WHERE highlights_category='gettoknow-chinese'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content'])); ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapsekchinese-<?php echo $counter ?>">
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content2'])); ?>

                                  </div>
                                  <p>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapsekchinese-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content2'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/highlights/chinese/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['highlights_content']) ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapsekchinese-<?php echo $counter ?>">
                                    <?php echo urldecode($row['highlights_content2']) ?>

                                  </div>
                                  <p>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapsekchinese-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/highlights/chinese/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
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
                      <div class="tab-pane fade show" id="tabd5">
                        <div class="row gy-10 mb-5">


                        </div>


                        <?php

                        $query = "SELECT * FROM highlights  WHERE highlights_category='gettoknow-indian'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content'])); ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapsekindian-<?php echo $counter ?>">
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content2'])); ?>

                                  </div>
                                  <p>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapsekindian-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content2'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/highlights/indian/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['highlights_content']) ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapsekindian-<?php echo $counter ?>">
                                    <?php echo urldecode($row['highlights_content2']) ?>

                                  </div>
                                  <p>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseindian-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/highlights/indian/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
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
                      <div class="tab-pane fade show" id="tabd6">
                        <div class="row gy-10 mb-5">


                        </div>


                        <?php

                        $query = "SELECT * FROM highlights  WHERE highlights_category='gettoknow-sikh'  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content'])); ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapseksikh-<?php echo $counter ?>">
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content2'])); ?>

                                  </div>
                                  <p>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseksikh-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_content2'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/highlights/sikh/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['highlights_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['highlights_content']) ?>
                                </p>
                                <?php if ($row['highlights_content2']) { ?>


                                  <div class="collapse" id="collapseksikh-<?php echo $counter ?>">
                                    <?php echo urldecode($row['highlights_content2']) ?>

                                  </div>
                                  <p>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseksikh-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample" onclick="someFunction(this)">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['highlights_locationurl']) ?>">
                                      <?php echo urldecode($row['highlights_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['highlights_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['highlights_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['highlights_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['highlights_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/highlights/sikh/<?php echo $row['highlights_image'] ?>"
                                  alt="<?php echo urldecode($row['highlights_title']) ?>" class="img-fluid" loading="lazy">
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
                    </div>

                  </div>

                </div>

              </div>


            </div>

          </div><!-- End Tab Content 4 -->











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
  <!-- <script src="assets/js/timeline.js"></script> -->

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