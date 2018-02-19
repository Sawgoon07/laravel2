<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Annapurna Party Venu</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

       

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <style type="text/css">
        .text{
            font-size: 18px;
            color: black;
            display: inline;
        }

        .glyphicon {
        font-size: 50px;
        color: black;

        }
        .glyphicon.glyphicon-cutlery {
            font-size: 50px;
            margin-top: 15px;

        }

        .glyphicon.glyphicon-calendar{
            font-size: 50px;
            margin-top: 15px;
        }

        .glyphicon.glyphicon-user{
             font-size: 50px;
             margin-top: 15px;
        }

        #nxt{
            text-align: inline;
            font-size: 18px;
            margin-top: 30px;
            color: black;
        
        }

        .foter{
            font-size: 18px;
            color: black;
        }

        
    </style>
    
    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="navbar-logo">
                            <a class="navbar-logo-wrap" href="{{ url('/') }}">
                                <img class="navbar-logo-img" src="img/logo.jpg" alt="Annapurna">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <!-- Home -->
                                <li class="nav-item">
                                    <a class="nav-item-child active" href="{!!route('frontend.index')!!}">
                                        Home
                                    </a>
                                </li>
                                <!-- End Home -->

                                <!-- About -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="{!!route('frontend.about')!!}">
                                        About
                                    </a>
                                </li>
                                <!-- End About -->

                                <!-- Contact -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="{!!route('frontend.contact')!!}">
                                        Contact
                                    </a>
                                </li>
                                <!-- End Contact -->

                                <!-- Work -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="{!!route('booking.index')!!}">
                                        Booking
                                    </a>
                                 </li>
                                <!-- End Work -->

                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->



 @yield('content')




<!--========== FOOTER ==========-->
<!-- Footer -->
<footer>
    <div class="col-lg-12">         
        <div class="container" style="margin-top:50px">
            <div class="col-md-4">
              <h3>Our Services</h3>
                <ol type="1">
                    <li>Party Hall for Wedding, Party, Semiar etc.</li>
                    <li>Full and Half Catering.</li>
                    <li>JAGGE(MANDAP) and other services for wedding.</li>
                    <li>Parking Facilities</li>
                    <li> & many more</li>
                </ol>    
            </div>

            <div class="col-md-4">
                <h3>Follow us</h3>
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a href="#">Twitter</a></li>
                        <li class="footer-list-item"><a href="#">Facebook</a></li>
                        <li class="footer-list-item"><a href="#">Instagram</a></li>
                    </ul>
            </div>

                         
           

            <div class="col-md-4">
                <h3>Conctact us </h3>
                    <p class="foter">Annapurna Party Venu.</p>
                    <p class="foter">Matidevi,Old Baneshwor.</p>
                    <p class="foter">Phone: 014461782 </p>
                                
            </div>

             <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Copyright &copy; Your Website 2016
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>
        <script src="js/jquery.js"></script>



    </body>
    <!-- END BODY -->
</html>