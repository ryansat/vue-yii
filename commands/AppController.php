<?php
/**
 * User: Fajar Satria
 * Date: 3/7/2020
 * Time: 9:06 AM
 */

namespace app\commands;


use app\models\User;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Class AppController
 *
 * @author Fajar Satria<ryasnat46@gmail.com>
 * @package app\commands
 */
class AppController extends Controller
{
    public function actionAddUser($username, $password)
    {
        $user = new User();
        $user->username = $username;
        $user->password_hash = \Yii::$app->security->generatePasswordHash($password);
        $user->access_token = \Yii::$app->security->generateRandomString(256);
        if ($user->save()){
            Console::output('Saved');
        } else {
            Console::output('NOT saved');
            var_dump($user->errors);
        }
    }
}
