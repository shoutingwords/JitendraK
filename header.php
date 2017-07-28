<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property='fb:app_id' content='264339827083326' />

    <!-- load favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- insert google map on contact page -->
    <?php
      $currentFile = $_SERVER["PHP_SELF"];
      $parts = Explode('/', $currentFile);
      if ($parts[count($parts) - 1] == "contact.php") {

        include "google-map.php";
      }
    ?>
    <?php wp_head(); ?>
  </head>

  <body class="home">
    <div id="page" class="wrapper">
      <div class="header-area full-width">
        <header class="clearfix">
          <div class="container header-container">
            <div class="content row">
              <div class="col-lg-12">
                <header class="clearfix site-header" id="masthead" >
                  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.php"><img src="images/logo-small.png" alt="ShoutingWords Logo" class="visible-sm visible-xs"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                      <ul class="nav navbar-nav">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-th-list fa-fw"></i> Templates <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="404.php" title="View 404 Template"><i class="fa fa-ban fa-fw"></i> 404</a></li>
                            <li><a href="archive.php" title="View Archive Template"><i class="fa fa-archive fa-fw"></i> Archive</a></li>
                            <li><a href="author.php" title="View Author Template"><i class="fa fa-user fa-fw"></i> Author</a></li>
                            <li><a href="coupon.php" title="View Coupons"><i class="fa fa-gift fa-fw"></i> Coupons</a></li>
                            <li><a href="page.php" title="View Page"><i class="fa fa-edit fa-fw"></i> Page</a></li>
                            <li><a href="portfolio.php" title="View Portfolio"><i class="fa fa-cogs fa-fw"></i> Portfolio</a></li>
                            <li><a href="review.php" title="View Reviews"><i class="fa fa-thumbs-o-up fa-fw"></i> Reviews</a></li>
                            <li><a href="search.php" title="View Search Results Template"><i class="fa fa-search fa-fw"></i> Search Results</a></li>
                            <li><a href="single.php" title="View Single Post Template"><i class="fa fa-globe fa-fw"></i> Single Post</a></li>
                          </ul>
                        </li>

                        <li class="dropdown dropdown-large hidden-sm hidden-xs">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sitemap fa-fw"></i> Categories <b class="caret"></b></a>

                          <ul class="dropdown-menu dropdown-menu-large row">
                            <li class="col-sm-3">
                              <ul>
                                <li class="dropdown-header">Glyphicons</li>
                                <li><a href="#">Available glyphs</a></li>
                                <li class="disabled"><a href="#">How to use</a></li>
                                <li><a href="#">Examples</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Dropdowns</li>
                                <li><a href="#">Example</a></li>
                                <li><a href="#">Aligninment options</a></li>
                                <li><a href="#">Headers</a></li>
                                <li><a href="#">Disabled menu items</a></li>
                              </ul>
                            </li>
                            <li class="col-sm-3">
                              <ul>
                                <li class="dropdown-header">Button groups</li>
                                <li><a href="#">Basic example</a></li>
                                <li><a href="#">Button toolbar</a></li>
                                <li><a href="#">Sizing</a></li>
                                <li><a href="#">Nesting</a></li>
                                <li><a href="#">Vertical variation</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Button dropdowns</li>
                                <li><a href="#">Single button dropdowns</a></li>
                              </ul>
                            </li>
                            <li class="col-sm-3">
                              <ul>
                                <li class="dropdown-header">Input groups</li>
                                <li><a href="#">Basic example</a></li>
                                <li><a href="#">Sizing</a></li>
                                <li><a href="#">Checkboxes and radio addons</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Navs</li>
                                <li><a href="#">Tabs</a></li>
                                <li><a href="#">Pills</a></li>
                                <li><a href="#">Justified</a></li>
                              </ul>
                            </li>
                            <li class="col-sm-3">
                              <ul>
                                <li class="dropdown-header">Navbar</li>
                                <li><a href="#">Default navbar</a></li>
                                <li><a href="#">Buttons</a></li>
                                <li><a href="#">Text</a></li>
                                <li><a href="#">Non-nav links</a></li>
                                <li><a href="#">Component alignment</a></li>
                                <li><a href="#">Fixed to top</a></li>
                                <li><a href="#">Fixed to bottom</a></li>
                                <li><a href="#">Static top</a></li>
                                <li><a href="#">Inverted navbar</a></li>
                              </ul>
                            </li>
                          </ul>

                        </li><!-- /dropdown-large -->

                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-upload"></i> Submit <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Guest Post</a></li>
                            <li><a href="#">Post Idea</a></li>
                            <li><a href="#">Service Request</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> Follow us <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                              <li><a href="https://www.facebook.com/shoutingwords"><i class="fa fa-facebook fa-fw"></i> Facebook</a></li>
                              <li><a href="https://twitter.com/shoutingwords"><i class="fa fa-twitter fa-fw"></i> Twitter</a></li>
                              <li><a href="http://google.com/+shoutingwords"><i class="fa fa-google-plus fa-fw"></i> Google+</a></li>
                              <li><a href="#"><i class="fa fa-envelope fa-fw"></i> Email Updates</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-info"></i> <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                              <li><a href="about.php" title="Who we are?">About us</a></li>
                              <li><a href="services.php" title="Our Services">Services</a></li>
                              <li class="divider"></li>
                              <li><a href="contact.php" title="View Contact Template">Contact</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                              <li><a href="#">Guest Posting Guideline</a></li>
                          </ul>
                        </li>

                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                          <ul class="dropdown-menu search-bar-top">
                            <li>
                              <form action="search.php" method="get" class="input-group header-searchform">
                                <input type="search" name="search" placeholder="Enter keyword or phrase" autocomplete="off" class="form-control search-bar-top" id="search_text">
                                <!-- <span class="input-group-btn">
                                  <button type="submit" class="btn btn-primary" value="Search"><i class="fa fa-search"></i></button>
                                </span> -->
                              </form>
                            </li>
                          </ul>
                        </li>

                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </nav>

                  <section id="branding" class="row clearfix">
                    <div class="col col-lg-3 col-md-2 logo-area">
                      <a href="index.php"><img src="<?php echo get_template_directory_uri() . "/images/logo.png"; ?>" alt= "Site Logo" class="logo hidden-xs hidden-sm"></a>
                    </div>
                    <div class="col col-lg-9 col-md-10 hidden-xs banner-ad">
                      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                      <!-- Top banner -->
                      <ins class="adsbygoogle"
                           style="display:inline-block;width:728px;height:90px"
                           data-ad-client="ca-pub-3035865041709625"
                           data-ad-slot="7507961874"></ins>
                      <script>
                      (adsbygoogle = window.adsbygoogle || []).push({});
                      </script>
                    </div>
                  </section><!-- branding -->

                </header><!-- header -->
              </div><!-- column -->
            </div><!-- content -->
          </div><!-- header-container -->
        </header><!-- header -->
      </div><!-- header-area -->

      <div class="content-area full-width clearfix">
        <div class="container content-container">