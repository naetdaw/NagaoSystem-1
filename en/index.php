<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nagao System Inc.</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
     <style>


  
  .panel {
      border: 1px solid #00BFFF; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #00BFFF;
      background-color: #fff !important;
      color: #00BFFF;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #00BFFF !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #00BFFF;
      color: #fff;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  </style>
</head>

<body>

    <div id="all">

     <?php
    include 'header_index.php';
    ?>

       <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

             <div class="home-carousel">

                <div class="dark-mask"></div>

                <div class="container">
                    <div class="homepage owl-carousel">
                        
                        <div class="item">
                            <div class="row">

                                <div class="col-sm-7 text-center">
                                    <img class="img-responsive" src="img/product/3D_ball_mile.gif" alt="">
                                </div>

                                <div class="col-sm-5">
                                <ul class="list-style-none">
                                    <h2>3D-210-D2</h2>
                                     <li>Application field</li>
                                <li>・Dry pulverization without heating-up sample</li>
                                    <li>・Nano-size pulverization</li>
                                    <li>・Mechanical alloying</li>
                                    <li>・Mechano-chemical reaction.</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                   <h1>3DB-80</h1>
                                    <ul class="list-style-none">
                                 <li>Application field</li>
                                <li>・Dry pulverization without heating-up sample</li>
                               <li> ・Nano-size pulverization</li>
                                <li>・Mechanical alloying</li>
                                <li>・Mechano-chemical reaction.</li>
                                    </ul>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="img/product/logo206.gif" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-7" align="center">
                                    <img class="img-responsive" src="img/product/logoplanetm21.png" alt="">
                                </div>
                                <div class="col-sm-5">
                                    <h2>Planet M2-3F</h2>
                                    <ul class="list-style-none">
                                 <li>Effective for supression of temperature-rise due to Heat Generation</li>
                               <li> ・Nano-size pulverization</li>
                                <li>・Mechanical alloying</li>
                                <li>・Mechano-chemical reaction.</li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.project owl-slider -->
                </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>

       <section class="bar background-white no-mb">
            <div class="container">

                <div class="col-md-15">
                    <div class="heading text-center">
                        <h2>Product</h2>
                    </div>

                    <p class="lead">&nbsp; &nbsp; &nbsp;NAGAO SYSTEM INC. Is a professional group that solves crushing, mixing and dispersion, which was considered impossible in the past by high-speed rotation utilization of patented 3D ball mill (3D Reactor).

                    mm or less (Organic / Inorganic) material can be pulverized,
                    mixed and dispersed up to nano, micron (Dry/Wet type) possible.
                    Furthermore, it is good to mix substances of different gravity
                    and viscosity with unused and evenly mixed (3D Reactor) pellicles
                    and feathers.

                    We manufacture and sell the equipment + special container. 
                    </p>

                    <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->
                  
                    <div class="row portfolio">
<!-- Container (Pricing Section) -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>3D-210-D2</h3>
        </div>
        <div class="box-image">
           <img src="img/product/3D_ball_mile2.gif" alt="" class="img-responsive" style="width: 300px;height: 240px;">
        </div>
        <div class="panel-footer">
          <a href="product_3DMbrochureE.php"><button class="btn btn-lg">READ MORE</button></a>
        </div>
      </div>      
    </div> 

    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>3D-80</h3>
        </div>
        <div class="panel-body">
         <img src="img/product/logo2061.gif" alt="" class="img-responsive">
        </div>
        <div class="panel-footer">
           <a href="product_3D80.php"><button class="btn btn-lg">READ MORE</button></a>
        </div>
      </div>      
    </div>  

    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>3DB-80</h3>
        </div>
        <div class="panel-body">
         <img src="img/product/logo3D210D212.gif" alt="" class="img-responsive">
        </div>
        <div class="panel-footer">
           <a href="product_3DB80.php"><button class="btn btn-lg">READ MORE</button></a>
        </div>
      </div>      
    </div> 

    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>PLANET-Mini(-F)</h3>
        </div>
        <div class="panel-body">
         <img src="img/product/12345.png" alt="" class="img-responsive" >
        </div>
        <div class="panel-footer">
           <a href="product_PlanetM2_3F.php"><button class="btn btn-lg">READ MORE</button></a>
        </div>
      </div>      
    </div>  

    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>PLANET M2-3F</h3>
        </div>
        <div class="panel-body">
         <img src="img/product/planet.gif" style="width: 300px;height: 250px;">
        </div>
        <div class="panel-footer">
           <a href="product_Mini2F.php"><button class="btn btn-lg">READ MORE</button></a>
        </div>
      </div>      
    </div>    
  </div>
<!-- /.box-image --> 
        </div>
            </section>

            <section>
            <!--row low row -->

    <div class="container">
    <div class="row" style="text-align: center;padding-left: 22px;">

        <h1><u>More About Nagao System</u></h1>
            <br>
                <br>
            <div class="col-xs-6 col-sm-3 col-md-3 part" style="background-color:#87CEFA;">
                <a href="service_product.php">
                    <img src="img/profile/product.jpg" alt="" width="100%" height="195px" />
                    <div class="text">
                        <h3>Product & Service</h3>
                    </div>
                    <ul style="text-align: left;background-color: white;">
                    <li><a href="service_product.php">Product Services</a></li>
                    <li><a href="goodpointsE.php">Super Points</a></li>
                    <li><a href="targetE.php">Target & Products</a></li>
                    <li><a href="3DResearchExperimentResultE.php">Research experiment</a></li>
                    <li><a href="3DAPPE.php">Appliances & Attachments</a></li>
                    </ul>
                </a>
            </div>

            <div class="col-xs-6 col-sm-3 col-md-3 part" style="background-color: #B0E0E6;">
                <a href="profile.php">
                    <img src="img/profile/aboutus.jpg" alt="About Us" width="100%" height="195px" />
                    <div class="text">
                    <h3>About Us</h3>
                    </div>
                    <ul style="text-align: left;background-color: white;">
                        <li><a href="profile.php">Company Profile</a>
                        </li>
                        <li><a href="history.php">Company History</a></li>
                        <li><a href="policy.php">Company Policy</a>
                        </li>
                        <li><a href="sale.php">Sales Structure</a>
                        </li>
                
                        <li><a href="access1.php">Access</a>
                        </li>
                    </ul>
                </a>
            </div>

            <div class="col-xs-6 col-sm-3 col-md-3 part" style="background-color: #87CEFA; ">
                <a href="exhibitionE.php">
                    <img src="img/profile/new.jpg" alt="newspaper" width="100%" height="195px" />
                    <div class="text">
                    <h3>News</h3>
                    </div>
                    <ul style="text-align: left;background-color: white;">
                        <li><a href="exhibitionE.php">Event Schedule</a>
                        </li> 
                        <li><a href="Newspaper.php">Newspaper</a>
                        </li>
                        <li><a href="torisetsuE.php">TV Program Broadcast</a>
                        </li>
                        <li><a href="ConferencePresentationE.php">Conference Presentation</a>
                        </li>
                    </ul>
                </a>
            </div>

            <div class="col-xs-5 col-sm-3 col-md-3 part" style="background-color:#B0E0E6;">
                <a href="achievement.php">
                    <img src="img/profile/part.jpg" alt="Partner" width="100%" height="195px" />
                    <div class="text">
                    <h3>Partner</h3>
                    </div>
                </a>
                <ul style="text-align: left;background-color: white;">
                    <li><a href="achievement.php">Sales Achievement</a>
                    </li>
                    <li><a href="cleaning.php">Cleaning Method</a>
                    </li>
                    <li><a href="urban.php">Urban Mine</a>
                    </li>
                    <li><a href="news.php">Newspaper Articles</a></li>
                    <li><a href="decontamination.php">Decontamination</a></li>
                    <li><a href="wanted.php">Partner</a></li>
                </ul>
            </div>
        </div>    
        </div>

            </section>

        </div>
        <!-- /#content -->

        <!-- /#content -->

       
                   </div>
                </div>
            </div>
        </section>
      <?php
      include 'footer.php';
      ?>
    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>



</body>

</html>