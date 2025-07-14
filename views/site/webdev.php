<?php
/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Веб-разработка — SylphCode';
?>

<div class="container-xxl custom-container text-white py-5" style="min-height: 80vh;">
  <h1 class="mb-4" style="font-weight: 800; font-size: 3rem;">Веб-разработка</h1>
  <p class="lead mb-5" style="font-size: 1.25rem; max-width: 720px;">
    Создаем современные, быстрые и надежные веб-приложения для любых целей — от лендингов и корпоративных сайтов до сложных SaaS и e-commerce платформ.
    Используем современные технологии, учитываем ваши бизнес-задачи и гарантируем высокое качество и безопасность.
  </p>

  <h2 class="mb-3" style="font-weight: 700;">Наши услуги</h2>
  <ul class="list-unstyled mb-5" style="max-width: 720px;">
    <li class="mb-2">
      <i class="fas fa-check-circle me-2 text-primary"></i>Разработка SPA и многостраничных сайтов
    </li>
    <li class="mb-2">
      <i class="fas fa-check-circle me-2 text-primary"></i>Интеграция с API и сторонними сервисами
    </li>
    <li class="mb-2">
      <i class="fas fa-check-circle me-2 text-primary"></i>Оптимизация скорости и SEO
    </li>
    <li class="mb-2">
      <i class="fas fa-check-circle me-2 text-primary"></i>Мобильная адаптация и кроссбраузерность
    </li>
    <li class="mb-2">
      <i class="fas fa-check-circle me-2 text-primary"></i>Поддержка и доработка существующих проектов
    </li>
  </ul>

  <h2 class="mb-3" style="font-weight: 700;">Стоимость услуг</h2>

  <!-- Таблица для десктопа -->
  <div class="table-wrapper d-none d-md-block" style="max-width: 800px;">
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
          <td>Лендинг</td>
          <td>Одностраничный сайт с адаптивным дизайном</td>
          <td class="text-end">от 20 000</td>
        </tr>
        <tr>
          <td>Корпоративный сайт</td>
          <td>Многостраничный сайт с системой управления</td>
          <td class="text-end">от 50 000</td>
        </tr>
        <tr>
          <td>Интернет-магазин</td>
          <td>Полнофункциональная платформа с корзиной и оплатой</td>
          <td class="text-end">от 120 000</td>
        </tr>
        <tr>
          <td>Веб-приложение (SaaS)</td>
          <td>Сложные бизнес-приложения с регистрацией и API</td>
          <td class="text-end">от 200 000</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Карточки для мобилки -->
  <div class="d-block d-md-none service-cards text-white" style="max-width: 720px;">
    <div class="service-card mb-3 p-3 rounded">
      <div class="fw-bold text-primary">Лендинг</div>
      <div class="small text-light mt-1">Одностраничный сайт с адаптивным дизайном</div>
      <div class="mt-2 text-end fw-semibold">от 20 000 ₽</div>
    </div>

    <div class="service-card mb-3 p-3 rounded">
      <div class="fw-bold text-primary">Корпоративный сайт</div>
      <div class="small text-light mt-1">Многостраничный сайт с системой управления</div>
      <div class="mt-2 text-end fw-semibold">от 50 000 ₽</div>
    </div>

    <div class="service-card mb-3 p-3 rounded">
      <div class="fw-bold text-primary">Интернет-магазин</div>
      <div class="small text-light mt-1">Полнофункциональная платформа с корзиной и оплатой</div>
      <div class="mt-2 text-end fw-semibold">от 120 000 ₽</div>
    </div>

    <div class="service-card mb-3 p-3 rounded">
      <div class="fw-bold text-primary">Веб-приложение (SaaS)</div>
      <div class="small text-light mt-1">Сложные бизнес-приложения с регистрацией и API</div>
      <div class="mt-2 text-end fw-semibold">от 200 000 ₽</div>
    </div>
  </div>

  <p class="mt-5" style="max-width: 720px; font-size: 1rem; color: #aaa;">
    Цены ориентировочные и зависят от технического задания и объема работ. Для точного расчета свяжитесь с нами через
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
