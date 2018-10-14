<?php
include("config.php");
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>King &amp; I Events and Catering</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- bootstrap grid -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <!-- bootstrap theme -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- template styles -->
    <link rel="stylesheet" href="css/color-default.css" />
    <!-- default template color styles -->
    <link rel="stylesheet" href="css/retina.css" />
    <!-- retina ready styles -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- responsive styles -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- animation for content -->

    <!-- Google Web fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Suranna' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>


    <script src="js/show.js"></script>
    <!-- Font icons -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <!-- Font awesome icons -->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />



    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery-ui.min.js"></script>

    <script>
        $(function() {
            $("#date").datepicker({
                altField: "#day",
                altFormat: "DD",
                minDate: 0
            });
        });
    </script>


</head>

<body>

    <!-- .header-wrapper start -->
    <div id="header-wrapper">
        <!-- #header start -->
        <header id="header">
            <!-- Main navigation and logo container -->
            <div class="header-inner">
                <!-- .container start -->
                <div class="container">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- .navbar start -->
                                <nav class="navbar navbar-default nav-left">
                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">
                                        <!-- .logo start -->
                                        <div class="logo">
                                            <a href="index.html">
                                                <img src="img/logo.png" alt="King and I">
                                            </a>
                                        </div>
                                        <!-- logo end -->
                                    </div>
                                    <!-- .navbar-header end -->

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav pi-nav">
                                            <li class="dropdown">
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li class="dropdown current-menu-item">
                                                <a href="#">Catering Packages</a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown dropdown-submenu">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wedding Packages</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="pckg_kingwed.php">King's Wedding</a></li>
                                                            <li><a href="pckg_queenwed.html">Queen's Wedding</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Birthday Packages</a>
                                                        <ul class="dropdown-menu">
                                                            <li class="dropdown dropdown-submenu">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Adults</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="pckg1_adult.html">Adult Package I</a></li>
                                                                    <li><a href="pckg2_adult.html">Adult Package II</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown dropdown-submenu">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kids</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="pckg1_kiddie.html">Kiddie Package I</a></li>
                                                                    <li><a href="pckg2_kiddie.html">Kiddie Package II</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Debut Packages</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="pckg1_debut.php">Debut Package I</a></li>
                                                            <li><a href="pckg2_debut.html">Debut Package II</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-submenu">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Standard Packages</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="pckg1_standard.html">Standard Package I</a></li>
                                                            <li><a href="pckg2_standard.html">Standard Package II</a></li>
                                                            <li><a href="pckg3_standard.html">Standard Package III</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#">Menu</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu-01.html">Menu 1</a></li>
                                                    <li><a href="menu-02.html">Menu 2</a></li>
                                                    <li><a href="menu-details.html">Menu Details</a></li>
                                                </ul>
                                                <!-- .dropdown-menu end -->
                                            </li>


                                            <li>
                                                <a href="reservations.html">Reservations</a>
                                            </li>


                                            <li>
                                                <a href="gallery.html">Gallery</a>
                                            </li>

                                            <li class="dropdown">
                                                <a href="about.html">About Us</a>
                                            </li>



                                        </ul>
                                        <!-- .nav.navbar-nav.pi-nav end -->

                                        <!-- Responsive menu start -->
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <button class="dl-trigger">Open Menu</button>

                                            <ul class="dl-menu">
                                                <li>
                                                    <a href="index.html">Home</a>
                                                </li>

                                                <li>
                                                    <a href="#">Catering Packages</a>
                                                    <ul class="dl-submenu">
                                                        <li class="dropdown dropdown-submenu">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wedding Packages</a>
                                                            <ul class="dl-submenu">
                                                                <li><a href="pckg_kingwed.php">King's Wedding</a></li>
                                                                <li><a href="pckg_queenwed.html">Queen's Wedding</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown dropdown-submenu">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Birthday Packages</a>
                                                            <ul class="dl-submenu">
                                                                <li class="dropdown dropdown-submenu">
                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Adults</a>
                                                                    <ul class="dl-submenu">
                                                                        <li><a href="pckg1_adult.html">Adult Package I</a></li>
                                                                        <li><a href="pckg2_adult.html">Adult Package II</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown dropdown-submenu">
                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kids</a>
                                                                    <ul class="dl-submenu">
                                                                        <li><a href="pckg1_kiddie.html">Kiddie Package I</a></li>
                                                                        <li><a href="pckg2_kiddie.html">Kiddie Package II</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown dropdown-submenu">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Debut Packages</a>
                                                            <ul class="dl-submenu">
                                                                <li><a href="pckg1_debut.php">Debut Package I</a></li>
                                                                <li><a href="pckg2_debut.html">Debut Package II</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown dropdown-submenu">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Standard Packages</a>
                                                            <ul class="dl-submenu">
                                                                <li><a href="pckg1_standard.html">Standard Package I</a></li>
                                                                <li><a href="pckg2_standard.html">Standard Package II</a></li>
                                                                <li><a href="pckg3_standard.html">Standard Package III</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <!-- .dl-submenu end -->
                                                </li>
                                                <!-- Menu li end -->
                                                <li>
                                                    <a href="#">Menu</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="menu-01.html">Menu 1</a></li>
                                                        <li><a href="menu-02.html">Menu 2</a></li>
                                                        <li><a href="menu-details.html">Menu Details</a></li>
                                                    </ul>
                                                    <!-- .dl-submenu end -->
                                                </li>
                                                <li><a href="reservations.html">Reservations</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li>
                                                    <a href="about.html">About Us</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- (Responsive menu) #dl-menu end -->
                                    </div>
                                    <!-- .navbar.navbar-collapse end -->
                                </nav>
                                <!-- .navbar end -->
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .main-nav end -->
                </div>
                <!-- .container end -->
            </div>
            <!-- .header-inner end -->
        </header>
        <!-- #header end -->
    </div>
    <!-- #header-wrapper end -->

    <!-- .page-content start -->
    <div class="page-content custom-img-background dark page-title page-title-6 mb-100">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12 centered">
                    <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                        <h1><span>King's Wedding</span></h1>
                        <h1>Package</h1>
                    </div>
                    <!-- .custom-heading.style-1 end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>
    <!-- .page-content end -->

    <!-- .page-content start -->
    <div class="page-content">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <div class="col-md-12 centered clearfix">
                    <ul class="tabs">
                        <li class="active">
                            <a href="#tab1">Amenities</a>
                        </li>
                        <li class="">
                            <a href="#tab2">Menu A</a>
                        </li>
                        <li>
                            <a href="#tab3">Menu B</a>
                        </li>
                        <li>
                            <a href="#tab4">Menu C</a>
                        </li>
                    </ul>
                    <!-- .tabs end -->

                    <!-- .tabs-content-wrap start -->
                    <div class="tab-content-wrap">
                        <!-- #tab1 content start -->
                        <div id="tab1" class="tab-content">

                            <ul class="tab-menu-price">
                                <li class="menu-thumbnail">
                                    <img src="img/pics/menu-item-01.png" alt="King & I Events and Catering" />
                                </li>

                            </ul>
                            <div class="custom-heading style-1">
                                <h4>King's Wedding Amenities</h4>

                                <!-- .divider.style-1 start -->
                                <div class="divider style-1 center">
                                    <span class="hr-simple left"></span>
                                    <i class="fa fa-circle hr-icon"></i>
                                    <span class="hr-simple right"></span>
                                </div>
                            </div>
                            <!-- .custom-heading.style-1 end -->
                            <p>
                                <span>(Pricing is per person and includes full service. A minimum of 150 people is required.)</span>
                            </p>
                            <div style="text-align: justify">
                                <ul>
                                    <li>1. Chairs & Tables (w/full length chair cover & mantel)</li>
                                    <li>2. Use of Dinnerware, Flatware & Glassware</li>
                                    <li>3. Buffet Table & Décor</li>
                                    <li>4. Couple Table w/ Attractive Floral Arrangement</li>
                                    <li>5. Elevated Platform for the Bride & Groom</li>
                                    <li>6. Wedding Backdrop Design w/ Floral Arrangement for the Bride & Groom</li>
                                    <li>7. Tiffany Chair for Couple & Presidential</li>
                                    <li>8. Elegant Presidential Table w/ accents of Candles (maximum of 24pax at the presidential tables in excess an additional assessment for additional waiters shall be required)</li>
                                    <li>9. Gift table & Cake table</li>
                                    <li>10. Decorated Cage w/ Doves</li>
                                    <li>11. Trained Waiters & Dishwasher</li>
                                    <li>12. Color Napkin & Water Goblet</li>
                                    <li>13. Carpet and Elegant Flower Arrangement (church & reception)</li>
                                    <li>14. Elegant Centerpiece for each Guest Table</li>
                                    <li>15. Elegant Bridal Entourage</li>
                                    <li>16. Water Dispenser & Purified Water</li>
                                    <li>17. One bottle of wine for toasting ceremony</li>
                                    <li>18. Menu Card</li>
                                    <li>19. Menu Fram for Buffet</li>
                                    <li>20. Table Number</li>
                                    <li>21. 3-Layered Fondant Cake</li>
                                </ul>
                            </div>

                        </div>
                        <!-- #tab1 content end -->

                        <!-- #tab2 content start -->
                        <div id="tab2" class="tab-content">
                            <ul class="tab-menu-price">
                                <li class="menu-thumbnail">
                                    <img src="img/pics/menu-item-02.png" alt="King & I Events and Catering" />
                                </li>
                            </ul>
                            <div class="custom-heading style-1">
                                <h4>King's Wedding Menu A</h4>

                                <!-- .divider.style-1 start -->
                                <div class="divider style-1 center">
                                    <span class="hr-simple left"></span>
                                    <i class="fa fa-circle hr-icon"></i>
                                    <span class="hr-simple right"></span>
                                </div>
                            </div>
                            <!-- .custom-heading.style-1 end -->
                            <p>
                                <span>(Pricing is per person and includes full service. A minimum of 150 people is required.)</span>
                            </p>
                            <h5>Appetizer</h5>
                            <ul>
                                <li>Assorted Nuts</li>
                            </ul>

                            <h5>Soup</h5>
                            <ul>
                                <li>Asparagus</li>
                            </ul>
                            <h5>Main Course</h5>
                            <ul>
                                <li>Pork Hamonado</li>
                                <li>Cordon Bleu</li>
                                <li>Fish Fillet in Sweet and Sour Sauce</li>
                                <li>Buttered Vegetable</li>
                                <li>Rice</li>
                            </ul>
                            <h5>Noodles</h5>
                            <ul>
                                <li>Tuna Pasta</li>
                            </ul>
                            <h5>Dessert</h5>
                            <ul>
                                <li>Buko Pandan</li>
                            </ul>
                            <h5>Beverage</h5>
                            <ul>
                                <li>Iced Tea</li>
                            </ul>


                        </div>
                        <!-- #tab2 content end -->

                        <!-- #tab3 content start -->
                        <div id="tab3" class="tab-content">
                            <div class="custom-heading style-1">
                                <ul class="tab-menu-price">
                                    <li class="menu-thumbnail">
                                        <img src="img/pics/menu-item-11.png" alt="King & I Events and Catering" />
                                    </li>

                                </ul>
                                <h4>King's Wedding Menu B</h4>

                                <!-- .divider.style-1 start -->
                                <div class="divider style-1 center">
                                    <span class="hr-simple left"></span>
                                    <i class="fa fa-circle hr-icon"></i>
                                    <span class="hr-simple right"></span>
                                </div>
                            </div>
                            <!-- .custom-heading.style-1 end -->
                            <p>
                                <span>(Pricing is per person and includes full service. A minimum of 150 people is required.)</span>
                            </p>
                            <h5>Appetizer</h5>
                            <ul>
                                <li>Assorted Nuts</li>
                            </ul>
                            <h5>Soup</h5>
                            <ul>
                                <li>Nido Soup</li>
                            </ul>
                            <h5>Main Course</h5>
                            <ul>
                                <li>Roast Beef with Gravy</li>
                                <li>Pork Pastel</li>
                                <li>Chicken Teriyaki</li>
                                <li>Fish and Tofu in Black Bean Sauce</li>
                                <li>Mixed Vegetable with Quail Egg</li>
                                <li>Rice</li>
                            </ul>
                            <h5>Noodles</h5>
                            <ul>
                                <li>Pansit Canton with Sotanghon</li>
                            </ul>
                            <h5>Dessert</h5>
                            <ul>
                                <li>Fruit Salad</li>
                            </ul>
                            <h5>Beverage</h5>
                            <ul>
                                <li>Mango Juice</li>
                            </ul>

                        </div>
                        <!-- #tab3 content end -->
                        <!-- #tab4 content start -->
                        <div id="tab4" class="tab-content">
                            <div class="custom-heading style-1">
                                <ul class="tab-menu-price">
                                    <li class="menu-thumbnail">
                                        <img src="img/pics/menu-item-13.png" alt="King & I Events and Catering" />
                                    </li>
                                </ul>
                                <h4>King's Wedding Menu C</h4>

                                <!-- .divider.style-1 start -->
                                <div class="divider style-1 center">
                                    <span class="hr-simple left"></span>
                                    <i class="fa fa-circle hr-icon"></i>
                                    <span class="hr-simple right"></span>
                                </div>
                            </div>
                            <!-- .custom-heading.style-1 end -->
                            <p>
                                <span>(Pricing is per person and includes full service. A minimum of 150 people is required.)</span>
                            </p>
                            <h5>Appetizer</h5>
                            <ul>
                                <li>Assorted Nuts</li>
                            </ul>
                            <h5>Soup</h5>
                            <ul>
                                <li>Corn Soup</li>
                            </ul>
                            <h5>Main Course</h5>
                            <ul>
                                <li>Beef Caldereta</li>
                                <li>Pork Kebab</li>
                                <li>Chiken ala King</li>
                                <li>Fish Fillet in Garlic Sauce</li>
                                <li>Stif-Fry Vegetables in Oyster Sauce</li>
                                <li>Rice</li>
                            </ul>
                            <h5>Noodles</h5>
                            <ul>
                                <li>Baked Penne</li>
                            </ul>
                            <h5>Dessert</h5>
                            <ul>
                                <li>Mango Tapioca</li>
                            </ul>
                            <h5>Beverage</h5>
                            <ul>
                                <li>Orange Juice</li>
                            </ul>

                        </div>
                        <!-- #tab4 content end -->
                    </div>
                    <!-- .tab-content-wrap end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
            <!-- .row start -->
            <div class="row">
                <!-- .page-content start -->
                <div class="page-content">
                    <div class="container">
                        <!-- .row start -->
                        <div class="row">
                            <!-- .col-md-4 start -->
                            <div class="col-md-4 col-sm-3 hidden-xs pt-100">
                                <img src="img/pics/img-02.jpg" alt="King & I Events and Catering" />
                            </div>
                            <!-- .col-md-4 end -->

                            <!-- .col-md-4 start -->
                            <div class="col-md-4 col-sm-6 centered pt-150 open-table-widget-style-1">
                                <div class="custom-heading style-1">
                                    <h3><span>Reservation</span></h3>
                                    <h3>Book your event</h3>

                                    <!-- .divider.style-1 start -->
                                    <div class="divider style-1 center">
                                        <span class="hr-simple left"></span>
                                        <i class="fa fa-circle hr-icon"></i>
                                        <span class="hr-simple right"></span>
                                    </div>
                                </div>
                                <!-- .custom-heading.style-1 end -->

                                <!-- Open table widget start -->
                                <div class="otw-bare-bones-style widget open-table-widget triggerAnimation animated" data-animate='fadeIn'>
                                    <div class="otw-bare-bones">
                                        <div class="otw-widget-form-wrap">


                                            <form class="otw-widget-form" onsubmit="return confirm('Please confirm.');" id="submit" method="post" action="insertReservation.php">

                                                <div class="otw-package-wrap otw-input-wrap">
                                                    <input name="package" id="package" class="otw-reservation-name" type="text" value="King Wedding" readonly>
                                                </div>
                                                <div class="otw-menu-wrap otw-input-wrap">
                                                    <select class="otw-reservation-menu selectpicker" name="menu" id="menu">
                    <option value="selected" selected hidden="hidden" disabled>Menu</option>
                    <option value="Menu A">Menu A</option>
                    <option value="Menu B">Menu B</option>
                    <option value="Menu C">Menu C</option> 
                </select>
                                                </div>
                                                <div class="otw-name-wrap otw-input-wrap">
                                                    <input name="name" id="name" class="otw-reservation-name" type="text" placeholder="Full name">
                                                </div>
                                                <div class="otw-email-wrap otw-input-wrap">
                                                    <input name="email" id="email" class="otw-reservation-email" type="text" placeholder="Email Address">
                                                </div>

                                                <div class="otw-phone-wrap otw-input-wrap">
                                                    <input name="phone" id="phone" class="form-control otw-reservation-phone" style="text-indent: 25px;" type="number" placeholder="Contact Number">
                                                </div>
                                                <div class="otw-date-wrap otw-input-wrap">
                                                    <input type="text" name="date" id="date" class="form-control" placeholder="Date of Event">
                                                </div>
                                                <div class="otw-date-wrap otw-input-wrap" hidden="hidden">
                                                    <input type="text" name="day" id="day" class="form-control" placeholder="Day of Event">
                                                </div>

                                                <div class="otw-location-wrap otw-input-wrap">

                                                    <select name="location" id="location" class="form-control">
                <option selected hidden="hidden" disabled value="">Location of Event</option>
                <option value="Lucban, Quezon">Lucban, Quezon</option>
                <option value="Lucena City, Quezon">Lucena City, Quezon</option>
                <option value="Sampaloc, Quezon">Sampaloc, Quezon</option>
                <option value="Mauban, Quezon">Mauban, Quezon</option>
                <option value="Sariaya, Quezon">Sariaya, Quezon</option>
                <option value="Luisiana, Laguna">Luisiana, Laguna</option>
                <option value="Liliw, Laguna">Liliw, Laguna</option>
                <option value="Cavinti, Laguna">Cavinti, Laguna</option>
                <option value="Nagcarlan, Laguna">Nagcarlan, Laguna</option>
                <option value="Others">Others</option> 
            </select>
                                                </div>

                                                <div class="otw-location-wrap otw-input-wrap" hidden>
                                                    <select class="selectpicker rate calculate" id="rate" name="rate" data-rule-required="true">
                <option value="620" id="Lucban, Quezon">620</option>
                <option value="690" id="Lucena City, Quezon">690</option>
                <option value="690" id="Sampaloc, Quezon">690</option>
                <option value="690" id="Luisiana, Laguna">690</option>
                <option value="690" id="Liliw, Laguna">690</option>
                <option value="720" id="Mauban, Quezon">720</option>
                <option value="720" id="Nagcarlan, Laguna">720</option>
                <option value="720" id="Cavinti, Laguna">720</option>
                <option value="720" id="Sariaya, Quezon">720</option>
                <option value="others" id="Others">Others</option>
            </select>
                                                </div>

                                                <div class="otw-party-size-wrap otw-input-wrap">
                                                    <select class="selectpicker pax calculate" id="pax" name="pax" data-rule-required="true">
                <option value="selected" selected disabled hidden="hidden">Party Size</option>    
                <option value="150">150</option>
                <option value="200">200</option>
                <option value="250">250</option>
                <option value="300">300</option>
            </select>
                                                </div>

                                                <div class="otw-input-wrap">
                                                    <input name='total' id='total' class="form-control" readonly data='' />
                                                </div>

                                                <div class="otw-button-wrap">
                                                    <input type="submit" id="btnSubmit" name="submit" class="otw-submit" value="Submit Reservation">

                                                </div>



                                            </form>
                                        </div>
                                        <!-- .otw-widget-form-wrap end -->
                                    </div>
                                </div>
                                <!-- Open table widget end -->
                            </div>
                            <!-- .col-md-4 end -->

                            <!-- .col-md-4 start -->
                            <div class="col-md-4 col-sm-3 hidden-xs pt-100">
                                <img src="img/pics/img-03.jpg" alt="King & I Events and Catering" />
                            </div>
                            <!-- .col-md-4 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .container end -->
                </div>
                <!-- .page-content end -->

                <div class="col-md-12 centered triggerAnimation animated" data-animate='fadeInUp'>
                    <a href="inquiryemail/contact.php" class="btn btn-big black"><span>Need custom menu? Contact us</span></a>
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>
    <!-- .page-content end -->

    <!-- #footer-wrapper start -->
    <div id="footer-wrapper">
        <!-- #footer start -->
        <footer id="footer">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row mb-60">
                    <!-- .col-md-4 start -->
                    <div class="col-md-4">

                    </div>
                    <!-- .col-md-4 end-->

                    <!-- .col-md-4 start -->
                    <div class="col-md-4 centered">
                        <a href="index-2.html">
                            <img src="img/logo.png" alt="King and I">
                        </a>

                        <ul class="contact-info-list">
                            <li>
                                Regidor corner Aguilar St., Lucban, Quezon, 4328
                            </li>
                            <li>
                                <span>Telephone Number:</span> (042) 540-4297
                            </li>

                            <li>
                                <span>Contact Numbers:</span>
                            </li>
                            <li>0908 883 3461</li>
                            <li>0925 512 4167</li>
                            <li>0917 584 7379</li>
                            <li>
                                <span>Email address:</span> sunshinemalaborbor@yahoo.com
                            </li>


                            <li>
                                <span>WORKING HOURS:</span>
                            </li>

                            <li>
                                MON- FRI: 08:00 AM - 10:00 PM
                            </li>
                            <li>SAT - SUN: 10:00 AM - 11:00 PM</li>
                        </ul>
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- .col-md-4 start -->
                    <div class="col-md-4">

                    </div>
                    <!-- .col-md-4 end-->
                </div>
                <!-- .row end -->

            </div>
            <!-- .container end -->
        </footer>
        <!-- #footer end -->
    </div>
    <!-- #footer-wrapper end -->

    <!-- #copyright-container start -->
    <div id="copyright-container">
        <!-- .container start -->
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <p>© 2018. King & I Events and Catering | All rights reserved.</p>
                </div>
                <!-- .col-md-6 end -->

                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="catering.html">Catering Packages</a></li>
                        <li><a href="menu-01.html">Menu</a></li>
                        <li><a href="reservations.html">Reservations</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="about.html">About Us</a></li>
                    </ul>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->

        <a href="#" class="scroll-up"><i class="fa fa-angle-double-up"></i></a>

    </div>
    <!-- .copyright-container end -->
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- jQuery library -->
    <script src="js/bootstrap.min.js"></script>
    <!-- .bootstrap script -->
    <script src="js/jquery.scripts.min.js"></script>
    <!-- modernizr, retina, stellar for parallax -->
    <script src="masterslider/masterslider.min.js"></script>
    <!-- Master slider main js -->
    <script src="masterslider/jquery.easing.min.js"></script>
    <!-- Master slider easing js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- used for image lightbox -->
    <script src="owl-carousel/owl.carousel.min.js"></script>
    <!-- Carousels script -->
    <script src="js/jquery.dlmenu.min.js"></script>
    <!-- for responsive menu -->
    <script src="js/include.js"></script>
    <!-- custom js functions -->
    <script src="js/instagram-stream.jquery.js"></script>
    <!-- instagram stream plugin -->
    <script src="js/TweenMax.min.js"></script>
    <!-- Plugin for smooth scrolling-->
    <script src="js/ScrollToPlugin.min.js"></script>
    <!-- Plugin for smooth scrolling-->



    <script>
        $('.calculate').change(function() {
            var pax = parseInt($('.selectpicker.pax').val());
            var rate = parseInt($('.selectpicker.rate').val());

            if (pax == '150') {
                var total = (pax * rate) + 4500;
                $('#total').val('Php ' + total);
            } else {
                var total = pax * rate;
                $('#total').val('Php ' + total);
            }
            if (isNaN(total) == true) {
                $('#total').val('Please contact us for the package price.');
            }



        });
    </script>


    <script>
        $(document).ready(function() {
            var optarray = $("#rate").children('option').map(function() {
                return {
                    "id": this.id,
                    "option": "<option id='" + this.id + "'>" + this.text + "</option>"
                }
            })

            $("#location").change(function() {
                $("#rate").children('option').remove();
                var addoptarr = [];
                for (i = 0; i < optarray.length; i++) {
                    if (optarray[i].id.indexOf($(this).val()) > -1) {
                        addoptarr.push(optarray[i].option);
                    }
                }
                $("#rate").html(addoptarr.join(''))
            }).change();
        })
    </script>








    <script type="text/javascript">
        $(document).ready(function() {

            $('#btnSubmit').click(function() {

                $(".error").hide();
                var hasError = false;
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

                var emailaddressVal = $("#email").val();
                if (emailaddressVal == '') {
                    $("#email").after('<span class="error">Please enter your email address.</span>');
                    hasError = true;
                } else if (!emailReg.test(emailaddressVal)) {
                    $("#email").after('<span class="error">Enter a valid email address.</span>');
                    hasError = true;
                }

                if (hasError == true) {
                    return false;
                }

            });
        });
    </script>


</body>

</html>