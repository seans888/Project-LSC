<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Sign up';
//$this->params['breadcrumbs'][] = $this->title;
?>
	
<table class="tb" border="1" align="center"> 
<div class="site-signup" >
<tr><td>
<h1 align="center"><?= Html::encode($this->title) ?></h1>

	<p align="center">Please fill out the following fields to sign up:</p>

		<div class="row" >
		   <div class="form"><Center>
			
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
	
                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Sign up', ['class' => 'btn btn-primary', 'name' => 'signup-button'])

					?>
                </div> 
				

            <?php ActiveForm::end(); ?>
        </div>
    </div></center>	
	</td></tr></table>
	
	
</div>