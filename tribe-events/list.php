<?php
/**
 * List View Template
 * The wrapper template for a list of events. This includes the Past Events and Upcoming Events views
 * as well as those same views filtered to a specific category.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list.php
 *
 * @package TribeEventsCalendar
 *
 */
get_header('page');
?>
		<link href="<?=get_template_directory_uri()?>/css/style-eventos.css" type="text/css" rel="stylesheet" />
		<div class="header--slogan padding-default">
			<div>
				<h1>Eventos</h1>
			</div>
		</div>
	</header>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );
?>

	<!-- Tribe Bar -->
<div class="div-eventos container">
	<!-- Main Events Content -->
<?php tribe_get_template_part( 'list/content' ); ?>

</div>
	<div class="tribe-clear"></div>

<?php
do_action( 'tribe_events_after_template' );
