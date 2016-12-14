

<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
use frontend\web\css;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use frontend\views\user;

$this->title = 'Sign up';
//$this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Free Education Template</title>
    
    <!-- CUSTOM STYLE CSS -->
    <link href="theme/assets/css/style.css" rel="stylesheet" />    
</head>

<center>
<div class="site-signup" align="center">
<br><br><br>
    <h1 class="h1Signup"><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to sign up:</p>

            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
     
<div class="col-xs-6 col-sm-3"> 
    <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'username'])->label(false) ?> 
</div>
<div class="col-xs-6 col-sm-3"> 
        <?= $form->field($model, 'email')->textInput(['placeholder'=>'Email'])->label(false) ?>
</div><div class="col-xs-6 col-sm-3"> 
                <?= $form->field($model, 'guardianName')->textInput(['maxlength' => true,'placeholder'=>'Guardian Name'])->label(false) ?>
</div>
<div class="col-xs-6 col-sm-3"> 
                <?= $form->field($model, 'guardianRelation')->dropDownList([ 'Parent' => 'Parent', 'Grandparent' => 'Grandparent', 'Sibling' => 'Sibling', 'Other' => 'Other', ], ['prompt' => 'Guardian Relation'])->label(false) ?>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2"> 
                <?= $form->field($model, 'lastname')->textInput(['maxlength' => true,'placeholder'=>'Lastname'])->label(false) ?>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2"> 
                <?= $form->field($model, 'firstname')->textInput(['maxlength' => true,'placeholder'=>'Firstname'])->label(false) ?>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2"> 
                <?= $form->field($model, 'middlename')->textInput(['maxlength' => true ,'value'=>'-'])->label(false) ?>
</div>
<div class="col-xs-6 col-sm-3"> 
                <?= $form->field($model, 'guardianContactNumber')->textInput(['maxlength' => true,'placeholder'=>'Guardian Contact Number'])->label(false) ?>
</div>
<div class="col-xs-6 col-sm-3"> 
                <?= $form->field($model, 'guardianEmailAddress')->textinput(['maxlength' => true,'placeholder'=>'Guardian Email Address'])->label(false) ?>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2"> 
                <?= $form->field($model, 'age')->textInput(['placeholder'=>'Age'])->label(false) ?>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2"> 
                <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Gender'])->label(false) ?>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2"> 
                <?= $form->field($model, 'contactNumber')->textInput(['maxlength' => true,'placeholder'=>'Contact Number'])->label(false) ?>
</div>

<div class="col-xs-6"> 
                <?= $form->field($model, 'learnedLSC')->dropDownList([ 'friends' => 'Friends', 'relatives' => 'Relatives', 'newspaper ads' => 'Newspaper ads', 'LSC signage/poster' => 'LSC signage/poster', 'school' => 'School', 'others' => 'Others', ], ['prompt' => 'Please choose where you learned about LSC'])->label(false) ?>
</div>
<div class="col-xs-6"> 
                <?= $form->field($model, 'homeAddress')->textInput(['maxlength' => true,'placeholder'=>'Home Address'])->hint('No., Street, Barangay/Subdivision, Municipality/City/Province')->label(false) ?>
</div>
<div class="col-xs-6"> 
                <?= $form->field( $model, 'terms' )->checkbox(array('label'=>'I agree to the <a href="index.php?r=site%2Fterms" target="_blank">terms</a> of service.')) ?> 
</div>
<div class="col-xs-6"> 
                <div class="form-group">

                   <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button','data' => [
                'confirm' => 'Are you sure all information you entered are correct?',
                'method' => 'post',
            ],
            ]) ?> 

                </div> </div>
<div class="col-xs-6"> 
                <?= $form->field($model, 'school')->textInput(['maxlength' => true,'placeholder'=>'School'])->hint('Name, Address')->label(false) ?>
</div>
<div class="col-xs-6"> <br> </div>
<div class="col-xs-6"> <br> </div>
<div class="col-xs-6"> <br> </div>
<div class="col-xs-6"> <br> </div>
<div class="col-xs-6 col-sm-3"> 
        <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false) ?>
</div>
<div class="col-xs-6 col-sm-3"> 
        <?= $form->field($model, 'retypePassword')->passwordInput(['placeholder'=>'Retype Password'])->label(false) ?>
</div>

<!--,'placeholder'=>''])->label(false) -->

            <?php ActiveForm::end(); ?>
        </div>