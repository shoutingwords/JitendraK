                <aside class="widget-box" id="fb-page">
                  <div class="row">
                    <div class="col col-lg-12 col-md-6 col-sm-6">
                      
                      <div id="fb-container" style="width: 100%;">
						  					<div class="fb-like-box" data-width="360" data-href="https://www.facebook.com/shoutingwords" data-show-faces="true" data-stream="false" data-header="false" data-show-border="false"></div>
											</div>
						 
											<div id="fb-root"></div>
											<script>
											(function(d, s, id) {
											  var js, fjs = d.getElementsByTagName(s)[0];
											  if (d.getElementById(id)) return;
											  js = d.createElement(s); js.id = id;
											  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=178038655566817";
											  fjs.parentNode.insertBefore(js, fjs);
											}(document, 'script', 'facebook-jssdk'));
											 
											 
											$(window).bind("load resize", function(){    
											  var container_width = $('#fb-container').width();    
											    $('#fb-container').html('<div class="fb-like-box" ' + 
											    'data-href="https://www.facebook.com/shoutingwords"' +
											    ' data-width="' + container_width + '" data-show-faces="false" ' +
											    'data-stream="false" data-header="false" data-show-border="false"></div>');
											    FB.XFBML.parse( );    
											}); 
											</script>
                    </div><!-- /col -->
                  </div><!-- /row -->
                </aside><!-- /subscribe -->