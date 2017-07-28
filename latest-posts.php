            		<div class="loop posts row latest-posts">
                  
                  <h3 class="latest-post-label">Latest Posts</h3>

                  <?php

                    $postcount = 1;

                    while($postcount<=12) { ?>

                    <div class="col col-lg-4 col-md-3 col-sm-4 col-xs-12">
                      <div class="thumbnail post-thumbnail">
                        <div class="thumb-wrapper hidden-xs">
                          <img src="images/post-thumbnail-01.jpg" alt="Alternate Text" class="img-responsive hidden-print">
                          <a class="cat-label" href="category.php"><span class="label label-success category-label">Category Name</span></a>
                        </div>
                        <div class="caption">
                          <h2><a href="single.php">The Quick Brown Fox Jumped over the Lazy Dogs</a></h2>
                          <p>Borem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat.</p>
                        </div><!-- caption -->
                        <div class="post-meta">
                          <p><a href="#"><span class="glyphicon glyphicon-user"></span> Jitendra</a> <a href="#" class="pull-right"><span class="glyphicon glyphicon-calendar"></span> 30th Oct 2013</a></p>
                        </div><!-- post meta -->
                      </div><!-- thumbnail -->
                    </div><!-- col -->

                  <?php

                    $postcount++;

                    } ?>
            		</div><!-- loop latest posts -->