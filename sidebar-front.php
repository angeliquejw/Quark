<?php
/**
 * The sidebar containing the front page widget areas.
 * If there are no active widgets, the sidebar will be hidden completely.
 *
 * @package Quark
 * @since Quark 1.0
 */
?>
	<?php
	// Count how many front page sidebars are active so we can work out how many containers we need
	$homepgSidebars = 0;
	for ( $x=1; $x<=4; $x++ ) {
		if ( is_active_sidebar( 'sidebar-homepage' . $x ) ) {
			$homepgSidebars++;
		}
	}

	// If there's one or more one active sidebars, create a row and add them
	if ( $homepgSidebars > 0 ) {
			// Work out the container class name based on the number of active front page sidebars
					$containerClass = "total_widget-areas_" . $homepgSidebars; ?>
		<div id="secondary" class="home-sidebar <?php echo $containerClass?>">

         <?php
			// Display the active front page sidebars
			for ( $x=1; $x<=4; $x++ ) {
				if ( is_active_sidebar( 'sidebar-homepage'.  $x ) ) { ?>
               <div class="widget-area" role="complementary">
                  <?php dynamic_sidebar( 'sidebar-homepage'.  $x ); ?>
               </div> <!-- #widget-area -->
				<?php }
			} ?>
		</div> <!-- /#secondary.row -->

	<?php } ?>
