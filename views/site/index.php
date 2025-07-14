<?php
/** @var yii\web\View $this */
/** @var string $content */

use yii\helpers\Html;

$this->title = 'SylphCode — Современная веб-разработка и цифровые решения под ключ';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Команда профессионалов SylphCode создает масштабируемые и качественные веб-приложения, UI/UX-дизайн и бизнес-системы. Быстро, надежно, с вниманием к деталям и инновациям. Получите бесплатную консультацию!'
]);

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="h-100">
<?php $this->beginBody() ?>

<?= $this->render('//layouts/_input') ?>
<div class="row text-center text-white mt-4 g-4" style="max-width: 1600px;margin: 0 auto;">
  <div class="col-md-3">
    <div class="feature-box p-3 border rounded-4 bg-dark bg-opacity-50 h-100">
      <i class="bi bi-lightning-charge-fill fs-1 text-primary"></i>
      <h5 class="mt-3 fw-bold">Быстрая разработка</h5>
      <p class="mb-0">Запуск MVP от 7 дней</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="feature-box p-3 border rounded-4 bg-dark bg-opacity-50 h-100">
      <i class="bi bi-award-fill fs-1 text-primary"></i>
      <h5 class="mt-3 fw-bold">Уверенные технологии</h5>
        <p class="mb-0">Работаем с современными фреймворками</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="feature-box p-3 border rounded-4 bg-dark bg-opacity-50 h-100">
      <i class="bi bi-people-fill fs-1 text-primary"></i>
      <h5 class="mt-3 fw-bold">Работаем в команде</h5>
      <p class="mb-0">UI/UX, фронт, бэк — всё в одном месте</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="feature-box p-3 border rounded-4 bg-dark bg-opacity-50 h-100">
      <i class="bi bi-headset fs-1 text-primary"></i>
      <h5 class="mt-3 fw-bold">Сопровождение 24/7</h5>
      <p class="mb-0">Поддержка даже после релиза</p>
    </div>
  </div>
</div>
<style>
    footer{
        margin-top: 5rem;
    }
    .feature-box {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      will-change: transform;
    }
    .feature-box:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px rgba(0, 123, 255, 0.3);
      z-index: 2;
      cursor: pointer;
    }
</style>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
