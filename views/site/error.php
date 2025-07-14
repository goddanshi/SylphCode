<?php
/* @var $this yii\web\View */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'Ошибка';

?>
<h1>Ошибка</h1>
<p><?= Html::encode($exception->getMessage()) ?></p>
