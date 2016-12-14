<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\transaction;

/* @var $this yii\web\View */
/* @var $model common\models\Payment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-form">

<<<<<<< HEAD
    <?php $form = ActiveForm::begin(['options' => ['enctype'=> 'multipart/form-data']]); ?>

    <?= $form->field($model, 'file')->fileInput([]) ?>

=======
    <?php $form = ActiveForm::begin(); ?>
<div class="col-xs-9"> 
    <?= $form->field($model, 'payment_slip')->fileInput(['maxlength' => true]) ?>
</div>
<div class="col-xs-6"> 
>>>>>>> 875794bd2a13e0c9382dedb8a526c4c281d9e5b9
    <?= $form->field($model, 'transaction_id')->dropDownList(ArrayHelper::map(transaction::find()->all(),'id','id'),
        ['prompt'=>'--Select--']) ?>
</div>
    <!-- <?= $form->field($model, 'date')->textInput() ?> -->
<div class="col-xs-7"> 
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Skip', ['/site/contact'], ['class'=>'btn btn-primary']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>
</div>
