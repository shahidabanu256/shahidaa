 <html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="./resources/css/style.css">
  <title>Covid-19 India</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v2.0.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Day</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
 
 
 
 <section class="corona-updates container-fluid">
			<div class="mb-3">
				<h3 class ="text-center text-uppercase"> Covid -19 Indian Statewie Statistics</h3>
			</div>
				<div class="table-responsive">
					<table class ="table table-bordered table-striped teext-center " id="tbval">
					  <tr>
						<th class="text-capitalize"> Last Updates Time</th>
						<th class="text-capitalize"> State</th>
						<th class="text-capitalize"> confirmed</th>
						<th class="text-capitalize"> active </th>
						<th class="text-capitalize"> recovered</th>
						<th class="text-capitalize"> deaths</th>
					   </tr>
					   
					 <?php 
						$data = file_get_contents('https://api.covid19india.org/data.json');
						$coranalive = json_decode($data, true);

						$statescount = count($coranalive['statewise']);
						
					


						$i=1;
						while($i <$statescount)
						{
							
						?>
					   <tr>
					   <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
					   <td><?php echo $coranalive['statewise'][$i]['state'] ?></td>
					   <td><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
					   <td><?php echo $coranalive['statewise'][$i]['active'] ?></td>
					   <td><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
					   
					   <td><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>
					   
					   </tr>
						<?php
							$i++;
						}	
						?>
					 </table>
				</div>
		</section>
		</body>

</html>
			