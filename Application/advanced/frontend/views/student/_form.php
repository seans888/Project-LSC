<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>
<table class="tb2">

<div class="student-form">
	<div class= "rowb">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number_of_hours')->textInput() ?>

    <?= $form->field($model, 'review_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'email_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_number')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_contact_number')->textInput() ?>

    <?= $form->field($model, 'guardian_email_address')->textInput(['maxlength' => true]) ?>

   <!-- <?= $form->field($model, 'date_of_registration')->textInput() ?> -->

   <!-- <?= $form->field($model, 'Employee_id')->textInput() ?> -->

    <!-- <?= $form->field($model, 'Account_id')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
</table>
