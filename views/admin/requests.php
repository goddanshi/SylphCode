<?php
/** @var yii\web\View $this */
/** @var \app\models\Request[] $requests */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Заявки';

$statusLabels = [
    0 => 'Новая',
    1 => 'В работе',
    2 => 'Завершено',
];
?>

<div class="container-xxl py-5 text-white" style="min-height: 80vh;">
  <h1 class="mb-4">Заявки на консультацию</h1>

  <table class="table table-dark table-bordered table-striped align-middle">
    <thead>
      <tr>
        <th>ID</th>
        <th>Пользователь (ID)</th>
        <th>Телефон</th>
        <th>Описание</th>
        <th>Статус <span data-bs-toggle="tooltip" title="0 - Новая, 1 - В работе, 2 - Завершено">?</span></th>
        <th>Дата</th>
        <th>Действия</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($requests as $req): ?>
        <tr>
          <td><?= Html::encode($req->id) ?></td>
          <td><?= Html::encode($req->user_id) ?></td>
          <td><?= Html::encode($req->phone) ?></td>
          <td>
            <?php $form = ActiveForm::begin([
                'action' => ['admin/update-request', 'id' => $req->id],
                'method' => 'post',
                'options' => ['class' => 'd-flex gap-2 align-items-center'],
            ]); ?>
              <?= Html::textarea('description', $req->description, ['class' => 'form-control form-control-sm', 'rows' => 2, 'style' => 'resize:none; width: 200px;']) ?>
          </td>
          <td>
              <?= Html::dropDownList('status', $req->status, $statusLabels, ['class' => 'form-select form-select-sm', 'style' => 'width: 130px;']) ?>
          </td>
          <td><?= Yii::$app->formatter->asDatetime($req->created_at) ?></td>
          <td>
              <?= Html::submitButton('Сохранить', ['class' => 'btn btn-sm btn-primary']) ?>
            <?php ActiveForm::end(); ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php
// Регистрация Bootstrap Tooltip JS для подсказок
$this->registerJs(<<<JS
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
tooltipTriggerList.forEach(function (tooltipTriggerEl) {
  new bootstrap.Tooltip(tooltipTriggerEl)
})
JS
);
?>
