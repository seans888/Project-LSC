<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

$this->title = 'Login';
/*
$this->params['breadcrumbs'][] = $this->title;
*/
?>
<!--<table class = 'tb1'>
    <tr><td>
    -->
    <center>
<div class="site-login">
<!--    <h1><?= Html::encode($this->title) ?></h1> -->

    <p>Please fill out the following fields to login:</p>

   <!-- <div class="row1">
        <div class="form1"> -->
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>
                <div style="color:#999;margin:1em 0">
                    If you don't have an account yet  
                    <?= Html::a('Sign Up here', ['site/signup']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>


            <?php ActiveForm::end(); ?>

             <?php
         Modal::begin([
             'header'=>'<h4>Sign up</h4>',
             'id' => 'modal',
             'size'=>'modal-lg',
        ]);
        echo "<div id='modalContent'></div>";

         Modal::end();
    ?>

    </div>
</div>
</div>
</center>
<!--</td></tr>
</table> -->
