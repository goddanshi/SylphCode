<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\web\JqueryAsset;

$this->title = 'Контакты';

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

<div class="container-xxl custom-container text-white py-5" style="min-height: 80vh;">
  <h1 class="mb-4" style="font-weight: 800; font-size: 3rem; text-align:center;">Свяжитесь с нами</h1>

  <div class="row justify-content-center gap-5">
    <div class="col-md-5 col-lg-4 bg-dark bg-opacity-50 rounded p-4">
      <h2 class="h4 mb-4">Контактная информация</h2>
      <p class="mb-3">
        <i class="fas fa-phone fa-fw me-2"></i>
        <a href="tel:+79001234567" class="text-white text-decoration-none">+7 (919) 507-63-45</a>
      </p>
      <p class="mb-3">
        <i class="fas fa-envelope fa-fw me-2"></i>
        <a href="mailto:info@sylphcode.ru" class="text-white text-decoration-none">info@sylphcode.ru</a>
      </p>
      <p class="mb-3">
        <i class="fas fa-clock fa-fw me-2"></i>
        Пн-Пт: 09:00 - 20:00
      </p>
      <!-- <p class="mb-0" style="font-size: 0.9rem; color: #aaa;">
        Адрес: г. Киров, ул. Чапаева, **
      </p> -->
    </div>

    <div class="col-md-5 col-lg-4 position-relative">
      <h2 class="h4 mb-4 text-center">Заказать консультацию</h2>
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
</div>

<style>
  .input {
    font-size: 1rem;
    padding-left: 1.25rem;
    padding-top: 0.875rem;
    padding-bottom: 0.875rem;
  }
  .btn-inside-input:hover {
    background-color: #2563eb !important;
  }
</style>
