<?php
/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Backend разработка — SylphCode';
?>

<div class="container-xxl custom-container text-white py-5" style="min-height: 80vh;">
  <h1 class="mb-4" style="font-weight: 800; font-size: 3rem;">Backend разработка</h1>
  <p class="lead mb-5" style="font-size: 1.25rem; max-width: 720px;">
    Разрабатываем надежные и масштабируемые серверные решения для ваших проектов — API, бизнес-логику, интеграции и базы данных.
    Обеспечиваем безопасность, стабильность и производительность серверной части.
  </p>

  <h2 class="mb-3" style="font-weight: 700;">Наши услуги</h2>
  <ul class="list-unstyled mb-5" style="max-width: 720px;">
    <li class="mb-2">
      <i class="fas fa-check-circle me-2 text-primary"></i>Разработка REST и GraphQL API
    </li>
    <li class="mb-2">
      <i class="fas fa-check-circle me-2 text-primary"></i>Интеграция с базами данных и внешними сервисами
    </li>
    <li class="mb-2">
      <i class="fas fa-check-circle me-2 text-primary"></i>Оптимизация производительности и масштабируемость
    </li>
    <li class="mb-2">
      <i class="fas fa-check-circle me-2 text-primary"></i>Безопасность и управление доступом
    </li>
    <li class="mb-2">
      <i class="fas fa-check-circle me-2 text-primary"></i>Поддержка и сопровождение серверной части
    </li>
  </ul>

  <h2 class="mb-3" style="font-weight: 700;">Стоимость услуг</h2>

  <!-- Таблица для десктопа -->
  <div class="table-wrapper d-none d-md-block" style="max-width: 1100px;">
    <table class="table table-dark table-striped align-middle text-white">
      <thead>
        <tr>
          <th>Услуга</th>
          <th>Описание</th>
          <th class="text-end">Цена, ₽</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>API разработка</td>
          <td>Создание REST/GraphQL API для взаимодействия с фронтендом и внешними сервисами</td>
          <td class="text-end">от 25 000</td>
        </tr>
        <tr>
          <td>Интеграция с БД</td>
          <td>Настройка и оптимизация работы с базами данных и хранилищами данных</td>
          <td class="text-end">от 15 000</td>
        </tr>
        <tr>
          <td>Оптимизация и безопасность</td>
          <td>Повышение производительности, безопасность и защита от атак</td>
          <td class="text-end">от 10 000</td>
        </tr>
        <tr>
          <td>Поддержка и сопровождение</td>
          <td>Регулярное обновление, мониторинг и устранение ошибок серверной части</td>
          <td class="text-end">от 7 000</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Карточки для мобилки -->
  <div class="d-block d-md-none service-cards text-white">
    <div class="service-card mb-3 p-3 rounded">
      <div class="fw-bold text-primary">API разработка</div>
      <div class="small text-light mt-1">
        Создание REST/GraphQL API для взаимодействия с фронтендом и внешними сервисами
      </div>
      <div class="mt-2 text-end fw-semibold">от 25 000 ₽</div>
    </div>

    <div class="service-card mb-3 p-3 rounded">
      <div class="fw-bold text-primary">Интеграция с БД</div>
      <div class="small text-light mt-1">
        Настройка и оптимизация работы с базами данных и хранилищами данных
      </div>
      <div class="mt-2 text-end fw-semibold">от 15 000 ₽</div>
    </div>

    <div class="service-card mb-3 p-3 rounded">
      <div class="fw-bold text-primary">Оптимизация и безопасность</div>
      <div class="small text-light mt-1">
        Повышение производительности, безопасность и защита от атак
      </div>
      <div class="mt-2 text-end fw-semibold">от 10 000 ₽</div>
    </div>

    <div class="service-card mb-3 p-3 rounded">
      <div class="fw-bold text-primary">Поддержка и сопровождение</div>
      <div class="small text-light mt-1">
        Регулярное обновление, мониторинг и устранение ошибок серверной части
      </div>
      <div class="mt-2 text-end fw-semibold">от 7 000 ₽</div>
    </div>
  </div>

  <p class="mt-5" style="max-width: 720px; font-size: 1rem; color: #aaa;">
    Цены ориентировочные и зависят от объема и сложности работ. Для точного расчета свяжитесь с нами через
    <a href="/contacts" class="text-primary text-decoration-none">контактную форму</a>.
  </p>
</div>

<?php
$css = <<<CSS
.lead {
  color: #dbe9ff;
}

.text-primary {
  color: #57a1ff !important;
}

.table-dark {
  background-color: rgba(0, 0, 20, 0.8);
}

.table-dark > thead > tr > th {
  border-bottom: 2px solid #57a1ff;
}

.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: rgba(10, 30, 60, 0.6);
}

a.text-primary:hover {
  color: #9ccfff !important;
}

.service-card {
  background-color: rgba(0, 0, 20, 0.85);
  border: 1px solid rgba(87, 161, 255, 0.2);
}

/* ===== Мобильный адаптив ===== */
@media (max-width: 768px) {
  .custom-container {
    padding-left: 1rem;
    padding-right: 1rem;
  }

  h1 {
    font-size: 2rem !important;
  }

  h2 {
    font-size: 1.5rem !important;
  }

  .lead {
    font-size: 1rem !important;
  }

  ul li {
    font-size: 0.95rem;
  }

  .table {
    font-size: 0.875rem;
  }

  p.mt-5 {
    font-size: 0.9rem !important;
  }
}
CSS;

$this->registerCss($css);
?>
