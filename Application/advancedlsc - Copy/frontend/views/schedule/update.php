<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Schedule */

$this->title = 'Update Schedule: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'review_class_id' => $model->review_class_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="schedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
