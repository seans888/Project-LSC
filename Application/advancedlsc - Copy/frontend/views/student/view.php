<html><br> <br> </html>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Student */
 
$this->title = $model->lastname . ', ' . $model->firstname;
/* $this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;  */
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>
<!--
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p> -->
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
        'status',
            'type',
           // 'number_of_hours',
            'review_class',
            'lastname',
            'firstname',
            'middlename',
            'nickname',
            'gender',
            'age',
            'email_address:email',
            'contact_number',
            'address',
            'school',
            'school_address',
            'guardian_name',
            'relation',
            'guardian_contact_number',
            'guardian_email_address:email',
            'date_of_registration',
        ],
    ]) ?>

</div>
