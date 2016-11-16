<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \backend\models\AdminSignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\models;
use backend\controllers\SiteController;
use common\models\Admin;
use common\models\AdminLoginForm;
use backend\models\SignupForm;

$this->title = 'Signup';
?>
<div class="login-box">
    <div class="login-logo">
        <img src="/advancedlsc/frontend/web/images/logo.png" />
        <br>
        <a href="#">Loyola Student Center</a>
    </div>
    
    <div class="login-box-body">
        <p class="login-box-msg">Please fill out the following fields to signup:</p>

            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            
                <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'middlename')->textInput(['maxlength' => true,'value'=>'-']) ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'age')->textInput() ?>

                <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Male/Female']) ?>

                <?= $form->field($model, 'contact_number')->textInput(['maxlength' => true, 'placeholder'=>'e.g. 09xxxxxxxxx'])?>

                <?= $form->field($model, 'email')?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>  
