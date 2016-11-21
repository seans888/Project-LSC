

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
<center>
<table class="tbSignup">    
    <tr><td>
<div class="site-signup" align="center">
    <h1 class="h1Signup"><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to sign up:</p>

    <div class="row">
        <div class="form">

            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

<<<<<<< HEAD

                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'username'])->label(false) ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'username']) ?>

=======
                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'username']) ?>
>>>>>>> 4242bced9cd0ae44b65d10b7e471a5f33e27ffce

                <?= $form->field($model, 'lastname')->textInput(['maxlength' => true,'placeholder'=>'Lastname'])->label(false) ?>

                <?= $form->field($model, 'firstname')->textInput(['maxlength' => true,'placeholder'=>'Firstname'])->label(false) ?>

                <?= $form->field($model, 'middlename')->textInput(['maxlength' => true ,'value'=>'-'])->label(false) ?>

                <?= $form->field($model, 'age')->textInput(['placeholder'=>'Age'])->label(false) ?>

                <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Gender'])->label(false) ?>

                <?= $form->field($model, 'contactNumber')->textInput(['maxlength' => true,'placeholder'=>'Contact Number'])->label(false) ?>
<!--,'placeholder'=>''])->label(false) -->
                <?= $form->field($model, 'homeAddress')->textInput(['maxlength' => true,'placeholder'=>'Home Address'])->hint('No., Street, Barangay/Subdivision, Municipality/City/Province')->label(false) ?>

                <?= $form->field($model, 'school')->textInput(['maxlength' => true,'placeholder'=>'School'])->hint('Name, Address')->label(false) ?>

                <?= $form->field($model, 'guardianName')->textInput(['maxlength' => true,'placeholder'=>'Guardian Name'])->label(false) ?>

                <?= $form->field($model, 'guardianRelation')->dropDownList([ 'Parent' => 'Parent', 'Grandparent' => 'Grandparent', 'Sibling' => 'Sibling', 'Other' => 'Other', ], ['prompt' => 'Guardian Relation'])->label(false) ?>

                <?= $form->field($model, 'guardianContactNumber')->textInput(['maxlength' => true,'placeholder'=>'Guardian Contact Number'])->label(false) ?>

                <?= $form->field($model, 'guardianEmailAddress')->textinput(['maxlength' => true,'placeholder'=>'Guardian Email Address'])->label(false) ?>

<<<<<<< HEAD
                <?= $form->field($model, 'learnedLSC')->dropDownList([ 'friends' => 'Friends', 'relatives' => 'Relatives', 'newspaper ads' => 'Newspaper ads', 'LSC signage/poster' => 'LSC signage/poster', 'school' => 'School', 'others' => 'Others', ], ['prompt' => 'Please choose where you learned about LSC']) ?>

=======
>>>>>>> 4242bced9cd0ae44b65d10b7e471a5f33e27ffce
                <?= $form->field($model, 'learnedLSC')->dropDownList([ 'friends' => 'Friends', 'relatives' => 'Relatives', 'newspaper ads' => 'Newspaper ads', 'LSC signage/poster' => 'LSC signage/poster', 'school' => 'School', 'others' => 'Others', ], ['prompt' => 'Please choose where you learned about LSC'])->label(false) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder'=>'Email'])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false) ?>

                <div class="form-group">

                   <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button','data' => [
                'confirm' => 'Are you sure all information you entered are correct?',
                'method' => 'post',
            ],
            ]) ?> 

                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
</td></tr>
</table>
</center>