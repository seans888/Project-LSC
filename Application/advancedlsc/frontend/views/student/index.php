<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Student', ['value'=>Url::to('index.php?r=student%2Fcreate'), 
              'class' => 'btn btn-success','id'=>'modalButton'
        ]) ?>

    </p>

    <?php
        Modal::begin([
                'header'=>'<h4>Students</h4>',
                'id'=>'modal',
                'size'=>'modal-lg',
            ]);

        echo "<div id='modalContent'></div>";

        Modal::end();
    ?>

    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'number_of_hours',
            'review_class',
            'lastname',
            'firstname',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
