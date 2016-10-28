<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\Student;
use common\models\ReviewClass;

/* @var $this yii\web\View */
/* @var $model common\models\ClassList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-list-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    <?= $form->field($model, 'review_class_id')->textInput() ?> -->
<!-- Student Dropdown Lastname and Firstname -->
		<?= $form->field($model, 'review_class_id')->dropDownList(
		ArrayHelper::map(ReviewClass::find()->all(),'id','name'),
        ['prompt'=>'Select Review Class'] ) ?>

<!--    <?= $form->field($model, 'student_id')->textInput() ?> -->
<!-- Student Dropdown Lastname and Firstname -->
		<?= $form->field($model, 'student_id')->dropDownList(
			ArrayHelper::map(Student::find()->all(),'id',('lastname' + 'firstname')),
			['prompt'=>'Select Student Name'] ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
