          <section class="sidebar col col-lg-4">

      			<div class="sidebar-content">

      			<?php
	              $currentFile = $_SERVER["PHP_SELF"];
	              $parts = Explode('/', $currentFile);
	              if ($parts[count($parts) - 1] == "coupon.php") {

            			include "sidebar-widget-couponsubscribe.php";
            		}
            		else if ($parts[count($parts) - 1] == "review.php") {

            			include "sidebar-widget-reviewsubscribe.php";
            		}
            		else
            		{
						      include "sidebar-widget-subscribe.php";
            		}
				    ?>

              <?php
                  $currentFile = $_SERVER["PHP_SELF"];
                  $parts = Explode('/', $currentFile);
                  if ($parts[count($parts) - 1] == "index.php") {

                  include "sidebar-widget-socialcounter.php";
                  }
              ?>

              <?php
                  $currentFile = $_SERVER["PHP_SELF"];
                  $parts = Explode('/', $currentFile);
                  if ($parts[count($parts) - 1] == "author.php") {

                  include "sidebar-widget-authors.php";
                  }
              ?>

	            <?php
	              $currentFile = $_SERVER["PHP_SELF"];
	              $parts = Explode('/', $currentFile);
	              if ($parts[count($parts) - 1] == "index.php") {

            			include "sidebar-widget-authorbox.php";
            		}
				      ?>

	              <?php include "sidebar-widget-advertise.php"; ?>

                <?php include "sidebar-widget-tabber.php"; ?>

                <?php include "sidebar-widget-gpluspage.php"; ?>

                <?php include "sidebar-widget-fb.php"; ?>

                <?php include "sidebar-widget-adsense.php"; ?>

      			</div><!-- sidebar content -->

          </section><!-- sidebar -->