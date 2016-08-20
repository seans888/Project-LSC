<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use frontend\views\student;


$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<table class="suform" align= "center" border="1px">
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to sign up:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?> 

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">

                   <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?> 

                 <!--    <?= Html::button('Submit', ['value'=>Url::to('index.php?r=student/create'), 
              'class' => 'btn btn-success','id'=>'modalButton' 
        ]) ?> -->

                </div>
                </table>

            <?php ActiveForm::end(); ?>
       <!--     <?php
        Modal::begin([
                'header'=>'<h4> Create Reservation</h4>',
                'id'=>'modal',
                'size'=>'modal-lg',
            ]);

        echo "<div id='modalContent'></div>";

        Modal::end();
    ?>

    <?php Pjax::begin(); ?> -->

        </div>
    </div>
</div>
</div>

