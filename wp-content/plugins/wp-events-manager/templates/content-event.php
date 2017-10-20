<?php
/**
 * The template for displaying event content in the single-event.php template
 *
 * Override this template by copying it to yourtheme/tp-event/templates/content-event.php
 *
 * @author 		ThimPress
 * @package 	tp-event
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * tp_event_before_loop_event hook
	 *
	 */
	 do_action( 'tp_event_before_loop_event' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<li id="event-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		/**
		 * tp_event_before_loop_event_summary hook
		 *
		 * @hooked tp_event_show_event_sale_flash - 10
		 * @hooked tp_event_show_event_images - 20
		 */
		do_action( 'tp_event_before_loop_event_item' );
	?>

	<div class="summary entry-summary">

		<?php

			/**
			 * tp_event_single_event_thumbnail hook
			 */
			do_action( 'tp_event_single_event_thumbnail' );

			/**
			 * tp_event_loop_event_count hook
			 */
			do_action( 'tp_event_loop_event_countdown' );

			/**
			 * tp_event_single_event_title hook
			 */
			do_action( 'tp_event_single_event_title' );

			/**
			 * tp_event_single_event_content hook
			 */
			do_action( 'tp_event_single_event_content' );
		?>

	</div><!-- .summary -->

	<?php
		/**
		 * tp_event_after_loop_event_item hook
		 *
		 * @hooked tp_event_show_event_sale_flash - 10
		 * @hooked tp_event_show_event_images - 20
		 */
		do_action( 'tp_event_after_loop_event_item' );
	?>

</li>

<?php do_action( 'tp_event_after_loop_event' ); ?>
