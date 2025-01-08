<?php
/**
 * Template for Single Page
 *
 * @package     Astra
<<<<<<< HEAD
 * @author      Astra
 * @copyright   Copyright (c) 2022, Astra
=======
>>>>>>> bb56ea5 (projet final)
 * @link        https://wpastra.com/
 * @since       Astra 4.0.0
 */

if ( apply_filters( 'astra_single_layout_one_banner_visibility', true ) ) {

	if ( ! ( is_front_page() && 'page' === get_option( 'show_on_front' ) && astra_get_option( 'ast-dynamic-single-page-disable-structure-meta-on-front-page', false ) ) ) {
		?>
			<header class="entry-header <?php astra_entry_header_class(); ?>">
				<?php astra_banner_elements_order(); ?>
			</header> <!-- .entry-header -->
		<?php
	}
}
?>

<div class="entry-content clear"
	<?php
<<<<<<< HEAD
			echo astra_attr(
				'article-entry-content-page',
				array(
					'class' => '',
				)
=======
			echo wp_kses_post(
				astra_attr(
					'article-entry-content-page',
					array(
						'class' => '',
					)
				) 
>>>>>>> bb56ea5 (projet final)
			);
			?>
>

	<?php astra_entry_content_before(); ?>

	<?php the_content(); ?>

	<?php astra_entry_content_after(); ?>

	<?php
		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . esc_html( astra_default_strings( 'string-single-page-links-before', false ) ),
				'after'       => '</div>',
				'link_before' => '<span class="page-link">',
				'link_after'  => '</span>',
			)
		);
		?>

</div><!-- .entry-content .clear -->
