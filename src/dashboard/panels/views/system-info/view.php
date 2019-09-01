<?php
$now = new \common\helpers\DateTime;
?>

<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">System/Server Info</h3>
	</div>
	<div class="box-body">
		<p>System Date Time (now): <?= $now->toString() ?></p>
		<p>System Date Timezone: <?= $now->getTimezone()->getName() ?></p>
	</div>
</div>