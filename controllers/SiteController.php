<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\httpclient\Client;
use app\models\Request;


class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

public function actionContacts()
{
    return $this->render('contacts'); // ищет файл views/site/contacts.php
}
public function actionWebdev()
{
    return $this->render('webdev'); 
}
public function actionPodderzhkaSaytov()
{
    return $this->render('podderzhka-saytov');
}
public function actionFrontendDev()
{
    return $this->render('frontend-dev');
}
public function actionBackendDev()
{
    return $this->render('backend-dev');
}
public function actionPriceList()
{
    return $this->render('price-list');
}
public function actionFaq()
{
    return $this->render('faq');
}
public function actionCase()
{
    return $this->render('case');
}
public function actionBlog()
{
    return $this->render('blog');
}
 public function actionRequestConsultation()
    {
        $model = new Request();
        $model->phone = Yii::$app->request->post('phone');
        $model->user_id = Yii::$app->user->id ?? null; // если юзер неавторизован, можно null

        if ($model->save()) {
            Yii::$app->session->setFlash('success', 'Спасибо! Мы свяжемся с вами.');

            $token = Yii::$app->params['telegram_bot_token'];
            $chat_id = Yii::$app->params['telegram_chat_id'];
            $text = "📞 Новая заявка на консультацию:\nТелефон: {$model->phone}\n";
            if ($model->user_id) {
                $text .= "Пользователь ID: {$model->user_id}\n";
            }
            $text .= "Дата: " . date('d.m.Y H:i');

            $url = "https://api.telegram.org/bot{$token}/sendMessage?" . http_build_query([
                'chat_id' => $chat_id,
                'text' => $text,
                'parse_mode' => 'HTML',
            ]);

            @file_get_contents($url);
        } else {
            Yii::$app->session->setFlash('error', 'Произошла ошибка. Попробуйте позже.');
        }

        return $this->goBack();
    }
public function actionRedirectDashboard()
{
    // Явная проверка, авторизован ли пользователь
    if (Yii::$app->user->isGuest || !Yii::$app->user->identity) {
        return $this->redirect(['/auth/login']);
    }

    $user = Yii::$app->user->identity;

    // Проверка на метод isAdmin (и на всякий случай его существование)
    if (method_exists($user, 'isAdmin') && $user->isAdmin()) {
        return $this->redirect(['/admin/dashboard']);
    }

    return $this->redirect(['/user/dashboard']);
}
public function actionDbTest()
{
    try {
        $db = Yii::$app->db;
        $command = $db->createCommand('SELECT 1');
        $result = $command->queryScalar();
        return 'OK: ' . $result;
    } catch (\yii\db\Exception $e) {
        return 'DB error: ' . $e->getMessage();
    }
}

public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
        return 'Произошла неизвестная ошибка.';
    }
    
}
