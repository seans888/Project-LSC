<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Student;
use backend\models\Employee;
use backend\models\ReviewClass;

/* @var $this yii\web\View */
/* @var $model frontend\models\ClassList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->dropDownList(
    	ArrayHelper::map(Student::find()->all(), 'id', 'lastname'),
    	['prompt' => 'Select Student Lastname', 
    	]); ?>


    <?= $form->field($model, 'review_Class_id')->dropDownList(
    	ArrayHelper::map(ReviewClass::find()->all(), 'id', 'name'),
    	['prompt' => 'Select Review Class',
    	]); ?>

    <?= $form->field($model, 'employee_id')->dropDownList(
    	ArrayHelper::map(Employee::find()->all(), 'id', 'lastname'),
    	['prompt' => 'Select Employee Lastname', 
    	]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
