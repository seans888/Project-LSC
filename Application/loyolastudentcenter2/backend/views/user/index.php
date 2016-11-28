<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
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
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
             'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',
             'lastname',
             'firstname',
             'middlename',
            // 'age',
            // 'gender',
             'contact_number',
             'home_address',
            // 'school',
            // 'guardian_name',
            // 'relation',
            // 'guardian_contact_number',
            // 'guardian_email_address:email',
            // 'learned_lsc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
