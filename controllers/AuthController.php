<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\RegistrationForm;

class AuthController extends Controller
{
    public function actionLogin()
{
    $model = new LoginForm();
    if ($model->load(Yii::$app->request->post()) && $model->login()) {
        $user = Yii::$app->user->identity;
        if ($user->isAdmin()) {
            return $this->redirect(['/admin/dashboard']);
        } else {
            return $this->redirect(['/user/dashboard']);
        }
    }
    return $this->render('login', ['model' => $model]);
}

    public function actionRegistration()
    {
        $model = new RegistrationForm();
        if ($model->load(Yii::$app->request->post()) && $model->register()) {
            Yii::$app->session->setFlash('success', 'Регистрация прошла успешно. Войдите в систему.');
            return $this->redirect(['login']);
        }
        return $this->render('registration', ['model' => $model]);
    }
}
