<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Employee */

$this->title = $model->lastname . ', ' . $model->firstname;
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-view">

  <!--  <h1><?= Html::encode($this->title) ?></h1> -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'lastname',
            'firstname',
            'middlename',
            'gender',
            'age',
            'position',
            'contact_Number',
            'email_address:email',
        ],
    ]) ?>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
