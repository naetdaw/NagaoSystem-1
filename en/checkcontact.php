<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact</title>

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

    <style type="text/css">
        .datagrid table { border-collapse: collapse; text-align: left; width: 100%; height: 500%; } 
        .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #006699; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }
        .datagrid table td, 
        .datagrid table th { padding: 3px 10px; }
        .datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#FFFFFF; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8; } 
        .datagrid table thead th:first-child { border: none; }
        .datagrid table tbody td { color: #00557F; border-left: 1px solid #E1EEF4;font-size: 12px;font-weight: normal; }
        .datagrid table tbody 
        .alt td { background: #E1EEf4; color: #00557F; }
         .datagrid table tbody td:first-child { border-left: none; }
        .datagrid table tbody tr:last-child td { border-bottom: none; }
        .datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEf4;} 
        .datagrid table tfoot td { padding: 0; font-size: 12px } 
        .datagrid table tfoot td div{ padding: 2px; }
        .datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }
        .datagrid table tfoot  li { display: inline; }
        .datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #006699;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; }
        .datagrid table tfoot ul
        .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #00557F; color: #FFFFFF; background: none; background-color:#006699;}div
    </style>
</head>

<body>


    <div id="all">
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

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Contact</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index_en.php">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container" id="contact">
                <section>

                    <div class="row text-center">

                        <div class="col-md-12">
                            <div class="heading">
                                <h2 style="text-align: center;">Confirmation screen<br><SMALL>If you have any suggestions, please click the "Submit".</SMALL></h2>
                            </div>
                        </div>
                        
                        <div class="col-md-8 col-md-offset-2">
                            <form method="post" action="sendcontact.php" class="contact-form">
                                <div class="row">
                                <?php
                                $_SESSION['company'] = $_POST['company'];
                                $_SESSION['name'] = $_POST['name'];
                                $_SESSION['phone'] = $_REQUEST['phone'];
                                $_SESSION['Email'] = $_REQUEST['Email'];
                                $_SESSION['message'] = $_REQUEST['Content'];
                                
                        ?>
                        <div class="datagrid">
                        <table>
                            <thead>
                            </thead>
                        <tfoot>
                        <tr>
                        <td colspan="4">
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                        <td>Company Name :</td>
                        <td style="text-align: left; "><?php echo $_SESSION['company'] ?></td>
                        </tr>
                        <tr class="alt">
                        <td>Name : </td>
                        <td style="text-align: left;"><?php echo $_SESSION['name'] ?>
                        </td>
                        </tr>
                        <tr>
                        <td>Phone Number :</td>
                        <td style="text-align: left;"><?php echo $_SESSION['phone'] ?> 
                        </td>
                        </tr>
                        <tr class="alt">
                        <td>Content : </td>
                        <td style="text-align: left;"><?php echo $_SESSION['message'] ?>
                        </td>
                        </tr>
                            </tbody>
                                </table>
                                     </div>
                                <br>
                                    <br>
                                    <div class="col-sm-12 text-center">
                                        <input type="submit" class="btn btn-template-main" value="submit">
                                        <input type="button" value="Back" class="btn btn-template-main" onClick="history.back()">
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>



                        </div>
                    </div>
                    <!-- /.row -->

                </section>


            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->
        <!-- *** GET IT ***

        <!-- *** FOOTER ***
_________________________________________________________ -->


        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>nagao system INC.</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="#" class="btn btn-template-transparent-primary">Click</a>
                </div>
            </div>          
        </div>

        <!-- *** FOOTER ***
_________________________________________________________ -->

        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>About us</h4>
                    <p>
                        <br><a href="profile.php" style="color: white;">Company Profile >> </a>
                        <br><a href="history.php" style="color: white;"> Company History >> </a>
                        <br><a href="policy.php" style="color: white;">Company Policy  >> </a>
                        <br><a href="sale.php" style="color: white;">Sales Structure >> </a>
                        <br><a href="coporate.php" style="color: white;">Coporate Philosophy >> </a>
                        <br><a href="access1.php" style="color: white;">Access  >> </a>
                    </p>
                    <hr>

                    <hr class="hidden-md hidden-lg hidden-sm">
                    <div class="login">
                               <a href="https://www.facebook.com/nagaosystem" class="external gplus" data-animate-hover="pulse">
                                    <img src="img/product/facebook.png" style="width: 30px;height: 30px;">
                               </i>
                                    </a>

                               <a href="https://www.youtube.com/channel/UCbyYWLsv_5aD25ZhZck8Vag" class="external twitter" data-animate-hover="pulse">
                               <img src="img/product/if_social-youtube-square2_771383.png" style="width: 30px;height: 30px;">
                               </i>
                                    </a>
                               
                                <a href="https://ameblo.jp/nagaosystem/" class="email" data-animate-hover="pulse" target="_blank">
                                    <img src="img/product/2022327-512.png" style="width: 30px;height: 30px;">
                                    </i>
                                        </a>
                            </div>

                </div>
                <!-- /.col-md-3 -->

            <div class="col-md-3 col-sm-6">
             <h4>News</h4>
            <p>
                <br><a href="exhibitionE.php" style="color: white;">Event Schedule >> </a>
                <br><a href="Newspaper.php" style="color: white;">Newspaper >> </a>
                <br><a href="torisetsuE.php" style="color: white;">TV Program Broadcast  >> </a>
                <br><a href="ConferencePresentationE.php" style="color: white;">Conference Presentation >> </a>
                    </p>
                        
               </div>
                 <div class="col-md-3 col-sm-6">
                    <hr class="hidden-md hidden-lg hidden-sm">
                    <div class="login">
                               <h4>Contact</h4>

                    <p style="color: white;">
                          <br>1-9-30 Katahira Asao-Ward
                         <br>Kawasaki-City Kanagawa-Pref, 
                         <br>215-0023 JAPAN
                                     <br>TEL +81-44-954-4486
                                     <br>FAX +81-44-954-8258
                                     <br>E-mail fnagao@rose.plala.or.jp
                        <br>
                    </p>

                    <a href="contact.php" class="btn btn-small btn-template-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">
                            </div>

                </div>
                <br>
                    <br>
                    <br>
                <br>
                <!-- /.col-md-3 -->
                        <a href="http://127.0.0.1/Nagao_system/index.php" class="external gplus" data-animate-hover="pulse">
                                    <img src="img/product/NSQR.png" style="width: 130px;height: 130px;">
                               </i>
                                    </a>
                             <a href="https://jgoodtech.jp/en_US/web/JC0000000000922/eng" class="external twitter" data-animate-hover="pulse">
                               <img src="img/product/JGEQR.png" style="width: 130px;height: 130px;">
                               </i>
                                    </a>  
            </div>
            <!-- /.container -->
           

        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; copyright©2017 NAGAO SYSTEM INC. all rights reserved.</p>
                    <p class="pull-right">サブナビゲーションプライバシーポリシー 特定商取引法に関する記述</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

    </div>
    <!-- /#all -->

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

    

    <!-- gmaps -->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script src="js/gmaps.js"></script>
    <script src="js/gmaps.init.js"></script>

    <!-- gmaps end -->





</body>

</html>