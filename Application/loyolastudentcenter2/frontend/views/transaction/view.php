<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Transaction */

$this->title = $model->id;
?>
<div class="transaction-view"><br><br>

    <h1 class="h1a"><?= Html::encode($this->title) ?></h1>

  <!--  <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p> -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'review_class_id',
            'schedule_id',
            'transaction_type',
            'selected_school',
            'status',
            'date',
        ],
    ]) ?>

</div>
