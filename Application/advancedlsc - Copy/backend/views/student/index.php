<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'lastname',
            'firstname',
            'middlename',
            'age',
            // 'gender',
            // 'contact_number',
            // 'email_address:email',
            // 'home_address',
            // 'school',
            // 'guardian_name',
            // 'relation',
            // 'guardian_contact_number',
            // 'guardian_email_address:email',
            // 'selected_school',
            // 'learned_lsc',
            // 'review_class_id',
            // 'schedule_id',
            // 'transaction_type',
            // 'date_of_registration',
            // 'status',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
