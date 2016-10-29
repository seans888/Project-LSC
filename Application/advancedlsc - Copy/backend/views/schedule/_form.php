<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\ReviewClass;

/* @var $this yii\web\View */
/* @var $model common\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(); ?>

   <!-- <?= $form->field($model, 'review_class_id')->textInput() ?> -->
   <?= $form->field($model, 'review_class_id')->dropDownList(
        ArrayHelper::map(ReviewClass::find()->all(),'id','name'),
        ['prompt'=>'Select Review Class']
    ) ?>

    <?= $form->field($model, 'duration_of_hours')->textInput() ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'end_time')->textInput() ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
