<?php
/** @var yii\web\View $this */
/** @var int $totalRequests */
/** @var int $inProgressRequests */
/** @var int $closedRequests */
/** @var app\models\Request[] $latestRequests */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\JqueryAsset;

$this->title = 'Юзер-дэшборд';

JqueryAsset::register($this);

$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', [
    'depends' => [\yii\web\JqueryAsset::class],
]);

$this->registerJs(<<<JS
$(function() {
    $('input[name="phone"]').mask('+7 (000) 000-00-00');
});
JS);
?>

<div class="container-xxl py-5 text-white" style="min-height: 80vh;">
  <div class="card bg-dark border-0 shadow-lg mb-4">
    <div class="card-body d-flex flex-column flex-md-row align-items-center justify-content-between">
      <div class="d-flex align-items-center mb-3 mb-md-0">
        <img src="<?= Yii::getAlias('@web') ?>/img/Adminavatar.jpg" alt="Аватар" class="rounded-circle me-3" width="64" height="64">

        <div class="text-white">
          <h5 class="mb-1 fw-bold"><?= Html::encode(Yii::$app->user->identity->username) ?></h5>
          <small class="text-white">Пользователь</small>
          <div>Email: <?= Html::encode(Yii::$app->user->identity->email) ?></div>
          <div>Дата регистрации: <?= Yii::$app->formatter->asDate(Yii::$app->user->identity->created_at) ?></div>
        </div>
      </div>

      <div class="text-end">
        <h6 class="mb-1">Текущее время</h6>
        <span class="text-info" id="current-time"><?= date('H:i:s') ?></span>
      </div>
    </div>
  </div>

  <div class="row g-4 mb-4">
    <div class="col-md-4">
      <div class="card bg-dark p-3 text-white">
        <h5>Статистика заявок</h5>
        <ul class="list-unstyled">
          <li>Всего заявок: <strong><?= $totalRequests ?></strong></li>
          <li>В работе: <strong><?= $inProgressRequests ?></strong></li>
          <li>Закрыто: <strong><?= $closedRequests ?></strong></li>
        </ul>
      </div>
    </div>

    <div class="col-md-8">
      <div class="card bg-dark p-3">
        <h5>Последние заявки</h5>
        <table class="table table-dark table-striped mb-0">
          <thead>
            <tr>
              <th>Дата</th>
              <th>Статус</th>
              <th>Описание</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($latestRequests as $request): ?>
              <tr>
                <td><?= Yii::$app->formatter->asDatetime($request->created_at) ?></td>
                <td><?= Html::encode($request->statusLabel) ?></td>
                <td><?= Html::encode(mb_substr($request->description, 0, 50)) ?>...</td>
                <td><?= Html::a('Подробнее', ['user/view-request', 'id' => $request->id], ['class' => 'btn btn-sm btn-outline-primary']) ?></td>
              </tr>
            <?php endforeach; ?>
            <?php if (empty($latestRequests)): ?>
              <tr><td colspan="4" class="text-center">Заявок нет</td></tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="bg-dark bg-opacity-75 rounded p-4">
    <h4 class="mb-3">Заказать консультацию</h4>

    <?php $form = ActiveForm::begin([
      'action' => ['site/request-consultation'],
      'options' => ['class' => 'position-relative']
    ]); ?>

      <?= Html::input('tel', 'phone', null, [
        'class' => 'input form-control',
        'placeholder' => 'Ваш телефон *',
        'required' => true,
        'style' => 'padding-right: 150px; border-radius: 2rem;',
        'autocomplete' => 'off',
        'pattern' => '\\+7 \\(\\d{3}\\) \\d{3}-\\d{2}-\\d{2}',
      ]) ?>

      <?= Html::submitButton('Заказать', [
        'class' => 'btn-inside-input btn btn-primary',
        'style' => 'position: absolute; top: 50%; right: 10px; transform: translateY(-50%); border-radius: 2rem; padding: 10px 20px; white-space: nowrap;'
      ]) ?>

    <?php ActiveForm::end(); ?>
  </div>
</div>

<?php
$this->registerCss(<<<CSS
.card {
  background-color: rgba(0, 0, 20, 0.8);
}
.input {
  font-size: 1rem;
  padding-left: 1.25rem;
  padding-top: 0.875rem;
  padding-bottom: 0.875rem;
}
.btn-inside-input:hover {
  background-color: #2563eb !important;
}
CSS);

$this->registerJs(<<<JS
setInterval(function() {
  document.getElementById('current-time').textContent = new Date().toLocaleTimeString();
}, 1000);
JS);
?>
