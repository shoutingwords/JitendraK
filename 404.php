      <?php get_header(); ?>

          <div class="content row">
              <section class="main col col-lg-8">

                <div class="row">
                  <div class="col col-lg-12">
                    <div class="well well-lg content-not-found">
                      <h1>Nothing Found <small>Error 404</small></h1>
                      <p>The page you requested could not be found. This could be either because of a typo error or the page does not exist. You can view the popular posts below, search the content you are looking for or use your browsers <b>Back</b> button to navigate to the page you have prevously come from.</p>
                      <p>If everything else fails, you could just press this neat little button:</p>
                      <a href="shoutingwords.com" class="btn btn-large btn-danger" title="Take me Home"><i class="fa fa-home"></i> Take Me Home</a>
                    </div><!-- content not found -->
                  </div><!-- col -->
                </div><!-- row -->

                <div class="row" id="search-404">
                  <div class="col col-lg-6">
                    <div class="searchbar">
                      <div class="input-group">
                        <span class="input-group-btn">
                          <button class="btn btn-primary" type="button">Search!</button>
                        </span>
                        <input type="text" class="form-control">
                      </div><!-- /input-group -->
                    </div><!-- searchbar -->
                  </div><!-- col-lg-6 -->
                  <div class="col col-lg-6">

                  </div><!-- /col-lg-6 -->
                </div><!-- row -->

                <?php include "popular-posts.php"; ?>

              </section><!-- main content -->

              <?php get_sidebar(); ?>

            </div><!-- content -->

        </div><!-- content-container -->
      </div><!-- content-area -->

      <?php get_footer(); ?>