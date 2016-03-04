<?php

require 'boot.php';

use scrnnm\model\ModelFactory;

$model_names = array(
    'scrnnm\model\UserModel',
    'scrnnm\model\VerifyEmailModel',
    'scrnnm\model\ResetPasswordModel');

foreach($model_names as $model_name) {
    $model = ModelFactory::get($model_name);
    $model->prune();
}

echo 'prune successful';
