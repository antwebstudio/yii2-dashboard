<?php
$now = new \ant\helpers\DateTime;
?>

<p>System Date Time (now): <?= $now->toString() ?></p>
<p>System Date Timezone: <?= $now->getTimezone()->getName() ?></p>