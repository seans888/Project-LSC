<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Transaction */

$this->title = 'Update Transaction: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'user_id' => $model->user_id, 'review_class_id' => $model->review_class_id, 'schedule_id' => $model->schedule_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaction-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
