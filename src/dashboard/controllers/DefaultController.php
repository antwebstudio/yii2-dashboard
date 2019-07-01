<?php
namespace ant\dashboard\controllers;

use cornernote\dashboard\models\Dashboard;

class DefaultController extends \yii\web\Controller {
	public function actionIndex() {
        $model = Dashboard::find()->one();

        return $this->render($this->action->id, [
			'model' => $model,
		]);
	}
	
	protected function findModel($id)
    {
        if (($model = Dashboard::findOne($id)) !== null) {
            return $model;
        }
        throw new HttpException(404, 'The requested page does not exist.');
    }
}