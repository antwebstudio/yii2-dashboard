<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var cornernote\dashboard\models\Dashboard $model
 */
 
if (isset($model)) {
	$this->title = $model->name;
	$this->params['breadcrumbs'][] = ['label' => Yii::t('dashboard', 'Dashboards'), 'url' => ['index']];
	$this->params['breadcrumbs'][] = $model->name ? $model->name : Yii::t('dashboard', 'Dashboard') . ' #' . $model->id;
}
?>

<div class="dashboard-view">
	<?php if (isset($model)): ?>
		<?= $model->layout->render('view'); ?>
	<?php else: ?>
		<div class="alert alert-info">
			Dashboard is not yet setup.
		</div>
	<?php endif ?>
</div>
