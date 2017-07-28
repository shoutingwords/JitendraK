              <aside class="clearfix widget-box" id="social-media-widget">
                <div class="row">
                  <div class="col col-lg-12">

                    <div class="social-counter col col-lg-3 col-md-3 col-sm-3 col-xs-6" id="rss-counter">
                        <div class="social-logo" id="email-logo">
                          <i class="fa fa-envelope fa-2x"></i>
                        </div>
                        <div class="social-count">
                          <span class="user-count-label clearfix">
                            542
                          </span>
                          <span class="social-label"><em>Subscribers</em></span>
                        </div>
                    </div><!-- /rss-counter -->

                    <div class="social-counter col col-lg-3 col-md-3 col-sm-3 col-xs-6" id="facebook-counter">
                        <div class="social-logo" id="facebook-logo">
                          <i class="fa fa-facebook fa-2x"></i>
                        </div>
                        <div class="social-count">
                          <span class="user-count-label clearfix">
                            <?php
                              // find your page ID here http://findmyfacebookid.com/
                              $page_id = "188443896487";
                              $xml = @simplexml_load_file("http://api.facebook.com/restserver.php?method=facebook.fql.query&query=SELECT%20fan_count%20FROM%20page%20WHERE%20page_id=".$page_id."") or die ("a lot");
                              $fans = $xml->page->fan_count;
                              echo $fans;
                            ?>
                          </span>
                          <span class="social-label"><em>Fans</em></span>
                        </div>
                    </div><!-- /facebook-counter -->

                    <div class="social-counter col col-lg-3 col-md-3 col-sm-3 col-xs-6" id="twitter-counter">
                        <div class="social-logo" id="twitter-logo">
                          <i class="fa fa-twitter fa-2x"></i>
                        </div>
                        <div class="social-count">
                          <span class="user-count-label clearfix">
                            700
                          </span>
                          <span class="social-label"><em>Followers</em></span>
                        </div>
                    </div><!-- /twitter-counter -->

                    <div class="social-counter col col-lg-3 col-md-3 col-sm-3 col-xs-6" id="youtube-counter">
                        <div class="social-logo" id="youtube-logo">
                          <i class="fa fa-youtube fa-2x"></i>
                        </div>
                        <div class="social-count">
                          <span class="user-count-label clearfix">
                            <?php
                              $name = 'labnol';
                              $url   = 'http://gdata.youtube.com/feeds/api/users/'. urlencode($name).'?alt=json';
                              $json  = @file_get_contents($url); // Naughty @-operator, use proper error handling
                              $data  = json_decode($json, TRUE);
                              $count = (int) $data['entry']['yt$statistics']['subscriberCount'];

                              echo $count;
                            ?>
                          </span>
                          <span class="social-label"><em>Subscribers</em></span>
                        </div>
                    </div><!-- /youtube-counter -->

                  </div><!-- /col -->
                </div><!-- /row -->
          		</aside><!-- /social-media-widget -->