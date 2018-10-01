<?php
session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: .././index.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: .././index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Spartans Hub - Always Strive for Excellence </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, light bootstrap 4 dashboard, frontend, responsive bootstrap dashboard">
    <meta name="description" content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta itemprop="description" content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta name="twitter:description" content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <meta name="twitter:data1" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="$39">
    <meta name="twitter:label2" content="Price">
    <!-- Open Graph data -->
    <meta property="og:title" content="Light Bootstrap Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg" />
    <meta property="og:description" content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful." />
    <meta property="og:site_name" content="Creative Tim" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min1.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard1.css?v=2.0.1" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo1.css" rel="stylesheet" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>

    <!-- End Google Tag Manager -->
    </head>

    <body>
      <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <!--a href="https://www.creative-tim.com" class="simple-text logo-mini">
                        Spartans Hub
                    </a-->
                    <a href="http://www.admin.spartanshub.com" class="simple-text logo-normal">
                        Spartans Hub
                    </a>
                </div>
                <div class="user">
                    <div class="photo">
                        <img src="assets/img/default-avatar.png" />
                    </div>
                    <div class="info ">

                        <a data-toggle="collapse" class="collapsed">
                        <!--a data-toggle="collapse" href="#collapseExample" class="collapsed"-->


                        <!-- logged in user information -->
                        <?php  if (isset($_SESSION['username'])) : ?>
                            <span><b><?php echo $_SESSION['username']; ?></b>
                                <!--b class="caret"></b-->
                            </span>
                            <?php endif ?>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a class="profile-dropdown" href="#pablo">
                                        <span class="sidebar-mini">MP</span>
                                        <span class="sidebar-normal">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="profile-dropdown" href="#pablo">
                                        <span class="sidebar-mini">EP</span>
                                        <span class="sidebar-normal">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="profile-dropdown" href="#pablo">
                                        <span class="sidebar-mini">S</span>
                                        <span class="sidebar-normal">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="./dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                            <i class="pe-7s-science"></i>
                            <p>
                                Products
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="componentsExamples">
                            <ul class="nav">
                              <li class="nav-item ">
                                  <a class="nav-link" href="./product_android.php">
                                      <span class="sidebar-mini">A</span>
                                      <span class="sidebar-normal">Android</span>
                                  </a>
                              </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="./product_ai.php">
                                        <span class="sidebar-mini">AI</span>
                                        <span class="sidebar-normal">Artificial Intelligence</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="./product_ml.php">
                                        <span class="sidebar-mini">ML</span>
                                        <span class="sidebar-normal">Machine Learning</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="./product_iot.php">
                                        <span class="sidebar-mini">IOT</span>
                                        <span class="sidebar-normal">Internet Of Things</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="./product_plugins.php">
                                        <span class="sidebar-mini">P</span>
                                        <span class="sidebar-normal">Plugins</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="./product_security.php">
                                        <span class="sidebar-mini">S</span>
                                        <span class="sidebar-normal">Security</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="./product_web.php">
                                        <span class="sidebar-mini">Web</span>
                                        <span class="sidebar-normal">Web Development</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                              <i class="nc-icon nc-notes"></i>
                              <p>
                                  Services
                                  <b class="caret"></b>
                              </p>
                          </a>
                          <div class="collapse " id="formsExamples">
                              <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="./products/extended.html">
                                        <span class="sidebar-mini">G</span>
                                        <span class="sidebar-normal">Graphic Design</span>
                                    </a>
                                </li>
                                  <li class="nav-item ">
                                      <a class="nav-link" href="./forms/regular.html">
                                          <span class="sidebar-mini">H</span>
                                          <span class="sidebar-normal">Hosting</span>
                                      </a>
                                  </li>
                                  <li class="nav-item ">
                                      <a class="nav-link" href="./forms/wizard.html">
                                          <span class="sidebar-mini">S</span>
                                          <span class="sidebar-normal">Systems</span>
                                      </a>
                                  </li>
                                  <li class="nav-item ">
                                      <a class="nav-link" href="./forms/validation.html">
                                          <span class="sidebar-mini">UI</span>
                                          <span class="sidebar-normal">User Interface Design</span>
                                      </a>
                                  </li>
                                  <li class="nav-item ">
                                      <a class="nav-link" href="./forms/validation.html">
                                          <span class="sidebar-mini">W</span>
                                          <span class="sidebar-normal">Web Design</span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon d-none d-lg-block">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Spartans Hub</a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="nav navbar-nav mr-auto">
                            <form class="navbar-form navbar-left navbar-search-form" role="search">
                                <div class="input-group">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="./product_reg.php">Register Product</a>
                                    <a class="dropdown-item" href="./service_reg.php">Register Services</a>
                                    <a class="dropdown-item" href="./employee_reg.php">Register Employee</a>
                                    <a class="dropdown-item" href="./client_reg.php">Register Client</a>
                                    <li class="divider"></li>
                                    <a class="dropdown-item" href="./assign_project.php">Assign Project</a>
                                    <!--a class="dropdown-item" href="#">Another action</a-->
                                </ul>
                            </li>
                            <!--li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Notification 5</a>
                                </ul>
                            </li-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="https://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-bullet-list-67"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <!--a class="dropdown-item" href="#">
                                        <i class="nc-icon nc-email-85"></i> Messages
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="nc-icon nc-umbrella-13"></i> Help Center
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="nc-icon nc-settings-90"></i> Settings
                                    </a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="nc-icon nc-lock-circle-open"></i> Lock Screen
                                    </a-->
                                    <a href="?logout='1'" class="dropdown-item text-danger">
                                        <i class="nc-icon nc-button-power"></i> Log out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
