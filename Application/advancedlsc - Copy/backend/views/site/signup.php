<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \backend\models\SignupForm */
use frontend\web\css;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

$this->title = 'Sign up';
//$this->params['breadcrumbs'][] = $this->title;
?>
<center>
<table class="tbSignup">    
    <tr><td>
<div class="site-signup" align="center">
    <h1 class="h1Signup"><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to sign up:</p>

    <div class="row">
        <div class="form">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'middlename')->textInput(['maxlength' => true,'value'=>'-']) ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'age')->textInput() ?>

                <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Male/Female']) ?>

                <?= $form->field($model, 'contact_number')->textInput(['maxlength' => true, 'placeholder'=>'e.g. 09xxxxxxxxx'])?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">

                   <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?> 

                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
</td></tr>
</table>
</center>