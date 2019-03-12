<?php defined('_JEXEC') or die;
// echo $hello;

$modClass = 'countdowna'.$module->id; ?>

<div class="clock">

<?php if ($showTitle): ?>
	<h2 class="clock-title"><?= $title ?></h2>
<?php endif ?>

<?php if ($countdownType == 'newYear') {
?>
	<div id="<?=$modClass?>" class="countdowna"></div>
	<script type="text/javascript">
		var clock;

		jQuery(document).ready(function() {

			// Grab the current date
			var currentDate = new Date();

			// Set some date in the future. In this case, it's always Jan 1
			var futureDate  = new Date(currentDate.getFullYear() + 1, 0, 1);

			// Calculate the difference in seconds between the future and current date
			var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

			// Instantiate a coutdown FlipClock
			clock = jQuery('#<?= $modClass ?>').FlipClock(diff, {
				clockFace: 'DailyCounter',
				countdown: true,
				showSeconds: false
			});
		});
	</script>
<?php } else if($countdownType == 'customDate') { ?>
	<div id="<?=$modClass?>" class="countdowna"></div>
	<script type="text/javascript">
		var clock;

		jQuery(document).ready(function() {

			// Grab the current date
			var currentDate = new Date();

			// Set some date in the future. In this case, it's always Jan 1
			var futureDate  = new Date("<?= $customDate ?>");

			// Calculate the difference in seconds between the future and current date
			var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

			// Instantiate a coutdown FlipClock
			clock = jQuery('#<?= $modClass ?>').FlipClock(diff, {
				clockFace: 'DailyCounter',
				countdown: true,
				showSeconds: false
			});
		});
	</script>
<?php } ?>

</div> <!-- End .clock -->

<style>
	<?php if (! $showLabel): ?>
		.countdowna {
			margin-bottom: 0;
			padding-bottom: 1em;
		}
		.flip-clock-label {
			visibility: hidden;
		}
	<?php endif ?>
</style>