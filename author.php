      <?php get_header(); ?>

          <div class="content row">

            <section class="main col col-lg-8">

              <?php include "breadcrumb.php"; ?>

              <div class="row author-info-box">
                  <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">

                    <div class="row">
                      <div class="col col-lg-12 col-md-12 col-sm-12 author-bio">
                        <h3 class="about-author"><a href="#" class="author-name" data-toggle="tooltip" data-placement="top" title="View all posts">Jitendra K</a></h3>
                      </div><!-- /col -->
                    </div><!-- /row -->

                    <div class="row">
                      <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 author-img-container">
                        <img src="images/author-tn.jpg" alt="Author Name" class="img-thumbnail img-responsive">
                      </div><!-- /col -->
                      <div class="col col-lg-10 col-md-10 col-sm-10 col-xs-10 author-bio-container">
                        <p class="author-information">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, iusto cumque impedit voluptate ipsa magni animi possimus facilis maiores eius at consequatur repellat tenetur incidunt sint labore omnis in quibusdam.</p>
                      </div><!-- /col -->
                    </div><!-- /row -->

                    <div class="row">
                      <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="share" id="author-social-links">
                          <ul class="authorsocial list-inline pull-right">
                            <li><a href="https://twitter.com/jitendra_kr" data-toggle="tooltip" data-placement="top" title="Twitter" class="author-twitter" target="_blank"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="https://facebook.com/jitendra.jk" data-toggle="tooltip" data-placement="top" title="Facebook" class="author-facebook" target="_blank"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="https://google.com/+JitendraKumarBLR" data-toggle="tooltip" data-placement="top" title="Google Plus" class="author-gplus" target="_blank"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="http://in.linkedin.com/in/jkumar01/" data-toggle="tooltip" data-placement="top" title="LinkedIn" class="author-linkedin" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="http://www.youtube.com" data-toggle="tooltip" data-placement="top" title="YouTube" class="author-youtube" target="_blank"><span class="fa fa-youtube"></span></a></li>
                            <li><a href="skype:jitendrakumar253?chat" data-toggle="tooltip" data-placement="top" title="Skype" class="author-skype" target="_blank"><span class="fa fa-skype"></span></a></li>
                            <li><a href="http://stackoverflow.com/users/3137090/shoutingwords" data-toggle="tooltip" data-placement="top" title="Stack Overflow" class="author-stack" target="_blank"><span class="fa fa-stack-overflow"></span></a></li>
                          </ul>
                        </div><!-- /author-social-links -->
                      </div><!-- /col -->
                    </div><!-- /row -->

                    <div class="row divider-row"></div>
                  </div><!-- /col-md-12 -->
                </div><!-- /author-info-box -->

                <?php include "author-posts.php"; ?>

                <?php include "pagination.php"; ?>

            </section><!-- main content -->

              <?php get_sidebar(); ?>

          </div><!-- content -->

        </div><!-- content-container -->
      </div><!-- content-area -->

      <?php get_footer(); ?>