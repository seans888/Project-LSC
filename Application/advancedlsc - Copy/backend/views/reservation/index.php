<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReservationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reservations';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservation-index">

    <!--<h1><?= Html::encode($this->title) ?></h1>  -->
    <br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reservation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'schedule',
            'student_id',
            'employee_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
