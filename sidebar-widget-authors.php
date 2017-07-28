	          	<aside class="media author-list widget-box" id="author-list-widget">
                <div class="panel panel-info authorlist-panel">
                  <div class="panel-heading">
                    <h4 class="panel-title">Our Authors</h4>
                  </div>

                  <?php

                    $authorcount = 1;

                    while($authorcount<=5) { ?>

                  <div class="panel-body">
                    <div class="col col-lg-3 col-md-3 col-sm-3 hidden-xs authimage-col">
                      <img class="media-object author-image img-rounded img-responsive" src="images/author-tn.jpg" alt="About the Author">
                    </div><!-- /col -->
                    <div class="col col-lg-9 col-md-9 col-sm-9 authdetails-col">
                      <p class="auth-title">Jitendra K</p>
                      <p class="auth-meta">
                        <span class="auth-postcount"><i class="fa fa-file-text-o"></i> 34 Posts</span>
                        <span class="auth-commentcount"><i class="fa fa-comments fa-fw"></i> 21 Comments</span>
                      </p>
                      <a href="http://shoutingwords.com" class="author-website" target="_blank">http://shoutingwords.com</a>
                    </div><!-- /col -->
                  </div><!-- /panel-body -->

                  <?php

                    $authorcount++;

                    } ?>

                </div>
	          	</aside><!-- /.author-list -->