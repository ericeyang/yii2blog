<?php
/**
 * InitController.php
 * description: 命令行创建用户信息
 * author: ericeyang<ericeyany@gmail.com>
 * date: 15/4/6 00:35
 */
namespace console\controllers;

use common\models\User;
class InitController extends \yii\console\Controller
{
    /**
     * Create init user
     */
    public function actionUser()
    {
        echo "Create init user...\n";
        $username = $this->prompt('Input UserName: ');
        $email = $this->prompt("Input Email for $username : ");
        $password = $this->prompt("Input Password for $username : ");

        $model = new User();
        $model->username = $username;
        $model->email = $email;
        $model->password = $password;

        if (!$model->save())
        {
            foreach($model->getErrors() as $errors)
            {
                foreach ($errors as $e)
                {
                    echo "$e\n";
                }
            }
            return 1;
        }
        echo "Create init user successfully!";
        return 0;
    }
}
