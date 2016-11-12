<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Transaction */

$this->title = $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaction-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'user_id' => $model->user_id, 'review_class_id' => $model->review_class_id, 'schedule_id' => $model->schedule_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'user_id' => $model->user_id, 'review_class_id' => $model->review_class_id, 'schedule_id' => $model->schedule_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'transaction_type',
            'user_id',
            'review_class_id',
            'schedule_id',
            'payment_slip',
            'status',
            'date',
        ],
    ]) ?>

</div>
