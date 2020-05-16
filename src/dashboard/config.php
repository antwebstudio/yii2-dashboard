<?php

return [
    'id' => 'dashboard',
    'class' => ant\dashboard\Module::class,
    'isCoreModule' => false,
	'depends' => [],
	'modules' => [
		'backend' => [
			'class' => ant\dashboard\backend\Module::class,
		],
	],
];