<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\ReviewClass;
use common\models\Schedule;
use common\models\user;

/* @var $this yii\web\View */
/* @var $model common\models\Transaction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaction-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?> 

    <?= $form->field($model, 'transaction_type')->dropDownList([ 'Reserve' => 'Reserve', 'Enroll' => 'Enroll', ], ['prompt' => '']) ?>

    <!-- <?= $form->field($model, 'review_class_id')->textInput() ?> -->

       <?= $form->field($model, 'review_class_id')->dropDownList(
        ArrayHelper::map(ReviewClass::find()->all(),'id','name'),
        ['prompt'=>'Select Review Class']
    ) ?>

    <!-- <?= $form->field($model, 'schedule_id')->textInput() ?> -->

    <?= $form->field($model, 'schedule_id')->dropDownList(
        ArrayHelper::map(Schedule::find()->all(),'id','batch'),
        ['prompt'=>'Select Schedule']
    ) ?>

    <?= $form->field($model, 'payment_slip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Pending' => 'Pending', 'Reserved' => 'Reserved', 'Enrolled' => 'Enrolled', 'Done' => 'Done', 'Cancelled' => 'Cancelled', ], ['prompt' => '']) ?>

   <!-- <?= $form->field($model, 'date')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
