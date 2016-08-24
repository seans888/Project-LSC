<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){
            if($model -> position == 'Admin')
            {
                 return ['class' => 'danger'];
               // return['style' => 'background-color:#FF0000':'background-color:#0000FF'];
            }elseif ($model -> position == 'Instructor') {
               // return['style' => 'background-color:#FF0000':'background-color:#0000FF'];
               return['class'=>'success'];
            }

        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'lastname',
            'firstname',
            'middlename',
            'gender',
            // 'age',
             'position',
             'contact_Number',
            // 'email_address:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
