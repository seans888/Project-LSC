<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\views\user;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'username']) ?>

                <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'middlename')->textInput(['maxlength' => true ,'value'=>'-']) ?>

                <?= $form->field($model, 'age')->textInput() ?>

                <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Male/Female']) ?>

                <?= $form->field($model, 'contact_number')->textInput(['maxlength' => true,'placeholder'=>'e.g. 09xxxxxxxxx']) ?>

                <?= $form->field($model, 'home_address')->textInput(['maxlength' => true])->hint('No., Street, Barangay/Subdivision, Municipality/City/Province') ?>

                <?= $form->field($model, 'school')->textInput(['maxlength' => true])->hint('Name, Address') ?>

                <?= $form->field($model, 'guardian_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'relation')->dropDownList([ 'Parent' => 'Parent', 'Grandparent' => 'Grandparent', 'Sibling' => 'Sibling', 'Other' => 'Other', ], ['prompt' => '']) ?>

                <?= $form->field($model, 'guardian_contact_number')->textInput(['maxlength' => true,'placeholder'=>'e.g. 09xxxxxxxxx']) ?>

                <?= $form->field($model, 'guardian_email_address')->input(['maxlength' => true,'placeholder'=>'e.g. mariadelacruz@email.com','email']) ?>

                <?= $form->field($model, 'learned_lsc')->dropDownList([ 'friends' => 'Friends', 'relatives' => 'Relatives', 'newspaper ads' => 'Newspaper ads', 'LSC signage/poster' => 'LSC signage/poster', 'school' => 'School', 'others' => 'Others', ], ['prompt' => 'Please choose where you learned about LSC']) ?>

                <?= $form->field($model, 'email') ?>

               <!-- $form->field($model, 'password')->passwordInput() -->


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
