<?php
/**
 * Template part for displaying the footer info.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

?>
<footer
<<<<<<< HEAD
<?php 
echo astra_attr(
	'footer',
	array(
		'id'    => 'colophon',
		'class' => join(
			' ',
			astra_get_footer_classes()
		),
	)
=======
<?php
echo wp_kses_post(
	astra_attr(
		'footer',
		array(
			'id'    => 'colophon',
			'class' => join(
				' ',
				astra_get_footer_classes()
			),
		)
	) 
>>>>>>> bb56ea5 (projet final)
);
?>
>
	<?php
		astra_footer_content_top();
	?>
		<?php
		/**
		 * Astra Top footer
		 */
		do_action( 'astra_above_footer' );
		/**
		 * Astra Middle footer
		 */
		do_action( 'astra_primary_footer' );
		/**
		 * Astra Bottom footer
		 */
		do_action( 'astra_below_footer' );
		?>
	<?php
		astra_footer_content_bottom();
	?>
</footer><!-- #colophon -->
