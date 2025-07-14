<?php
/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Авторизация — SylphCode';
?>

<div class="container-xxl custom-container py-5" style="min-height: 80vh; max-width: 400px;">
  <h1 class="mb-4 text-white" style="font-weight: 800; font-size: 2.5rem;">Вход</h1>

  <?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'text-white'],
    'fieldConfig' => [
      'template' => "{label}\n{input}\n{error}",
      'labelOptions' => ['class' => 'form-label'],
      'inputOptions' => ['class' => 'form-control bg-dark text-white border-0'],
      'errorOptions' => ['class' => 'text-danger small mt-1'],
    ],
  ]); ?>

  <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Имя пользователя']) ?>
  <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль']) ?>
  <?= $form->field($model, 'rememberMe')->checkbox() ?>

  <div class="mb-3">
    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary w-100', 'name' => 'login-button']) ?>
  </div>

  <p class="text-white text-center small">
    Нет аккаунта? <?= Html::a('Зарегистрироваться', ['/auth/registration'], ['class' => 'text-primary text-decoration-none']) ?>
  </p>

  <?php ActiveForm::end(); ?>
</div>

<?php
$css = <<<CSS
body {
  background-color: #0b1a3f;
}
.form-control:focus {
  box-shadow: none;
  border-color: #57a1ff;
}
.btn-primary {
  background-color: #57a1ff;
  border-color: #57a1ff;
}
.btn-primary:hover {
  background-color: #4090ff;
  border-color: #4090ff;
}
CSS;

$this->registerCss($css);
?>
