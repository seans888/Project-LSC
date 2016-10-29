<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">
<br>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true])->hint('e.g. Dela Cruz')->label('Last Name') ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true])->hint('e.g. Juan')->label('First Name') ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true])->hint('e.g. Juan'.'<br> Leave blank if none')->label('Middle Name') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true])->hint('e.g. Juan'.'<br>Leave blank if none')->label('Nick Name') ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'age')->textInput()->hint('e.g. 20')->label('Age') ?>
=======
    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'contact_number')->textInput(['maxlength' => true]) ?>
>>>>>>> 5c4d0f5c1176c23c76ace3da95e9b86a3b5b7810

    <?= $form->field($model, 'email_address')->textInput(['maxlength' => true])->hint('e.g. jdelacruz@gmail.com')->label('Email Address') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'contact_number')->textInput(['maxlength' => true])->hint('e.g. 09204968535')->label('Contact Number') ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true])->hint('Street, Barangay, City')->label('Address') ?>
=======
    <?= $form->field($model, 'home_address')->textInput(['maxlength' => true]) ?>
>>>>>>> 5c4d0f5c1176c23c76ace3da95e9b86a3b5b7810

    <?= $form->field($model, 'school')->textInput(['maxlength' => true])->hint('e.g. Ateneo de Manila')->label('Last Name') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'school_address')->textInput(['maxlength' => true])->hint('Street, City')->label('Last Name') ?>

    <?= $form->field($model, 'guardian_name')->textInput(['maxlength' => true])->hint('e.g. Maria Dela Cruz')->label('Guardian Name') ?>
=======
    <?= $form->field($model, 'guardian_name')->textInput(['maxlength' => true]) ?>
>>>>>>> 5c4d0f5c1176c23c76ace3da95e9b86a3b5b7810

    <?= $form->field($model, 'relation')->dropDownList([ 'Parent' => 'Parent', 'Grandparent' => 'Grandparent', 'Sibling' => 'Sibling', 'Other' => 'Other', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'guardian_contact_number')->textInput(['maxlength' => true])->hint('e.g. 09548493747')->label('Guardian Contact') ?>

    <?= $form->field($model, 'guardian_email_address')->textInput(['maxlength' => true])->hint('e.g. MariaDelaCruz@gmail.com')->label('Last Name') ?>

    <?= $form->field($model, 'selected_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'learned_lsc')->dropDownList([ 'friends' => 'Friends', 'relatives' => 'Relatives', 'newspaper ads' => 'Newspaper ads', 'LSC signage/poster' => 'LSC signage/poster', 'school' => 'School', 'others' => 'Others', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'review_class_id')->textInput() ?>

    <?= $form->field($model, 'schedule_id')->textInput() ?>

    <?= $form->field($model, 'transaction_type')->dropDownList([ 'Reserve' => 'Reserve', 'Enroll' => 'Enroll', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'date_of_registration')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Pending' => 'Pending', 'Reserved' => 'Reserved', 'Enrolled' => 'Enrolled', 'Done' => 'Done', 'Cancelled' => 'Cancelled', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
