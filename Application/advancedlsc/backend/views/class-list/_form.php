<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Student;
use backend\models\ReviewClass;
use backend\models\Employee;

/* @var $this yii\web\View */
/* @var $model backend\models\ClassList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-list-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'student_id')->dropDownList(
            ArrayHelper::map(Student::find()->all(),'id','id'),
            ['prompt'=>'Select Student ID']
     ) ?>

    <?= $form->field($model, 'review_Class_id')->dropDownList(
            ArrayHelper::map(ReviewClass::find()->all(),'review_Class_id','review_Class_name'),
            ['prompt'=>'Select Review Class']
    ) ?>

    <?= $form->field($model, 'employee_id')-> dropDownList(
            ArrayHelper::map(Employee::find()->all(),'employee_id','employee_name'),
            ['prompt'=>'Select Employee']
    ) ?>

    <?= $form->field($model, 'atendance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'missed_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
