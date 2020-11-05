<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(Setting::get('site_title','Tranxit')); ?></title>

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="<?php echo e(Setting::get('site_icon')); ?>"/>

    <link href="<?php echo e(asset('asset/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/css/style.css')); ?>" rel="stylesheet">
</head>

<body>

    <div id="wrapper">
        <div class="overlay" id="overlayer" data-toggle="offcanvas"></div>


             <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <li>                   
                    </li>
                    <li class="full-white">
                        <a href="<?php echo e(url('/register')); ?>">GET A SERVICE</a>
                    </li>
                    <li class="white-border">
                        <a href="<?php echo e(url('/provider/login')); ?>">BECOME A <?php echo app('translator')->get('main.provider'); ?></a>
                    </li>

                    <li>
                        <a href="<?php echo e(url('/privacy')); ?>">Privacy Policy</a>
                    </li>

                </ul>
            </nav>
            <!-- /#sidebar-wrapper -->

            <div id="page-content-wrapper">

            <header>
                <nav class="navbar navbar-fixed-top">
                  <div class="container-fluid">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>

                      <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                    </button>

                      <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(Setting::get('site_logo',asset('asset/img/logo.png'))); ?>"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="<?php echo e(url('/login')); ?>">Signin</a></li>
                      <li><a class="menu-btn" href="<?php echo e(url('/provider/login')); ?>">Become a <?php echo app('translator')->get('main.provider'); ?></a></li>
                    </ul>
                    </div>
                  </div>
                </nav>
            </header>

            <?php echo $__env->yieldContent('content'); ?>
                <div class="page-content no-margin">

                    <div class="footer home-footer row no-margin no-padding">
                        
                        <div class="store-strip white-bg row no-margin">
                            <div class="container">
                                <div class="col-md-6">
                                    <h5>Download the app to enjoy the services</h5>
                                </div>

                                <div class="col-md-6 text-right">
                                    <a href="<?php echo e(Setting::get('app_store_link','#')); ?>">
                                        <img src="<?php echo e(asset('asset/img/appstore.png')); ?>">
                                    </a>
                                    <a href="<?php echo e(Setting::get('play_store_link','#')); ?>">
                                        <img src="<?php echo e(asset('asset/img/playstore.png')); ?>">
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="store-strip gray-bg row no-margin">
                            <div class="container">
                                <div class="col-md-6 ">
                                    <a href="<?php echo e(Setting::get('app_store_link','#')); ?>">
                                        <img src="<?php echo e(asset('asset/img/appstore.png')); ?>">
                                    </a>
                                    <a href="<?php echo e(Setting::get('play_store_link','#')); ?>">
                                        <img src="<?php echo e(asset('asset/img/playstore.png')); ?>">
                                    </a>
                                </div>

                                <div class="col-md-6 text-right">
                                    <h5>Download the app to become a service <?php echo app('translator')->get('main.provider'); ?></h5>
                                </div>

                                

                            </div>
                        </div>
                            
                        <div class="row no-margin">
                                <div class="col-md-12 copy no-margin">
                                    <p>Copyrights <?php echo e(date('Y')); ?> <?php echo e(Setting::get('site_title','Tranxit')); ?>.</p>
                                </div>
                        </div>

                    </div>
                </div>
            </div>


    </div>

    <script src="<?php echo e(asset('asset/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/js/scripts.js')); ?>"></script>

</body>
</html>
