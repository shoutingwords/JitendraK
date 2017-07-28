<div class="row recommeded-box">
  <h3 class="recommend-article">Recommended Articles</h2>
	<?php
    $postcount = 1;
    while($postcount<=4) { 
  ?>
  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
    <div class="thumbnail recommend-thumbnail">
      <img data-src="holder.js/100%x180" alt="...">
      <div class="caption">
        <p class="recommend-title">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor
        </p>
      </div><!-- /caption -->
    </div><!-- /thumbnail -->
  </div><!-- /col -->
  <?php
    $postcount++;
  }
  ?>
</div><!-- /row -->