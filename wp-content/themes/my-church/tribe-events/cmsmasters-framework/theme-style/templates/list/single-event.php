<?php
/**
 * @cmsmasters_package 	My Church
 * @cmsmasters_version 	1.0.2
 */


$venue_details = tribe_get_venue_details();

// Venue microformats
$has_venue = ( $venue_details ) ? ' vcard' : '';
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

?>

<div class="cmsmasters_events_list_event_wrap">
		<?php 
			// Show image if the Featured Image is set for the event
			$event_image_html = my_church_thumb(get_the_ID(), 'post-thumbnail', false, true, true, false, false, false, false); 
			if(!strrpos($event_image_html, "img_placeholder")) {
				echo '<div class="tribe-events-event-image">';
				echo $event_image_html;
				echo '</div>';
			}
		?>
		
		<div class="cmsmasters_event_big_date">
		<div class="cmsmasters_event_big_day"><?php echo tribe_get_start_date(null, false, 'd'); ?></div>
		<div class="cmsmasters_event_big_date_ovh">
			<div class="cmsmasters_event_big_month"><?php echo tribe_get_start_date(null, false, 'F'); ?></div>
			<div class="cmsmasters_event_big_week"><?php echo tribe_get_start_date(null, false, 'l'); ?></div>
		</div>
	</div>
	<div class="cmsmasters_events_list_event_info">
		<!-- Event Title -->
		<?php do_action( 'tribe_events_before_the_event_title' ) ?>
		<h2 class="tribe-events-list-event-title entry-title summary">
			<a class="url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
				<?php the_title() ?>
			</a>
		</h2>
		<?php do_action( 'tribe_events_after_the_event_title' ) ?>
		
		<!-- Event Meta -->
		<?php do_action( 'tribe_events_before_the_meta' ) ?>
		<div class="tribe-events-event-meta vcard">
			<div class="author <?php echo esc_attr( $has_venue_address ); ?>">
				
				<!-- Schedule & Recurrence Details -->
				<div class="updated published time-details">
					<?php echo tribe_events_event_schedule_details() ?>
				</div>

				<?php if ( $venue_details ) : ?>
					<!-- Venue Display Info -->
					<div class="tribe-events-venue-details">
						<?php echo implode( ', ', $venue_details ); ?>
					</div> <!-- .tribe-events-venue-details -->
				<?php endif; ?>
				
			</div>
		</div><!-- .tribe-events-event-meta -->
		
		<!-- Event Cost -->
		<?php if ( tribe_get_cost() ) : ?> 
			<div class="tribe-events-event-cost">
				<?php echo tribe_get_cost( null, true ); ?>
			</div>
		<?php endif; ?>
		
		<?php do_action( 'tribe_events_after_the_meta' ) ?>
	</div>
	<div class="cmsmasters_events_more">
		<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more button" rel="bookmark"><?php esc_html_e( 'View event', 'the-events-calendar' ) ?></a>
	</div>
</div>
