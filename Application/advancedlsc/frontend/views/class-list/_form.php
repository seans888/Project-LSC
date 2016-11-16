<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Student;
use backend\models\ReviewClass;
use backend\models\Employee;

/* @var $this yii\web\View */
/* @var $model frontend\models\ClassList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-list-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'student_id')->dropDownList(
            ArrayHelper::map(Student::find()->all(),'id','lastname'),
            ['prompt'=>'Select Student']
     ) ?>

   < <?= $form->field($model, 'review_Class_id')->textInput() ?>

  
   <!-- <?= $form->field($model, 'employee_id')-> dropDownList(
            ArrayHelper::map(Employee::find()->all(),'id','name'),
            ['prompt'=>'Select Employee']
    ) ?> -->


    <?= $form->field($model, 'employee_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
