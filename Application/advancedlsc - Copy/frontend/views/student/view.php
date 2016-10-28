<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Student */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'review_class_id' => $model->review_class_id, 'schedule_id' => $model->schedule_id, 'user_id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'review_class_id' => $model->review_class_id, 'schedule_id' => $model->schedule_id, 'user_id' => $model->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'lastname',
            'firstname',
            'middlename',
            'age',
            'gender',
            'contact_number',
            'email_address:email',
            'home_address',
            'school',
            'guardian_name',
            'relation',
            'guardian_contact_number',
            'guardian_email_address:email',
            'selected_school',
            'learned_lsc',
            'review_class_id',
            'schedule_id',
            'transaction_type',
            'date_of_registration',
            'status',
            'user_id',
        ],
    ]) ?>

</div>
