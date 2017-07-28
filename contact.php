      <?php get_header(); ?>

          <div class="row">

            <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 center-block" id="map-canvas">
              <!-- Get started here https://developers.google.com/maps/documentation/javascript/tutorial#api_key -->
              <!-- Easily get latitude and longitude of your address at http://mygeoposition.com/ -->
            </div>

          </div><!-- /.row -->

          <div class="row">

            <div class="col-sm-8">
              <h3>Let's Get In Touch!</h3>
              <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              <?php

                    // check for a successful form post
                    if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";

                    // check for a form error
                    elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";

              ?>
                <form role="form" method="POST" action="contact-form-submission.php">
                  <div class="row">
                    <div class="form-group col-lg-4">
                      <label for="contact-name">Name</label>
                      <input type="text" name="contact_name" class="form-control" id="contact-name">
                    </div>
                    <div class="form-group col-lg-4">
                      <label for="contact-email">Email Address</label>
                      <input type="email" name="contact_email" class="form-control" id="contact-email">
                    </div>
                    <div class="form-group col-lg-4">
                      <label for="contact-phone">Phone Number</label>
                      <input type="phone" name="contact_phone" class="form-control" id="contact-phone">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                      <label for="contact-message">Message</label>
                      <textarea name="contact_message" class="form-control" rows="6" id="contact-message"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                      <input type="hidden" name="save" value="contact">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
            </div>

            <div class="col-sm-4">
              <address>
                <h3 class="brand-name">ShoutingWords</h3>
                <h4 class="brand-tagline">About Blogging &amp; Web Technologies</h4>
                <p>
                  5555 44th Street N.<br>
                  Bootstrapville, CA 32323<br>
                </p>
                <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: <a href="tel: +919742100276">(555) 984-3600</a></p>
                <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:info@shoutingwords.com">info@shoutingwords.com</a></p>
                <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                  <li class="tooltip-social facebook-link"><a href="http://facebook.com/shoutingwords" data-toggle="tooltip" data-placement="top" title="Facebook" class="contact-facebook"><span class="fa fa-facebook"></span></a></li>
                  <li class="tooltip-social linkedin-link"><a href="http://linkedin.com" data-toggle="tooltip" data-placement="top" title="LinkedIn" class="contact-linked"><span class="fa fa-linkedin"></span></a></li>
                  <li class="tooltip-social twitter-link"><a href="http://twitter.com/shoutingwords" data-toggle="tooltip" data-placement="top" title="Twitter" class="contact-twitter"><span class="fa fa-twitter"></span></a></li>
                  <li class="tooltip-social google-plus-link"><a href="http://plus.google.com/shoutingwords" data-toggle="tooltip" data-placement="top" title="Google+" class="contact-gplus"><span class="fa fa-google-plus"></span></a></li>
                  <li class="tooltip-social google-plus-link"><a href="skype:jitendrakumar253?chat" data-toggle="tooltip" data-placement="top" title="Skype" class="contact-skype"><span class="fa fa-skype"></span></a></li>
                </ul>
              </address>
            </div>

          </div><!-- /.row -->
        </div><!-- content-container -->
      </div><!-- content-area -->

      <?php get_footer(); ?>