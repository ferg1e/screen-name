<?php

require 'boot.php';

use scrnnm\model\ModelFactory;

$model_names = array(
    'scrnnm\model\User',
    'scrnnm\model\VerifyEmail',
    'scrnnm\model\ResetPassword');

foreach($model_names as $model_name) {
    $model = ModelFactory::get($model_name);
    $model->install();
}

printf('Install successful. Visit the <a href="%s">home page</a>.', ROOT);
