<?php
/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Админ-дэшборд';
?>

<div class="container-xxl py-5 text-white" style="min-height: 80vh;">
  <div class="card bg-dark border-0 shadow-lg mb-4">
    <div class="card-body d-flex flex-column flex-md-row align-items-center justify-content-between">
      <div class="d-flex align-items-center mb-3 mb-md-0">
        <img src="<?= Yii::getAlias('@web') ?>/img/Adminavatar.jpg" alt="Аватар" class="rounded-circle me-3" width="64" height="64">

        <div class="text-white">
          <h5 class="mb-1 fw-bold"><?= Html::encode(Yii::$app->user->identity->username) ?></h5>
          <small class="text-white">Администратор</small>
        </div>
      </div>

      <div class="text-center mb-3 mb-md-0">
        <span class="fs-4 fw-bold text-primary">Количество заявок: <?= $requestCount ?></span>
      </div>

      <div class="text-end">
        <h6 class="mb-1">Текущее время</h6>
        <span class="text-info" id="current-time"><?= date('H:i:s') ?></span>
      </div>
    </div>
  </div>

  <div class="d-grid gap-3">
    <?= Html::a('Отслеживать заявки', ['/admin/requests'], ['class' => 'btn btn-outline-primary btn-lg']) ?>
    <?= Html::a('Добавить запись в Кейсы', ['/site/case-create'], ['class' => 'btn btn-outline-secondary btn-lg']) ?>
    <?= Html::a('Добавить запись в Блог', ['/site/blog-create'], ['class' => 'btn btn-outline-secondary btn-lg']) ?>

  </div>
</div>

<?php
$this->registerCss(<<<CSS
.card {
  background-color: rgba(0, 0, 20, 0.8);
}
CSS);
$this->registerJs(<<<JS
  setInterval(function() {
    document.getElementById('current-time').textContent = new Date().toLocaleTimeString();
  }, 1000);
JS);
?>
