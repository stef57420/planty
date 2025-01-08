<?php
/**
 * Template for Primary Header
 *
 * The header layout 2 for Astra Theme. ( No of sections - 1 [ Section 1 limit - 3 )
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package     Astra
<<<<<<< HEAD
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
=======
>>>>>>> bb56ea5 (projet final)
 * @link        https://wpastra.com/
 * @since       Astra 1.0.0
 */

?>

<div class="main-header-bar-wrap">
<<<<<<< HEAD
	<div <?php echo astra_attr( 'main-header-bar' ); ?>>
=======
	<div <?php echo wp_kses_post( astra_attr( 'main-header-bar' ) ); ?>>
>>>>>>> bb56ea5 (projet final)
		<?php astra_main_header_bar_top(); ?>
		<div class="ast-container">

			<div class="ast-flex main-header-container">
				<?php astra_masthead_content(); ?>
			</div><!-- Main Header Container -->
		</div><!-- ast-row -->
		<?php astra_main_header_bar_bottom(); ?>
	</div> <!-- Main Header Bar -->
</div> <!-- Main Header Bar Wrap -->
