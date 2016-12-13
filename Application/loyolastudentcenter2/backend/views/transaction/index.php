<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TransactionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transactions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaction-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transaction', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){
            if($model -> status == 'Pending'){
                return['style' => 'background-color:#F9E398'];
            }elseif ($model -> status == 'Reserved'){
                return['style' => 'background-color:#98D3F9'];
            }elseif ($model -> status == 'Enrolled') {
                return['style' => 'background-color:#B3F998'];
            }elseif($model -> status == 'Done'){
                return['style' => 'background-color:#EEF66C'];
            }elseif ($model -> status == 'Cancelled') {
                return['class' => 'danger'];
            }
        },
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'user_id',
            'review_class_id',
            'schedule_id',
            'transaction_type',
            'selected_school',
            'status',
             'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
