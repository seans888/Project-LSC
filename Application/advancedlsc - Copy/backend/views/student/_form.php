<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Reserve' => 'Reserve', 'Enroll' => 'Enroll', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'number_of_hours')->textInput() ?>

    <?= $form->field($model, 'review_class')->dropDownList([ 'Comprehensive College Entrance Exam' => 'Comprehensive College Entrance Exam', 'Highschool Entrance Exam' => 'Highschool Entrance Exam', 'Civil Service Examination' => 'Civil Service Examination', 'Law Aptitude Examination/Law School Admission Test' => 'Law Aptitude Examination/Law School Admission Test', 'National Medical Admission Test' => 'National Medical Admission Test', 'Career Service Examination' => 'Career Service Examination', 'SAT Reasoning Test' => 'SAT Reasoning Test', 'Graduate Management Admission Test' => 'Graduate Management Admission Test', 'Graduate Record Examination' => 'Graduate Record Examination', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'Female' => 'Female', 'Male' => 'Male', ], ['prompt' => '']) ?>

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

    <?= $form->field($model, 'date_of_registration')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
