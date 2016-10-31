<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Payment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'review_class_id')->textInput() ?>

    <?= $form->field($model, 'file')->fileInput(['maxlength' => true]) ?>

  <!--  <?= $form->field($model, 'deposit_slip')->textInput(['maxlength' => true]) ?> 

    <?= $form->field($model, 'date')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
