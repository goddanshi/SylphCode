<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\Request;

class AdminController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['dashboard', 'requests'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'], // только авторизованные
                        'matchCallback' => function () {
                            return Yii::$app->user->identity->isAdmin();
                        },
                    ],
                ],
                'denyCallback' => function () {
                    return Yii::$app->response->redirect(['/auth/login']);
                },
            ],
        ];
    }

    public function actionRequests()
    {
        if (Yii::$app->user->isGuest || !Yii::$app->user->identity->isAdmin()) {
            throw new \yii\web\ForbiddenHttpException('Доступ запрещен.');
        }

        $requests = Request::find()
            ->orderBy(['created_at' => SORT_DESC])
            ->all();

        return $this->render('requests', ['requests' => $requests]);
    }

    public function actionDashboard()
    {
        $requestCount = Request::find()->count();

        return $this->render('admin-dashboard', [
            'requestCount' => $requestCount,
        ]);
    }

    public function actionUpdateRequest($id)
{
    $request = Request::findOne($id);
    if (!$request) {
        throw new \yii\web\NotFoundHttpException('Заявка не найдена.');
    }

    if (Yii::$app->request->isPost) {
        $request->description = Yii::$app->request->post('description');
        $request->status = Yii::$app->request->post('status');
        if ($request->save()) {
            Yii::$app->session->setFlash('success', 'Заявка успешно обновлена.');
        } else {
            Yii::$app->session->setFlash('error', 'Ошибка при обновлении заявки.');
        }
    }
    return $this->redirect(['admin/requests']);
}
}
