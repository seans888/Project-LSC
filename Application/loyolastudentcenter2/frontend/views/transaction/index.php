<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TransactionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transactions';
?>
<div class="transaction-index"><br>

    <h1 class="h1a"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 <!--   <p>
        <?= Html::a('Create Transaction', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

       //    'id',
        //    'user_id',
            'review_class_id',
            'schedule_id',
            'transaction_type',
            // 'selected_school',
            // 'status',
            // 'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
