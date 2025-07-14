<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveFormAsset;
use yii\web\JqueryAsset;

JqueryAsset::register($this);
ActiveFormAsset::register($this);

$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', [
    'depends' => [\yii\web\JqueryAsset::class],
]);

$this->registerJs(<<<JS
$(function() {
    $('input[name="phone"]').mask('+7 (000) 000-00-00');
});
JS);

$this->registerCss(<<<CSS
.about-section {
  width: 1200px;
  margin-top: 75px;
}
.tech-grid {
  gap: 2rem;
}
.tech-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  font-size: 3rem;
  position: relative;
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  cursor: pointer;
}
.tech-item:hover {
  transform: scale(1.15);
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  z-index: 10;
}
.tech-label {
  margin-top: 8px;
  font-size: 0.9rem;
  background-color: rgba(255, 255, 255, 0.1);
  color: #ffffffcc;
  padding: 4px 12px;
  border-radius: 0.5rem;
  text-align: center;
  backdrop-filter: blur(4px);
  user-select: none;
}
.input {
  width: 100%;
  padding: 14px 170px 14px 20px;
  border: 1px solid #cbd5e1;
  border-radius: 2rem;
  font-size: 16px;
  outline: none;
  transition: 0.2s;
  box-sizing: border-box;
  position: relative;
}
.input:focus {
  border-color: #3b82f6;
  box-shadow: 0 0 8px #3b82f6;
}
.btn-inside-input {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  padding: 10px 18px;
  font-size: 14px;
  background-color: #3b82f6;
  color: white;
  border: none;
  border-radius: 2rem;
  cursor: pointer;
  transition: background-color 0.2s ease;
  white-space: nowrap;
}
.btn-inside-input:hover {
  background-color: #2563eb;
}
.text-white-85 {
  color: rgba(255, 255, 255, 0.85);
}

/* Адаптив для мобилок */
@media (max-width: 1199px) {
  .about-section {
    width: 100%;
    padding: 0 15px;
    margin-top: 40px;
  }
  .input {
    padding: 14px 140px 14px 15px;
    font-size: 14px;
  }
  .btn-inside-input {
    padding: 8px 14px;
    font-size: 12px;
    right: 5px;
  }
  .tech-item {
    font-size: 2.2rem;
  }
  .tech-label {
    font-size: 0.8rem;
    padding: 3px 8px;
  }
}

@media (max-width: 767px) {
  .about-section {
    margin-top: 30px;
  }
  .row.align-items-start {
    display: block;
  }
  .col-md-7, .col-md-1, .col-md-4 {
    width: 100% !important;
    max-width: 100% !important;
    margin: 0 0 30px 0;
    float: none !important;
  }
  .input {
    padding: 12px 120px 12px 12px;
    font-size: 14px;
  }
  .btn-inside-input {
    padding: 8px 14px;
    font-size: 12px;
    right: 5px;
  }
  .tech-grid {
    justify-content: center !important;
  }
  .tech-item {
    font-size: 1.8rem;
  }
  .tech-label {
    font-size: 0.75rem;
    padding: 2px 6px;
  }
  .vr {
    display: none !important;
  }
}
CSS
);
?>

<div class="about-section container-xxl custom-container py-5 d-grid gap-3">
  <div class="row align-items-start">
    <!-- Левая колонка -->
    <div class="col-md-7">
      <h1 class="text-white fw-bold mb-4" style="font-size: 48px;">О компании SylphCode</h1>
      <p class="text-white-85 fs-4">
        Мы — команда разработчиков, объединённых идеей создавать современные и технологичные цифровые решения.
        Специализируемся на веб-разработке, UI/UX-дизайне и построении масштабируемых систем под бизнес-задачи.
        Наша цель — превращать идеи в работающие продукты, сохраняя баланс между скоростью, качеством и гибкостью.
      </p>
      <hr class="my-5" style="border: 1px solid white;" />

      <?php $form = ActiveForm::begin([
        'action' => ['site/request-consultation'],
        'options' => ['class' => 'position-relative', 'style' => 'max-width: 100%;']
      ]); ?>
        <?= Html::input('tel', 'phone', null, [
            'class' => 'input',
            'placeholder' => 'Ваш телефон *',
            'required' => true,
            'autocomplete' => 'off',
            'pattern' => '\\+7 \\(\\d{3}\\) \\d{3}-\\d{2}-\\d{2}',
        ]) ?>
        <?= Html::submitButton('Заказать консультацию', ['class' => 'btn-inside-input']) ?>
      <?php ActiveForm::end(); ?>
    </div>

    <!-- Разделительная линия -->
    <div class="col-md-1 d-none d-md-flex justify-content-center">
      <div class="vr" style="height: 500px; width: 5px; background-color: white;"></div>
    </div>

    <!-- Правая колонка -->
    <div class="col-md-4 mt-5 mt-md-0 d-flex flex-column align-items-center gap-4">
      <div class="tech-grid d-flex flex-wrap justify-content-center gap-4">
        <div class="tech-item" title="Vue.js">
          <i class="fab fa-vuejs" style="color: #42b883;"></i>
          <div class="tech-label">Vue.js</div>
        </div>
        <div class="tech-item" title="React">
          <i class="fab fa-react" style="color: #61dafb;"></i>
          <div class="tech-label">React</div>
        </div>
        <div class="tech-item" title="Node.js">
          <i class="fab fa-node-js" style="color: #83cd29;"></i>
          <div class="tech-label">Node.js</div>
        </div>
        <div class="tech-item" title="Git">
          <i class="fab fa-git-alt" style="color: #f05033;"></i>
          <div class="tech-label">Git</div>
        </div>
        <div class="tech-item" title="Angular">
          <i class="fab fa-angular" style="color: #dd0031;"></i>
          <div class="tech-label">Angular</div>
        </div>
        <div class="tech-item" title="Laravel">
          <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel" width="48" height="48" />
          <div class="tech-label">Laravel</div>
        </div>
        <div class="tech-item" title="WordPress">
          <i class="fab fa-wordpress" style="color: #21759b;"></i>
          <div class="tech-label">WordPress</div>
        </div>
      </div>
    </div>
  </div>
</div>
