<?php

use yii\helpers\Html;
use yii\grid\GridView;
use vendor\almasaeed2010\adminlte\plugins\datepicker\datepicker3;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ReviewClassSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Review Classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-class-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Review Class', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description',
            /*[
                'attribute'=>'start_date',
                'value'=>'start_date',
                'format'=>'raw',
                'filter'=>datepicker::className(),[
                    'model'=> $searchModel,
                    'attribute'=> 'start_date',
                    'inline' =>false,
                    'clientOption' => [
                    'autoclose' => true,
                    'format' => 'mm/dd/yyyy'
                ]
                ])
            ]*/

            'start_date',
            'end_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
