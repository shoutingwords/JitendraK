      <?php include "_/components/php/header.php"; ?>

          <div class="content row">
          
            <section class="main col col-lg-8">

              <?php include "_/components/php/breadcrumb.php"; ?>

              <article>
                <header class="entry-title">
                  <h1>The Quick Brown Fox Jumped over the Lazy Dogs</h1>
                  <div class="entry-meta clearfix">
                    <ul class="byline list-inline pull-left">
                      <li><a href="#"><span class="fa fa-user fa-fw"></span> Jitendra</a></li>
                      <li><a href="#"><span class="fa fa-calendar fa-fw"></span> November 25, 2013</a></li>
                      <li><a href="#"><span class="fa fa-comments fa-fw"></span> 15 Comments</a></li>
                    </ul>
                    <ul class="post-nav pull-right list-inline hidden-xs">

                      <li>
                        <a href="#" class="btn btn-info" title="Previous Post"><i class="fa fa-chevron-left"></i></a>
                      </li>

                      <li>
                        <a href="#" class="btn btn-info" title="Random Post - Post Title"><i class="fa fa-random"></i></a>
                      </li>

                      <li>
                        <a href="#" class="btn btn-info" title="Next Post"><i class="fa fa-chevron-right"></i></a>
                      </li>

                    </ul>
                  </div><!-- /post-meta -->
                </header><!-- /entry-title -->
                <div class="entry-content">
                
                  <!-- Below alert would come dynamically using code -->
                  <div class="alert alert-info alert-dismissable guest-author-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p><span class="fa fa-info-circle fa-lg"></span> This is a guest post by <a href="#" class="author-name alert-link">Author Name</a>. View <a href="#" class="author-all-posts alert-link">all posts</a> by this author.</p>
                  </div>

                  <p class="lead">
                    This is a lead body content. <code>.lead</code> class is used in Bootstrap to stand out a paragraph. I hope you know its usage.
                  </p>

                  <p><span class="dropcap">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <figure>
                    <img src="images/post-content-image.jpg" alt="Post Image" class="img-responsive">
                    <figcaption>
                      <p>This is image caption</p>
                    </figcaption>
                  </figure>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <div id="video-container" class="post-videos">
                  <iframe src="//www.youtube.com/embed/YXVoqJEwqoQ" height="360" width="640" allowfullscreen="" frameborder="0"></iframe>
                  <ul class="share-video-overlay" id="share-video-overlay">
                    <li class="facebook" id="facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fyoutube.com/watch%3Fv%3DYXVoqJEwqoQ" target="_blank"><i class="fa fa-facebook fa-fw"></i> Facebook</a></li>
                    <li class="twitter" id="twitter"><a href="http://www.twitter.com/share?&text=Check+this+video&amp;url=http%3A//www.youtube.com/watch%3Fv%3DYXVoqJEwqoQ"><i class="fa fa-twitter fa-fw"></i> Tweet</a></li>
                  </ul>
                </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                  </blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.</p>
                  <pre class="pre-scrollable prettyprint linenums">
                    .post-meta p {
                        padding: 5px 10px 5px 10px; 
                        margin: 0;
                        font-family: @headlinefontfamily;
                        font-size: 12px;
                    }
                    .post-meta p a:hover {
                        text-decoration: none; 
                    }
                    .latest-posts {
                        margin-bottom: 20px;
                    }
                    .post-container {
                        padding-left: 0;
                        padding-right: 30px;
                    }
                  </pre>
                  <p>You may optionally add the <code>.pre-scrollable</code> class, which will set a max-height of 350px and provide a y-axis scrollbar.</p>

                </div>

                <div class="tags row">
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="tag-list">
                      <span class="text-muted"><i class="fa fa-tags"></i> Tags: </span>
                      <a href="#" class="btn btn-primary btn-xs" title="Tag Description">WordPress</a>
                      <a href="#" class="btn btn-primary btn-xs" title="Tag Description">Search</a>
                      <a href="#" class="btn btn-primary btn-xs" title="Tag Description">New Feature</a>
                      <a href="#" class="btn btn-primary btn-xs" title="Tag Description">Upgrade</a>
                    </p><!-- /tag-list -->
                  </div><!-- /col -->
                </div><!-- /tags -->

                <div class="row">
                  <div class="col col-lg-12 col-md-12">
                    <div class="share" id="sharethispost">
                      <h3 class="pull-left">Share this post</h3>
                      <ul class="shareicons list-inline pull-right">
                        <li>
                          <a data-toggle="tooltip" data-placement="top" href="http://www.twitter.com/share?url=http://wpboottheme.dev/single.php" title="Share on Twitter" target="_blank" class="sharepost-twitter"><span class="fa fa-twitter"></span></a>
                        </li>
                        <li>
                          <a data-toggle="tooltip" data-placement="top" href="http://www.facebook.com/sharer.php?u=http://wpboottheme.dev/single.php&t=Standart post" title="Share on Facebook" target="_blank" class="sharepost-facebook"><span class="fa fa-facebook"></span></a>
                        </li>
                        <li>
                          <a data-toggle="tooltip" data-placement="top" href="http://linkedin.com/shareArticle?mini=true&url=http://wpboottheme.dev/single.php&title=Standart post" title="Share on LinkedIn" target="_blank" class="sharepost-linkedin"><span class="fa fa-linkedin"></span></a>
                        </li>
                        <li>
                          <a data-toggle="tooltip" data-placement="top" href="https://plus.google.com/share?url=http://wpboottheme.dev/single.php&title=Standart post" title="Share on GPlus" target="_blank" class="sharepost-gplus"><span class="fa fa-google-plus"></span></a>
                        </li>
                        <li>
                          <a data-toggle="tooltip" data-placement="top" href="http://www.tumblr.com/share/link?url=http://wpboottheme.dev/single.php&name=Standart+post&description=Post Description" title="Share on Tumblr" target="_blank" class="sharepost-tumblr"><span class="fa fa-tumblr"></span></a>
                        </li>
                      </ul><!-- /shareicons -->
                    </div><!-- /sharethispost -->
                  </div><!-- /col -->                  
                </div><!-- /row -->

                <div class="row author-info-box">
                  <div class="col-md-12">

                    <div class="row">
                      <div class="col col-lg-12 col-md-12 col-sm-12 author-bio">
                        <h3 class="about-author">About the Author / <a href="#" class="author-name" data-toggle="tooltip" data-placement="top" title="View all posts">Jitendra</a></h3>
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
                        </div>
                      </div>
                    </div><!-- /author-social-links -->

                    <div class="row divider-row"></div>
                    
                  </div><!-- /col-md-12 -->
                </div><!-- /author-info-box -->

                <?php include "_/components/php/pager.php"; ?>

                <?php include "_/components/php/recommended-posts.php"; ?>

                <footer class="row comments-meta">
                  <!-- WordPress comments -->

                  <!-- facebook comments -->
                  <div class="col col-lg-12 col-md-12 hidden-xs">
                    <div id="fb-root"></div>
                    <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
                    <fb:comments href="http://shoutingwords.com" width="100%"></fb:comments>
                  </div><!-- /col -->
                </footer> <!-- /comments-meta -->

              </article>
              
            </section><!-- main content -->

              <?php include "_/components/php/sidebar.php"; ?>

          </div><!-- content -->
            
        </div><!-- content-container -->
      </div><!-- content-area -->

      <?php include "_/components/php/footer.php"; ?>