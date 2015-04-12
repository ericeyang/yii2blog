<?php
/**
 * UserController.php
 * description: UserController.php
 * author: ericeyang <ericeyany@gmail.com>
 * date: 15/4/10 00:33
 */
namespace api\controllers;

use yii\rest\activeController;

class   UserController extends ActiveController
{
    public $modelClass = 'common\models\User';
}