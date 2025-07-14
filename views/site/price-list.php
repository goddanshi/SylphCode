<?php
/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Прайс-лист — SylphCode';
?>

<div class="container-xxl custom-container text-white py-5" style="min-height: 80vh;">
  <h1 class="mb-4" style="font-weight: 800; font-size: 3rem;">Прайс-лист</h1>
  <p class="lead mb-5" style="font-size: 1.25rem; max-width: 720px;">
    Ознакомьтесь с ориентировочными ценами на наши услуги. Точные расчеты зависят от технического задания и объема работ.
  </p>

  <!-- Таблица для десктопа -->
  <div class="table-wrapper d-none d-md-block mb-5" style="max-width: 1100px;">
    <table class="table table-dark table-striped align-middle text-white no-wrap-table">
      <thead>
        <tr>
          <th>Услуга</th>
          <th>Описание</th>
          <th class="text-end">Цена, ₽</th>
        </tr>
      </thead>
      <tbody>
        <!-- Веб-разработка -->
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

        <!-- Поддержка сайтов -->
        <tr>
          <td>Базовая поддержка</td>
          <td>Обеспечивает стабильную работу одностраничного сайта, обновления и базовую защиту</td>
          <td class="text-end">от 5 000</td>
        </tr>
        <tr>
          <td>Расширенная поддержка</td>
          <td>Поддержка многостраничного сайта, регулярное обновление и мониторинг безопасности</td>
          <td class="text-end">от 10 000</td>
        </tr>
        <tr>
          <td>Техническая консультация</td>
          <td>Помощь и консультации по развитию платформы, решение технических вопросов</td>
          <td class="text-end">1 200 / час</td>
        </tr>

        

        <!-- Backend разработка -->
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
          <td class="text-end">от 7 000 / мес</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Карточки для мобилки -->
  <div class="d-block d-md-none service-cards text-white" style="max-width: 720px;">
    <?php
      $services = [
        ['title' => 'Лендинг', 'desc' => 'Одностраничный сайт с адаптивным дизайном', 'price' => 'от 20 000'],
        ['title' => 'Корпоративный сайт', 'desc' => 'Многостраничный сайт с системой управления', 'price' => 'от 50 000'],
        ['title' => 'Интернет-магазин', 'desc' => 'Полнофункциональная платформа с корзиной и оплатой', 'price' => 'от 120 000'],
        ['title' => 'Веб-приложение (SaaS)', 'desc' => 'Сложные бизнес-приложения с регистрацией и API', 'price' => 'от 200 000'],

        ['title' => 'Базовая поддержка', 'desc' => 'Обеспечивает стабильную работу одностраничного сайта, обновления и базовую защиту', 'price' => 'от 5 000'],
        ['title' => 'Расширенная поддержка', 'desc' => 'Поддержка многостраничного сайта, регулярное обновление и мониторинг безопасности', 'price' => 'от 10 000'],
        ['title' => 'Техническая консультация', 'desc' => 'Помощь и консультации по развитию платформы, решение технических вопросов', 'price' => '1 200 / час'],

        ['title' => 'API разработка', 'desc' => 'Создание REST/GraphQL API для взаимодействия с фронтендом и внешними сервисами', 'price' => 'от 25 000'],
        ['title' => 'Интеграция с БД', 'desc' => 'Настройка и оптимизация работы с базами данных и хранилищами данных', 'price' => 'от 15 000'],
        ['title' => 'Оптимизация и безопасность', 'desc' => 'Повышение производительности, безопасность и защита от атак', 'price' => 'от 10 000'],
        ['title' => 'Поддержка и сопровождение', 'desc' => 'Регулярное обновление, мониторинг и устранение ошибок серверной части', 'price' => 'от 7 000 / мес'],
      ];
      foreach ($services as $service): ?>
        <div class="service-card mb-3 p-3 rounded">
          <div class="fw-bold text-primary"><?= Html::encode($service['title']) ?></div>
          <div class="small text-light mt-1"><?= Html::encode($service['desc']) ?></div>
          <div class="mt-2 text-end fw-semibold"><?= Html::encode($service['price']) ?> ₽</div>
        </div>
    <?php endforeach; ?>
  </div>

  <p class="mt-5" style="max-width: 720px; font-size: 1rem; color: #aaa;">
    Цены ориентировочные и зависят от технического задания и объема работ. Для точного расчета свяжитесь с нами через <a href="/contacts" class="text-primary text-decoration-none">контактную форму</a>.
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

.no-wrap-table td,
.no-wrap-table th {
  white-space: nowrap;
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
