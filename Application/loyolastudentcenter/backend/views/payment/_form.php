<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\ReviewClass;
use common\moels\User;

/* @var $this yii\web\View */
/* @var $model common\models\Payment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'transaction_user_id')->textInput() ?>

     <?= $form->field($model, 'transaction_review_class_id')->dropDownList(ArrayHelper::map(ReviewClass::find()->all(),'id','name'),
        ['prompt'=>'--Select--']) ?>
    <?= $form->field($model, 'transaction_schedule_id')->textInput() ?>

    <?= $form->field($model, 'payment_slip')->fileInput(['maxlength' => true]) ?>

   <!-- <?= $form->field($model, 'date')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
