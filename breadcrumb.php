<div class="container breadcrumb-container">
  <ol class="breadcrumb single-breadcrumb">

  	<?php
	      $currentFile = $_SERVER["PHP_SELF"];
	      $parts = Explode('/', $currentFile);
	      if ($parts[count($parts) - 1] == "index.php") { ?>
	      
	  			<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
			    <li><a href="#">Post Type</a></li>
			    <li><a href="#">Category</a></li>
			    <li><a href="#">Sub Category</a></li>
			    <li class="active">The Quick Brown Fox Jumped over the Lazy Dogs</li>
	  		<?php }
	  		else if ($parts[count($parts) - 1] == "author.php") { ?>

	  			<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
			    <li><a href="#">Authors</a></li>
			    <li><a href="#">Posts by Jitendra K</a></li>
	  		<?php }

	  		else if ($parts[count($parts) - 1] == "archive.php") { ?>
	  			<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
			    <li><a href="#">Archive</a></li>
			    <li><a href="#">Archive Type</a></li>

	  		<?php 
	  		}
	  		else if ($parts[count($parts) - 1] == "page.php") { ?>
	  			<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
			    <li><a href="#">Page Title</a></li>

	  		<?php 
	  		}
	  		else { ?>
		      <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
			    <li><a href="#">Post Type</a></li>
			    <li><a href="#">Category</a></li>
			    <li><a href="#">Sub Category</a></li>
			    <li class="active">The Quick Brown Fox Jumped over the Lazy Dogs</li>
	  		<?php }
	  ?>
    
  </ol><!-- /breadcrumb -->
</div><!-- /breadcrumb-container -->