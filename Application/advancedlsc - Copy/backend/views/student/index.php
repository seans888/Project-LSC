<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

   <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
         'rowOptions' => function($model){
            if($model -> status == 'Pending')
            {
                // return ['class' => 'danger'];
                return['style' => 'background-color:#F9E398'];
            }elseif ($model -> status == 'Reserved') {
               return['style' => 'background-color:#98D3F9'];
               //return['class'=>'success'];

            }elseif ($model -> status == 'Enrolled') {
               return['style' => 'background-color:#B3F998'];
               //return['class'=>'success'];
            
            }elseif ($model -> status == 'Done') {
               return['style' => 'background-color:#EEF66C'];
               //return['class'=>'success'];
            }elseif ($model -> status == 'Cancelled') {
               return['class'=>'danger'];
            }        
        },
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            //'number_of_hours',
            'review_class',
            'lastname',
            // 'firstname',
            // 'middlename',
            // 'nickname',
            // 'gender',
            // 'age',
            // 'email_address:email',
            // 'contact_number',
            // 'address',
            // 'school',
            // 'school_address',
            // 'guardian_name',
            // 'relation',
            // 'guardian_contact_number',
            // 'guardian_email_address:email',
             'date_of_registration',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
