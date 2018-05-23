<?php 
/*
 *	Made by iCubik
 *  https://cubiknode.com
 *
 *  License: MIT
 */

// Custom Page page
$page = 'custom-page'; // Set this to the same as the 'Page URL' on the NamelessMC admin screen
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $sitename; ?> community">
    <meta name="author" content="iCubik">
    <?php if(isset($custom_meta)){ echo $custom_meta; } ?>

    <?php
	$title = 'Custom Page'; // Put the name of the page here, this will appear in the tab
	
	require('core/includes/template/generate.php');
    ?>
	
  </head>
  <body>
  	<?php
	  // Load navbar
	  $smarty->display('styles/templates/' . $template . '/navbar.tpl');
	  ?>
  
  
    <div class="container">
      <div class="row">

        <h2 style="text-align: center;">Page Title</h2><hr />
    
      </div>
    </div>
    
    
    <?php
  	// Footer
  	require('core/includes/template/footer.php');
  	$smarty->display('styles/templates/' . $template . '/footer.tpl');
  	
  	// Scripts 
  	require('core/includes/template/scripts.php');
  	?>
  </body>
</html>
