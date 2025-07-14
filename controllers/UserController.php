<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\Request;

class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['dashboard'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function () {
                            return !Yii::$app->user->identity->isAdmin();
                        },
                    ],
                ],
                'denyCallback' => function () {
                    return Yii::$app->response->redirect(['/auth/login']);
                },
            ],
        ];
    }

    public function actionDashboard()
    {
        $userId = Yii::$app->user->id;

        $totalRequests = Request::find()->where(['user_id' => $userId])->count();

        $inProgressRequests = 0; // заглушка
        $closedRequests = 0;    // заглушка

        $latestRequests = Request::find()
            ->where(['user_id' => $userId])
            ->orderBy(['created_at' => SORT_DESC])
            ->limit(5)
            ->all();

        return $this->render('user-dashboard', [
            'totalRequests' => $totalRequests,
            'inProgressRequests' => $inProgressRequests,
            'closedRequests' => $closedRequests,
            'latestRequests' => $latestRequests,
        ]);
    }


    public function actionViewRequest($id)
{
    $request = Request::findOne($id);

    if (!$request || $request->user_id != Yii::$app->user->id) {
        throw new \yii\web\NotFoundHttpException('Заявка не найдена.');
    }

    return $this->render('view-request', ['request' => $request]);
}
}
