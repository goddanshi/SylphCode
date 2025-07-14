<?php
/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Вопрос-ответ — SylphCode';
?>

<div class="container-xxl custom-container text-white py-5" style="min-height: 80vh;">
  <h1 class="mb-4" style="font-weight: 800; font-size: 3rem; text-align:center;">Вопрос-ответ</h1>
  <p class="lead mb-5" style="font-size: 1.25rem; max-width: 720px; margin-left:auto; margin-right:auto;">
    Здесь мы ответим на самые популярные вопросы о наших услугах, процессе работы и ценах.
  </p>

  <div class="accordion" id="faqAccordion" style="max-width: 900px; margin-left:auto; margin-right:auto;">
    <?php
    $faqs = [
      [
        'question' => 'Какие технологии вы используете для веб-разработки?',
        'answer' => 'Мы используем современные технологии: Vue, React, Yii2, Laravel, Node.js и другие в зависимости от задачи.'
      ],
      [
        'question' => 'Как долго занимает разработка сайта?',
        'answer' => 'Сроки зависят от сложности проекта: от нескольких дней для лендингов до нескольких месяцев для крупных платформ.'
      ],
      [
        'question' => 'Можно ли заказать только фронтенд разработку?',
        'answer' => 'Да, мы можем выполнить только фронтенд или бекенд, либо полный цикл разработки.'
      ],
      [
        'question' => 'Предоставляете ли вы поддержку после запуска сайта?',
        'answer' => 'Да, предлагаем базовую и расширенную поддержку с обновлениями и технической консультацией.'
      ],
      [
        'question' => 'Как рассчитывается стоимость проекта?',
        'answer' => 'Стоимость зависит от технического задания, объёма работы и сроков. Ориентировочные цены можно посмотреть в разделе прайс-лист.'
      ],
    ];

    foreach ($faqs as $index => $item):
    ?>
      <div class="accordion-item bg-dark bg-opacity-50 mb-3 rounded" style="border: none;">
        <h2 class="accordion-header" id="heading<?= $index ?>">
          <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>" aria-expanded="false" aria-controls="collapse<?= $index ?>" style="background: transparent; box-shadow: none;">
            <?= Html::encode($item['question']) ?>
          </button>
        </h2>
        <div id="collapse<?= $index ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $index ?>" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-white" style="background: rgba(0,0,20,0.8);">
            <?= Html::encode($item['answer']) ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php
$css = <<<CSS
.lead {
  color: #dbe9ff;
}
.accordion-button {
  font-weight: 600;
  font-size: 1.125rem;
  border-radius: 0.5rem;
  transition: background-color 0.3s ease, transform 0.3s ease;
}
.accordion-button:not(.collapsed) {
  background-color: rgba(87, 161, 255, 0.2);
  color: #57a1ff;
  transform: scale(1.02);
}
.accordion-body {
  font-size: 1rem;
  color: #dbe9ff;
  animation: fadeInScale 0.35s ease forwards;
  opacity: 0;
  transform: scale(0.95);
}
.accordion-collapse.show .accordion-body {
  opacity: 1;
  transform: scale(1);
}
@keyframes fadeInScale {
  to {
    opacity: 1;
    transform: scale(1);
  }
}
CSS;

$this->registerCss($css);
?>

<script>
  document.querySelectorAll('.accordion-collapse').forEach((el) => {
    el.addEventListener('show.bs.collapse', () => {
      const body = el.querySelector('.accordion-body');
      body.style.animation = 'fadeInScale 0.35s ease forwards';
    });
  });
</script>
