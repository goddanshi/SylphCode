<?php
/** @var yii\web\View $this */
/** @var app\models\Request $request */

use yii\helpers\Html;

$this->title = 'Детали заявки #' . $request->id;

$statusLabels = [
    0 => 'Новая',
    1 => 'В работе',
    2 => 'Завершено',
];
?>

<div class="container-xxl py-5 text-white" style="min-height: 80vh;">
  <div class="card bg-dark border-0 shadow-lg p-4">
    <h2 class="mb-4">Детали заявки #<?= Html::encode($request->id) ?></h2>

    <table class="table table-dark table-striped">
      <tbody>
        <tr>
          <th scope="row">ID заявки</th>
          <td><?= Html::encode($request->id) ?></td>
        </tr>
        <tr>
          <th scope="row">Телефон</th>
          <td><?= Html::encode($request->phone) ?></td>
        </tr>
        <tr>
          <th scope="row">Описание</th>
          <td><?= Html::encode($request->description ?? '-') ?></td>
        </tr>
        <tr>
          <th scope="row">Дата создания</th>
          <td><?= Yii::$app->formatter->asDatetime($request->created_at) ?></td>
        </tr>
        <?php if (isset($request->status) && array_key_exists($request->status, $statusLabels)): ?>
        <tr>
          <th scope="row">Статус</th>
          <td><?= Html::encode($statusLabels[$request->status]) ?></td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>

    <?= Html::a('Назад к заявкам', ['user/dashboard'], ['class' => 'btn btn-outline-secondary mt-3']) ?>
  </div>
</div>
