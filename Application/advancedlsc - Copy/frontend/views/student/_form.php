<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">
<br>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'type')->dropDownList([ 'Reserve' => 'Reserve', 'Enroll' => 'Enroll', ], ['prompt' => '']) ?>

 <!--   <?= $form->field($model, 'number_of_hours')->textInput() ?> -->

    <?= $form->field($model, 'review_class')->dropDownList([ 'Comprehensive College Entrance Exam' => 'Comprehensive College Entrance Exam', 'Highschool Entrance Exam' => 'Highschool Entrance Exam', 'Civil Service Examination' => 'Civil Service Examination', 'Law Aptitude Examination/Law School Admission Test' => 'Law Aptitude Examination/Law School Admission Test', 'National Medical Admission Test' => 'National Medical Admission Test', 'Career Service Examination' => 'Career Service Examination', 'SAT Reasoning Test' => 'SAT Reasoning Test', 'Graduate Management Admission Test' => 'Graduate Management Admission Test', 'Graduate Record Examination' => 'Graduate Record Examination', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true])->hint('e.g. Dela Cruz')->label('Last Name') ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true])->hint('e.g. Juan')->label('First Name') ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true])->hint('e.g. Juan'.'<br> Leave blank if none')->label('Middle Name') ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true])->hint('e.g. Juan'.'<br>Leave blank if none')->label('Nick Name') ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'age')->textInput()->hint('e.g. 20')->label('Age') ?>

    <?= $form->field($model, 'email_address')->textInput(['maxlength' => true])->hint('e.g. jdelacruz@gmail.com')->label('Email Address') ?>

    <?= $form->field($model, 'contact_number')->textInput(['maxlength' => true])->hint('e.g. 09204968535')->label('Contact Number') ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true])->hint('Street, Barangay, City')->label('Address') ?>

    <?= $form->field($model, 'school')->textInput(['maxlength' => true])->hint('e.g. Ateneo de Manila')->label('Last Name') ?>

    <?= $form->field($model, 'school_address')->textInput(['maxlength' => true])->hint('Street, City')->label('Last Name') ?>

    <?= $form->field($model, 'guardian_name')->textInput(['maxlength' => true])->hint('e.g. Maria Dela Cruz')->label('Guardian Name') ?>

    <?= $form->field($model, 'relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_contact_number')->textInput(['maxlength' => true])->hint('e.g. 09548493747')->label('Guardian Contact') ?>

    <?= $form->field($model, 'guardian_email_address')->textInput(['maxlength' => true])->hint('e.g. MariaDelaCruz@gmail.com')->label('Last Name') ?>

  <!--  <?= $form->field($model, 'date_of_registration')->textInput() ?> -->

  <!--  <?= $form->field($model, 'status')->dropDownList([ 'Pending' => 'Pending', 'Reserved' => 'Reserved', 'Enrolled' => 'Enrolled', 'Done' => 'Done', 'Cancelled' => 'Cancelled', ], ['prompt' => '']) ?>  -->

  <?= $form->field($model, 'file')->fileInput(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<!--commnent-->