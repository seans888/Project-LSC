<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vendor\almasaeed2010\adminlte\plugins\datepicker\datepicker3;


/* @var $this yii\web\View */
/* @var $model common\models\ReviewClass */
/* @var $form yii\widgets\ActiveForm */
?>
<!--
<div class="form-group">
    <label class="col-md-2 control-label" for="Date">Date</label>
    <div class="col-md-10">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control" id="Date"/>
        </div>
    </div>
</div>
-->
<h5>datepicker2</h5>
<div class="input-group date" data-provide="datepicker">
    <input type="text" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
<h5> try*crossed finger*</sample>

<div class="review-class-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
