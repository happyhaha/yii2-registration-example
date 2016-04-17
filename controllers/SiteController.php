<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\Signup;
use app\models\Login;


class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogout()
    {
        if(!Yii::$app->user->isGuest)
        {
            Yii::$app->user->logout();
            return $this->redirect(['login']);
        }
    }

    public function actionSignup()
    {
        $model = new Signup();

        if(isset($_POST['Signup']))
        {
            $model->attributes = Yii::$app->request->post('Signup');
//            $model->email = $_POST['Signup']['email'];

            if($model->validate() && $model->signup())
            {
                return $this->redirect(['index']);
            }
        }

        return $this->render('signup',['model'=>$model]);
    }


    //1. Проверить существует ли пользователь?
    //2. "Внести" пользователя в систему(в сессию)

    public function actionLogin()
    {
        if(!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $login_model = new Login();

        if( Yii::$app->request->post('Login'))
        {
            $login_model->attributes = Yii::$app->request->post('Login');

            if($login_model->validate())
            {
                Yii::$app->user->login($login_model->getUser());
                return $this->goHome();
            }
        }

        return $this->render('login',['login_model'=>$login_model]);
    }

}
