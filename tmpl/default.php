<?php defined('_JEXEC') or die;
// echo $hello;

$modClass = 'countdowna'.$module->id;
if ($countdownType == 'new_year'):
?>
	<div id="<?=$modClass?>" style="margin:2em;"></div>
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
<?php endif; ?>