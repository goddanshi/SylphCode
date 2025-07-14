<?php
use yii\helpers\Url;
?>

<header class="header">
  <nav class="navbar navbar-expand-lg navbar-dark w-100">
    <div class="container-xxl custom-container">
      <!-- Логотип -->
      <a class="logo-link navbar-brand" href="<?= Url::to('/') ?>">SylphCode</a>

      <!-- Кнопка для бургер-меню -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#mainNavbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Навигация -->
      <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
        <ul class="navbar-nav gap-3">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/service" role="button" data-bs-toggle="dropdown">
              Услуги
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/webdev">Веб-разработка</a></li>
              <li><a class="dropdown-item" href="/podderzhka-saytov">Поддержка сайтов</a></li>
              <li><a class="dropdown-item" href="/frontend-dev">Frontend разработка</a></li>
              <li><a class="dropdown-item" href="/backend-dev">Backend разработка</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="/price-list">Прайс-лист</a></li>
          <li class="nav-item"><a class="nav-link" href="/case">Кейсы</a></li>
          <li class="nav-item"><a class="nav-link" href="/contacts">Контакты</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="/blog">Блог</a></li> -->
          <li class="nav-item"><a class="nav-link" href="/faq">Вопрос-ответ</a></li>
         <li class="nav-item">
            <a class="nav-link" href="/redirect-dashboard">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" width="48px">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0
                        a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 
                        9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<?php
$css = <<<CSS
body {
    background: #0a1f44; /* Темный фон для контраста */
  }
.header {
  /* Удалено position: fixed */
  position: static; /* или просто убрать эту строку */
  top: auto; /* не нужен */
  left: auto; /* не нужен */
  width: 100%;
  z-index: 1000;
  background: transparent;
  backdrop-filter: none;
  box-shadow: none;
}

.custom-container {
  max-width: 1600px;
  width: 100%;
  padding: 0 40px;
}

.logo-link {
  text-decoration: none;
  color: white;
  font-size: 48px;
  font-weight: 800;
  letter-spacing: 0.5px;
}

.logo-link:hover,
.logo-link:focus,
.logo-link:active {
  color: white !important;
  background-color: transparent !important;
  border: none !important;
  box-shadow: none !important;
  transform: none !important;
}

.nav {
  gap: 16px;
}

.nav-link {
  color: white;
  font-size: 28px;
  padding: 10px 16px;
  border: 1px solid transparent;
  border-radius: 16px;
  transition: transform 0.2s ease, border 0.2s ease, background-color 0.2s ease;
}

.nav-link:hover {
  transform: scale(1.05);
  border: 1px solid rgba(255, 255, 255, 0.6);
  background-color: rgba(255, 255, 255, 0.08);
}

.dropdown-menu {
  background-color: rgba(0, 0, 0, 0.9);
  border-radius: 16px;
  border: none;
  padding: 10px 0;
}

.dropdown-item {
  color: white;
  font-size: 24px;
  padding: 10px 20px;
  transition: background-color 0.2s ease;
}

.dropdown-item:hover {
  background-color: rgba(255, 255, 255, 0.06);
  color: white;
}

.dropdown-toggle::after {
  display: none !important;
}
CSS;

$this->registerCss($css);
?>
