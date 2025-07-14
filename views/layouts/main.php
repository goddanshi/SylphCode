<?php
/** @var yii\web\View $this */
/** @var string $content */

use yii\helpers\Html;

$this->registerCssFile('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [
    'crossorigin' => 'anonymous',
]);

$this->registerJsFile('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [
    'position' => \yii\web\View::POS_END,
    'depends' => [\yii\web\JqueryAsset::class]
]);

$this->registerJsFile('https://cdn.jsdelivr.net/npm/tsparticles@2.12.0/tsparticles.bundle.min.js', [
    'position' => \yii\web\View::POS_END,
    'depends' => [\yii\web\JqueryAsset::class]
]);

$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', [
    'depends' => [\yii\web\JqueryAsset::class],
]);
// Инициализация tsParticles с замедленной скоростью
$this->registerJs(<<<JS
document.addEventListener('DOMContentLoaded', function() {
    if (typeof tsParticles !== 'undefined') {
        tsParticles.load("tsparticles", {
            particles: {
                number: { value: 100, density: { enable: true, value_area: 800 } },
                color: { value: "#57a1ff" },
                shape: { type: "circle" },
                opacity: { value: 0.8, random: false },
                size: { value: 3, random: true },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#57a1ff",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 0.3,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out",
                    bounce: false
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: { enable: true, mode: "repulse" },
                    onclick: { enable: true, mode: "push" },
                    resize: true
                },
                modes: {
                    grab: { distance: 140, line_linked: { opacity: 1 } },
                    bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
                    repulse: { distance: 200, duration: 0.4 },
                    push: { particles_nb: 4 },
                    remove: { particles_nb: 2 }
                }
            },
            retina_detect: true
        });
    }
});
JS, \yii\web\View::POS_END);

$this->registerCss(<<<CSS
html, body {
  margin: 0; padding: 0; height: 100%;
  background-color: #000014;
  overflow-x: hidden;
}

#tsparticles {
  position: fixed !important;
  top: 0 !important;
  left: 0 !important;
  width: 100vw !important;
  height: 100vh !important;
  z-index: 0 !important; /* фон, самый нижний слой */
  pointer-events: none !important;
  background: transparent !important;
}

#tsparticles canvas {
  display: block !important;
  width: 100% !important;
  height: 100% !important;
}
 #yii-debug-toolbar{
    display:none !important; 
 }
.content-wrapper {
  position: relative;
  z-index: 10; /* поверх партиклов */
  min-height: 100vh;
  background: transparent;
}
CSS);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= Yii::getAlias('@web') ?>/favicon.ico" type="image/x-icon">
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(103315344, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/103315344" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <!-- Подключаем FontAwesome без integrity -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <?php
    use yii\web\YiiAsset;
    use yii\widgets\ActiveFormAsset;

    YiiAsset::register($this);
    ActiveFormAsset::register($this);
    ?>

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="h-100">
<?php $this->beginBody() ?>

<!-- Контейнер для партиклов -->
<div id="tsparticles"></div>

<!-- Основной контент с header и input -->
<div class="content-wrapper">
    <?= $this->render('_header') ?>
      <?= $content ?>
</div>

<?php $this->endBody() ?>
    <?= $this->render('_footer') ?>  
</body>
</html>
<?php $this->endPage() ?>
