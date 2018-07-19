<?php

if(!isset($_COOKIE['lg'])) {
  header("Location: http://marcbreakstheglasky.com");
  die();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Accomodations</title>


    <!-- Library CSS -->
    <link href="../css/wedding_library.css" rel="stylesheet">

    <!-- Icons CSS -->
    <link href="../fonts/themify-icons.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/wedding_style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/leaves.css" type="text/css" media="screen">

    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

</head>
<body>

  <!-- Page -->
  <div class="wed_page" id="wed_page">

    <!-- Header -->
    <header>
      <nav class="wed_light_nav wed_transp_nav">
        <div class="container">

          <!-- couple header -->
          <img class="wed_couple_header wed_kissing_couple animated extra" src="../images/3.png" alt=""/>
          <img class="wed_couple_header wed_white_couple animated extra" src="../images/3_white_couple.png" alt=""/>
          <!-- couple header end -->

          <!-- Logo -->
          <a href="#" class="wed_logo wed_logo_animation">Lauren & Marc</a>

          <!-- Text Logo -->
          <div class="wed_logo_und">We're Getting Married!</div>

          <div class="wed_top_menu_mobile_link">
            <i class="ti ti-menu"></i>
          </div>

        </div>
        <!-- container end -->
      </nav>

    </header>
    <!-- Header End -->


    <!-- PAGE TITLE SMALL -->
    <div class="wed_page_title wed_page_title_great wed_image_bck wed_fixed wed_wht_txt" data-stellar-background-ratio="0.2" data-image="../images/personal/dipping.jpg">


      <!-- Over -->
      <div class="wed_over" data-color="#ff3" data-opacity="0.1"></div>
      <div class="wed_over" data-color="#000" data-opacity="0.1"></div>

      <div class="container text-left">
        <div class="row">

          <div class="col-md-8">
            <h1 class="wed_h1_title">Accommodations</h1>
            <h4>Since our wedding is taking place during the height of the summer season, we strongly advise booking accommodations as soon as possible.<h4>
          </div>

        </div>
      </div>
    </div>

    <!-- PAGE TITLE SMALL END-->

    <!-- Content -->
    <section id="wed_content" class="wed_content">

      <!-- section -->
        <section class="wed_section_innerpage">

        <div class="container text-left">
          <!-- Item -->
          <div class="row wed_row_padding">
            <div class="col-md-offset-1 col-md-5">
              <div>
                <h3>Residence Inn</h3>
                <span>Riverhead, NY<br><br></span>
                <p>
                  A block of rooms has been reserved for our guests at a discounted rate. Please reference the Glasky / Silberman wedding when making your reservations by calling (###) ###-####. <br> <br>
                  Transportation will be provided to and from the wedding venue.
                </p>
              </div>
            </div>

            <div class="col-md-5">
              <img src="../images/personal/shackfun.jpg" class="fullwidth" alt="">
            </div>
          </div>
          <!-- Row End -->

          </div>
          <!-- container end -->


        </section>
        <!-- section end -->

    </section>
    <!-- Section end -->


  <!-- White border -->
  <div class="wed_white_inner_border">
    <!-- section -->
    <section id="where" class="wed_section_inner wed_image_bck wed_wht_txt wed_fixed lgms_celebrate" data-stellar-background-ratio="0.2" data-image="">
      <!-- Over -->
      <div class="wed_over" data-color="#3336ff" data-opacity="1"></div>
      <div class="wed_over" data-color="#3336ff" data-opacity="0" data-blend="screen"></div>

      <div class="container">
        <div class="row wed_auto_height wed_middle_titles">
          <div class="col-md-12 wed_image_bck wed_fixed text-center" >
              <h4>Alternatively, we encourage you to explore airbnb and VRBO for vacation rentals.</h4>
          </div>
          <!-- col end -->
        </div>
        <!-- row end -->
        <!-- <span class="wed_countdown" data-year="2019" data-month="07" data-day="04"></span> -->
      </div>
      <!-- container end -->

    </section>
    <!-- section end -->

          <!-- To Top -->
        <a href="#wed_page" class="wed_top ti ti-angle-up wed_go"></a>
      </div>
      <!-- White border end -->
    </section>
    <!-- content end -->
  </div>
  <!-- Page End -->



<!-- JQuery -->
<script src="../js/jquery-1.12.4.min.js"></script>

<!-- Library JS -->
<script src="../js/wedding_library.js"></script>
<script src="../js/library/jquery.plugin.min.js"></script>
<script src="../js/jquery.countdown.min.js"></script>




<!-- Theme JS -->
<script src="../js/wedding_script.js"></script>


</body>
</html>
