<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/google-map.css" rel="stylesheet">
    <link href="css/mailform.css" rel="stylesheet">
    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="https://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>

    <![endif]-->
    <script src='js/device.min.js'></script>
    <style type="text/css">
        #panel{
            display: none !important;
        }
    </style>
</head>
<body>
<div class="page">
    <header>
        <div class="container well clearfix">
            <h1 class="navbar-brand">
                <a data-type='rd-navbar-brand' href="./">
                    <img src="http://uniqueagri.com/wp-content/uploads/2014/04/logo_web.png">
                </a>
            </h1>
        </div>
        <div id="stuck_container" class="stuck_container">
            <nav class="navbar navbar-default navbar-static-top ">
                <div class="container">
                    <ul class="navbar-nav sf-menu" data-type="navbar">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About us</a>
                        </li>
                        <li class="dropdown active">
                            <a href="javascript:void(0)">Product</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="unisoil.php">Unisoil </a>
                                </li>
                                <li>
                                    <a href="unistick.php">Unistick </a>
                                </li>
                                <li>
                                    <a href="uniseal.php">Uniseal </a>
                                </li>
                                <li>
                                    <a href="unisealplus.php">Unisealplus </a>
                                </li>
                                <li>
                                    <a href="unigain.php">Unigain </a>
                                </li>
                                <li>
                                    <a href="unisize.php">Unisize </a>
                                </li>
                                <li>
                                    <a href="unineutra.php">Unineutra </a>
                                </li>
                                <li>
                                    <a href="uniag.php">Uniag </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="gallery.php">Gallery</a>
                        </li>
                        <li>
                            <a href="contact.php">Contacts</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <main>

        <section class="well8">
            <div class="container">
                <h3 class="text-center">Contacts</h3>
                <div class="map">
                    <div id="google-map" class="map_model" data-zoom="11"></div>
                    <ul class="map_locations">
                        <li data-x="-73.9874068" data-y="40.643180">
                            <p>3 / 4, Guruprashtha Residency, Nr. Pune-Bangalore Highway, Khed. Satara. 415002. Maharashtra, INDIA.</p>
                        </li>
                    </ul>
                </div>
                <div class="row offs">
                    <div class="col-md-4 col-sm-12 col-xs-12 center991 wow fadeInLeft" data-wow-duration="2s"
                         data-wow-delay="0.2s">
                        <h3 class="text-center">Address</h3>
                        <div class="contact-info center991">
                            <address class="h4 text-primary">3 / 4,<br>Guruprashtha Residency,<br>Nr. Pune-Bangalore Highway,<br>Khed. Satara. 415002.<br>Maharashtra, INDIA.
                            </address>
                            <dl>
                                <dt>Mobile Number:</dt>
                                <dd>
                                    <a class="fw-l" href="tel:+919763200088">+91-976-320-0088</a>
                                </dd>
                                <dt>Telephone:</dt>
                                <dd>
                                    <a class="fw-l" href="tel:+912162200088">+91-216-220-0088;</a>
                                </dd>
                                <dt>E-mail:</dt>
                                <dd>
                                    <!-- <a class="fw-l" href="mailto:uniqueagrisolutionpvtltd@gmail.com">uniqueagrisolutionpvtltd@gmail.com</a> -->
                                    <a class="fw-l" href="mailto:info@uniqueagri.com">info@uniqueagri.com</a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <h3 class="text-center">Get in touch</h3>
                        <form class='mailform' method="post" action="bat/rd-mailform.php">
                            <input type="hidden" name="form-type" value="contact"/>
                            <fieldset class="row offs0">
                                <div class="col-md-6 col-sm-12 col-xs-12 col_mod">
                                    <label data-add-placeholder="">
                                        <input type="text" name="name" placeholder="Name" data-constraints="@LettersOnly @NotEmpty"/>
                                    </label>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 col_mod">
                                    <label data-add-placeholder="">
                                        <input type="text" name="email" placeholder="E-mail" data-constraints="@Email @NotEmpty"/>
                                    </label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 col_mod">
                                    <label data-add-placeholder="" class="textarea">
                                        <textarea name="message" placeholder="Message" data-constraints="@NotEmpty"></textarea>
                                    </label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 col_mod">
                                    <div class="mfControls">
                                        <button class="btn btn-primary btn-lg" type="submit">Send</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
    <!-- <footer>
        <section class="well4 bg-primary">
            <div class="container center767">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="h4 text-secondary"><span class="material-icons-location_on  text-primary"></span>
                            &nbsp; Address
                        </div>
                        <address class="fw-l">3 / 4, Guruprashtha Residency, Nr. Pune-Bangalore Highway, Khed. Satara. 415002. Maharashtra, INDIA.</address>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="h4 text-secondary"><span class="material-icons-local_phone text-primary"></span>
                            &nbsp; Phones
                        </div>
                        <a class="fw-l" href="tel:+912162200088">+91-216-220-0088;</a>
                        <a class="fw-l" href="tel:+919763200088">+91-976-320-0088</a>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="h4 text-secondary"><span class="material-icons-email text-primary "></span>
                            &nbsp; Email Id
                        </div>
                        <a class="fw-l" href="mailto:uniqueagrisolutionpvtltd@gmail.com">uniqueagrisolutionpvtltd@gmail.com</a>
                        <a class="fw-l" href="mailto:info@uniqueagri.com">info@uniqueagri.com</a>
                    </div>

                </div>
            </div>
        </section>
        <div class="container text-center">
            <p class="copyright">
                <a href="#">UNIQUEAGRI SOLUTION PRIVATE LIMITED</a> &#169; <span id="copyright-year"></span>.
            </p>
        </div>
    </footer> -->
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>