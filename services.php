      <?php include "_/components/php/header.php"; ?>

          <div class="content row"> 
            <section class="col col-lg-12">
                <h2 class="page-header services-header">Our <span class="header-inner">Services</span></h2>
                <p class="servicesslogan">We are committed to give you the best user experience. We develop solutions which compliment your business, so you can focus on your core operations without worrying about technology</p>
                <div class="row services-row">
                  <div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 service-col">
                    <h3 class="servicetitle">WordPress Development</h3>
                    <img data-src="holder.js/75x75" alt="WordPress Development" class="thumbnail service-thumbnail">
                    <p class="servicedescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div><!-- /col -->
                  <div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 service-col">
                    <h3 class="servicetitle">Copyrighting</h3>
                    <img data-src="holder.js/75x75" alt="WordPress Development" class="thumbnail service-thumbnail">
                    <p class="servicedescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div><!-- /col -->
                  <div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 service-col">
                    <h3 class="servicetitle">Online Research</h3>
                    <img data-src="holder.js/75x75" alt="WordPress Development" class="thumbnail service-thumbnail">
                    <p class="servicedescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div><!-- /col -->
                </div><!-- /services-row --> 
                <div class="row">
                  <div class="col col-lg-12 col-md-12 col-sm-12 service-contactbtn-col">
                    <button class="btn btn-lg btn-danger touch-button" data-toggle="modal" data-target="#service-contact">Get in touch</button>
                  </div><!-- /col -->
                </div><!-- /row -->

                <!-- Modal -->
                <div class="modal fade" id="service-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Get in touch for our Services</h4>
                      </div>
                      <div class="modal-body">
                        <p class="service-contacttext">
                          Please fill up the form below and explain your requirement and let us know how we can help.
                        </p>

                        <form role="form" class="servicecontactform">
                          <div class="row">
                            <div class="form-group col-xs-6">
                              <label for="client-name">Name</label>
                              <input type="text" class="form-control" id="client-name" placeholder="">
                            </div>
                            <div class="form-group col-xs-6">
                              <label for="client-email">Email</label>
                              <input type="email" class="form-control" id="client-email" placeholder="">
                            </div>
                          </div><!-- /row -->
                          <div class="row">
                            <div class="form-group col-xs-6">
                              <label for="client-phone">Phone</label>
                              <input type="tel" class="form-control" id="client-phone" placeholder="">
                            </div>
                            <div class="form-group col-xs-6">
                              <label for="client-website">Website</label>
                              <input type="tel" class="form-control" id="client-phone" placeholder="http://">
                            </div>
                          </div><!-- /row -->
                          <div class="form-group">
                            <label for="client-budget">Budget</label>
                            <select class="form-control" id="client-budget">
                              <option>$ 1000</option>
                              <option>$ 2000</option>
                              <option>$ 5000</option>
                              <option>$ 10000</option>
                              <option>$ 20000</option>
                              <option>$ 50000</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="client-work">What would you like us to do for you?</label>
                            <textarea class="form-control" rows="5" id="client-work"></textarea>
                          </div>
                          <div class="form-group pull-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <p class="servicecontact-footermsg">Thanks for showing your interest in our services</p>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </section><!-- col section -->
          </div><!-- content -->
            
        </div><!-- content-container -->
      </div><!-- content-area -->

      <?php include "_/components/php/footer.php"; ?>