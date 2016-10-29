<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
<<<<<<< HEAD
use web\css\site;
=======
use vendor\almasaeed2010\adminlte\plugins\datepicker\datepicker3;
use dosamigos\datepicker\DatePicker;
>>>>>>> 1a30053aa1483c4b873ee7c2a04add1f345af726


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
<<<<<<< HEAD
=======
-->
>>>>>>> 1a30053aa1483c4b873ee7c2a04add1f345af726
<div class="input-group date" data-provide="datepicker">
    <input type="text" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
<<<<<<< HEAD
<h5> try*crossed finger*</sample>
--><br><br>
=======
>>>>>>> 1a30053aa1483c4b873ee7c2a04add1f345af726
<div class="review-class-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textArea
    	(['rows'=>'6','maxlength' => true,'placeholder'=>''

    ]) ?>

    <?= $form->field($model, 'start_date')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
       // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
]); ?>

    <?= $form->field($model, 'end_date')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
       // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
]);  ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
