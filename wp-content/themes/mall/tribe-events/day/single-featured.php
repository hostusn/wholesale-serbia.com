<?php
/**
 * Day View Single Featured Event
 * This file contains one featured event in the day view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/day/single-featured.php
 *
 * @version 4.4
 * @package TribeEventsCalendar
 * 
 * @cmsmasters_package 	Mall
 * @cmsmasters_version 	1.1.6
 *
 */


if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$venue_details = tribe_get_venue_details();

// Venue microformats
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

?>

<!-- Event Image -->
<?php echo tribe_event_featured_image( null, 'event-thumb' ) ?>

<div class="cmsmasters_events_list_event_wrap">
	<div class="cmsmasters_events_list_event_info">
		<!-- Event Cost -->
		<?php if ( tribe_get_cost() ) : ?> 
			<div class="tribe-events-event-cost">
				<span><?php echo tribe_get_cost( null, true ); ?></span>
			</div>
		<?php endif; ?>
		
		<!-- Event Title -->
		<?php do_action( 'tribe_events_before_the_event_title' ) ?>
		<h3 class="tribe-events-list-event-title entry-title summary">
			<a class="url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
				<?php the_title() ?>
			</a>
		</h3>
		<?php do_action( 'tribe_events_after_the_event_title' ) ?>
		
		<!-- Event Meta -->
		<?php do_action( 'tribe_events_before_the_meta' ) ?>
		<div class="tribe-events-event-meta vcard">
			<div class="author <?php echo esc_attr( $has_venue_address ); ?>">
				
				<!-- Schedule & Recurrence Details -->
				<div class="updated published time-details cmsmasters_theme_icon_time">
					<?php echo tribe_events_event_schedule_details() ?>
				</div>

				<?php if ( $venue_details ) : ?>
					<!-- Venue Display Info -->
					<div class="tribe-events-venue-details cmsmasters_theme_icon_venue">
						<?php echo implode( ', ', $venue_details ); ?>
					</div> <!-- .tribe-events-venue-details -->
				<?php endif; ?>
				
			</div>
		</div><!-- .tribe-events-event-meta -->
		<?php do_action( 'tribe_events_after_the_meta' ) ?>
	</div>


	<!-- Event Content -->
	<?php do_action( 'tribe_events_before_the_content' ) ?>
	<div class="tribe-events-list-event-description tribe-events-content description entry-summary">
		<?php echo tribe_events_get_the_excerpt(); ?>
		<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark"><?php esc_html_e( 'Find out more', 'mall' ) ?> &raquo;</a>
	</div><!-- .tribe-events-list-event-description -->
	<?php do_action( 'tribe_events_after_the_content' ) ?>
</div>
