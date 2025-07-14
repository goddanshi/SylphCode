<?php
/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Кейсы — SylphCode';
?>

<div class="container py-5 text-white mb-4" style="min-height: 80vh;">
  <h1 class="mb-5 text-center fw-bold" style="font-size: 3rem;">Наши кейсы</h1>

  <div class="row g-4">
    <!-- Кейс 1 -->
    <div class="col-md-6">
      <div class="card bg-dark text-white h-100 shadow">
        <img src="<?= Yii::getAlias('@web') ?>/assets/farkop1.png" class="card-img-top" alt="Кейс 1" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title">Интернет магазин</h5>
          <p class="card-text">Корпоративный сайт с каталогом услуг, формами и адаптацией под мобильные.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#caseModal1">Подробнее</button>
        </div>
      </div>
    </div>

    <!-- Кейс 2 -->
    <div class="col-md-6">
      <div class="card bg-dark text-white h-100 shadow">
        <img src="<?= Yii::getAlias('@web') ?>/assets/Icons1.png" class="card-img-top" alt="Кейс 2" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title">Интернет-магазин</h5>
          <p class="card-text">Интернет-магазин с фильтрацией, админкой и интеграцией с 1С.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#caseModal2">Подробнее</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Модалка Кейс 1 -->
<div class="modal fade" id="caseModal1" tabindex="-1" aria-labelledby="caseModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header border-secondary">
        <h5 class="modal-title" id="caseModal1Label">Интернет магазин</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
         <div class="d-flex flex-wrap gap-3 justify-content-center mb-4">
           <img src="<?= Yii::getAlias('@web') ?>/assets/farkop2.png" alt="Кейс 1" class="img-fluid rounded shadow" style="max-width: 48%; height: auto; object-fit: cover;">
           <img src="<?= Yii::getAlias('@web') ?>/assets/farkop3.png" alt="Кейс 1" class="img-fluid rounded shadow" style="max-width: 48%; height: auto; object-fit: cover;">
         </div>
        <p>Современный сайт для компании. Реализованы адаптивность, админка, формы и SEO.</p>
        <ul>
          <li>Срок: 3 недели</li>
          <li>Технологии: Wordpress, Bootstrap 5</li>
          <li>Результат: рост обращений на 40%</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Модалка Кейс 2 -->
<div class="modal fade" id="caseModal2" tabindex="-1" aria-labelledby="caseModal2Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header border-secondary">
        <h5 class="modal-title" id="caseModal2Label">Интернет-магазин</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <div class="d-flex flex-wrap gap-3 justify-content-center mb-4">
           <img src="<?= Yii::getAlias('@web') ?>/assets/Icons2.png" alt="Кейс 1" class="img-fluid rounded shadow" style="max-width: 48%; height: auto; object-fit: cover;">
           <img src="<?= Yii::getAlias('@web') ?>/assets/Icons3.png" alt="Кейс 1" class="img-fluid rounded shadow" style="max-width: 48%; height: auto; object-fit: cover;">
         </div>
        <p>Разработка e-commerce сайта с личным кабинетом, корзиной, CRM-интеграцией и фильтрацией.</p>
        <ul>
          <li>Срок: 5 недель</li>
          <li>Технологии: Laravel, Vue.js</li>
          <li>Результат: 300+ заказов в первый месяц</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php
$this->registerCss(<<<CSS
.modal, .modal-backdrop {
    z-index: auto !important;
}
footer{
  margin-top: 10rem !important;
}
CSS);
?>
