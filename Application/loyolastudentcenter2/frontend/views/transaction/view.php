<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Transaction */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?><br><br><br>
<div class="transaction-view">


  <!--  <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
-->

     <center> <?php echo
            '<h1>'.Yii::$app->user->identity->firstname.' '.Yii::$app->user->identity->lastname.'</h1>'?>
     </center><br>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'reviewClass.name:text:Review Class',
            'schedule.start_date:text: Start Date',
            'schedule.end_date:text: End Date',
            'transaction_type',
            'selected_school',
            'status',
            'date',

        ],
    ]) ?>

</div>
