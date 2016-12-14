<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PaymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payments';
?>
<div class="payment-index"> <br>

    <h1 class="h1a"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 <!--   <p>
        <?= Html::a('Create Payment', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'payment_slip',
            'date',
            'transaction_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
