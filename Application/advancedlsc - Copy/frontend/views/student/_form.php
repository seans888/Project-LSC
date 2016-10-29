<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\ReviewClass;

/* @var $this yii\web\View */
/* @var $model common\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Male/Female']) ?>

    <?= $form->field($model, 'contact_number')->textInput(['maxlength' => true,'placeholder'=>'e.g. 09xxxxxxxxx']) ?>

    <?= $form->field($model, 'email_address')->textInput(['maxlength' => true,'placeholder'=>'juandelacruz@email.com']) ?>

    <?= $form->field($model, 'home_address')->textInput(['maxlength' => true])->hint('No., Street, Barangay/Subdivision, Municipality/City/Province') ?>

    <?= $form->field($model, 'school')->textInput(['maxlength' => true])->hint('Name, Address') ?>

    <?= $form->field($model, 'guardian_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'relation')->dropDownList([ 'Parent' => 'Parent', 'Grandparent' => 'Grandparent', 'Sibling' => 'Sibling', 'Other' => 'Other', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'guardian_contact_number')->textInput(['maxlength' => true,'placeholder'=>'e.g. 09xxxxxxxxx']) ?>

    <?= $form->field($model, 'guardian_email_address')->textInput(['maxlength' => true,'placeholder'=>'e.g. mariadelacruz@email.com']) ?>

    <?= $form->field($model, 'selected_school')->textInput(['maxlength' => true])->hint('Name, Address') ?>

    <?= $form->field($model, 'learned_lsc')->dropDownList([ 'friends' => 'Friends', 'relatives' => 'Relatives', 'newspaper ads' => 'Newspaper ads', 'LSC signage/poster' => 'LSC signage/poster', 'school' => 'School', 'others' => 'Others', ], ['prompt' => 'Please choose where you learned about LSC']) ?>

   <!-- <?= $form->field($model, 'review_class_id')->textInput() ?> -->
       <?= $form->field($model, 'review_class_id')->dropDownList(
        ArrayHelper::map(ReviewClass::find()->all(),'id','name'),
        ['prompt'=>'Select Review Class']
    ) ?>

    <?= $form->field($model, 'schedule_id')->textInput() ?>

    <?= $form->field($model, 'transaction_type')->dropDownList([ 'Reserve' => 'Reserve', 'Enroll' => 'Enroll', ], ['prompt' => 'Reserve/Enroll']) ?>

   <!-- <?= $form->field($model, 'date_of_registration')->textInput() ?> -->

   <!-- <?= $form->field($model, 'status')->dropDownList([ 'Pending' => 'Pending', 'Reserved' => 'Reserved', 'Enrolled' => 'Enrolled', 'Done' => 'Done', 'Cancelled' => 'Cancelled', ], ['prompt' => '']) ?> -->

<!--    <?= $form->field($model, 'user_id')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
