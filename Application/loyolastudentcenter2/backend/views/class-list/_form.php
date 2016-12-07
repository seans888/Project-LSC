<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\ReviewClass;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\ClassList */
/* @var $form yii\widgets\ActiveForm */
?>
<!-- 
-->
<div class="class-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'review_class_id')->dropDownList(ArrayHelper::map(ReviewClass::find()->all(),'id','name'),
        ['prompt'=>'--Select--']) ?>

    <?= $form->field($model, 'user_id')->dropDownList(ArrayHelper::map(User::find()->all(),'id','lastname'),
        ['prompt'=>'--Select--']) ?>
    <div class="form-group">

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
