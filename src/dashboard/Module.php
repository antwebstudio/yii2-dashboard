<?php
namespace ant\dashboard;

class Module extends \cornernote\dashboard\Module {
	//public $controllerNamespace = 'ant\dashboard\controllers';
    public $layout = '//main';
    public $defaultRoute = 'default';
	
	 public static function getInstance()
    {
        $class = get_called_class();
        return isset(Yii::$app->loadedModules[$class]) ? Yii::$app->loadedModules[$class] : null;
    }
}