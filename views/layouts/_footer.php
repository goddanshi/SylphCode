<?php
use yii\helpers\Url;
?>

<footer class="footer py-5">
  <div class="container-xxl custom-container d-flex justify-content-between text-white flex-wrap">
    <div class="footer-col logo-col mb-4">
      <a class="logo-link" href="<?= Url::to('/') ?>">SylphCode</a>
    </div>

    <div class="footer-col mb-4">
      <h5 class="footer-title">Услуги</h5>
      <ul class="footer-list list-unstyled">
        <li><a href="/webdev" class="footer-link">Веб-разработка</a></li>
        <li><a href="/podderzhka-saytov" class="footer-link">Поддержка сайтов</a></li>
        <li><a href="/frontend-dev" class="footer-link">Frontend разработка</a></li>
        <li><a href="/backend-dev" class="footer-link">Backend разработка</a></li>
      </ul>
    </div>

    <div class="footer-col mb-4">
      <h5 class="footer-title">О нас</h5>
      <ul class="footer-list list-unstyled">
        <li><a href="/case" class="footer-link">Кейсы</a></li>
        <li><a href="/blog" class="footer-link">Блог</a></li>
        <li><a href="/faq" class="footer-link">Вопрос-ответ</a></li>
        <li><a href="/price-list" class="footer-link">Прайс-лист</a></li>
      </ul>
    </div>

    <div class="footer-col mb-4">
      <h5 class="footer-title">Контакты</h5>
      <p class="mb-2"><i class="fas fa-envelope me-2"></i><a href="mailto:info@sylphcode.ru" class="footer-link">info@sylphcode.ru</a></p>
      <p class="mb-2"><i class="fas fa-phone me-2"></i><a href="tel:+79001234567" class="footer-link">+7 (919) 507-63-45</a></p>
      <p class="mb-0"><i class="fas fa-clock me-2"></i>Пн-Пт: 09:00 - 20:00</p>
    </div>
  </div>
</footer>

<?php
$css = <<<CSS
.footer {
  background: rgba(0, 0, 0, 0.25);
  box-shadow: 0 -1px 10px rgba(0,0,0,0.3);
  width: 100%;
  z-index: 1100; /* добавлен z-index */
  position: relative; /* чтобы z-index работал */
  user-select: none;
}

.footer-col {
  min-width: 160px;
}

.logo-link {
  font-size: 36px;
  font-weight: 800;
  color: white;
  text-decoration: none;
  letter-spacing: 0.5px;
}

.logo-link:hover {
  color: #57a1ff;
  text-decoration: none;
}

.footer-title {
  font-size: 20px;
  margin-bottom: 16px;
  font-weight: 700;
}

.footer-list {
  padding-left: 0;
  margin-bottom: 0;
}

.footer-link {
  display: inline-block;
  color: white;
  font-size: 16px;
  margin-bottom: 8px;
  text-decoration: none;
  transition: color 0.2s ease;
}

.footer-link:hover {
  color: #57a1ff;
  text-decoration: underline;
}

.footer p {
  font-size: 16px;
  margin-bottom: 8px;
  color: white;
}

.footer i {
  width: 18px;
  text-align: center;
}

@media (max-width: 767px) {
  .footer {
    text-align: center;
  }
  .footer-col {
    min-width: 100%;
    margin-bottom: 24px;
  }
}
CSS;

$this->registerCss($css);
?>
