<?php
/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Регистрация — SylphCode';
?>

<div class="container-xxl custom-container py-5" style="min-height: 80vh; max-width: 400px;">
  <h1 class="mb-4 text-white" style="font-weight: 800; font-size: 2.5rem;">Регистрация</h1>

  <?php $form = ActiveForm::begin([
    'id' => 'registration-form',
    'options' => ['class' => 'text-white'],
    'fieldConfig' => [
      'template' => "{label}\n{input}\n{error}",
      'labelOptions' => ['class' => 'form-label'],
      'inputOptions' => ['class' => 'form-control bg-dark text-white border-0'],
      'errorOptions' => ['class' => 'text-danger small mt-1'],
    ],
  ]); ?>

  <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Имя пользователя']) ?>
  <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Email']) ?>
  <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль']) ?>
  <?= $form->field($model, 'password_repeat')->passwordInput(['placeholder' => 'Повторите пароль']) ?>

  <div class="mb-3">
    <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary w-100', 'name' => 'registration-button']) ?>
  </div>

  <p class="text-white text-center small">
    Уже есть аккаунт? <?= Html::a('Войти', ['/auth/login'], ['class' => 'text-primary text-decoration-none']) ?>
  </p>

  <?php ActiveForm::end(); ?>
</div>

<?php
$this->registerCss($css);
?>
