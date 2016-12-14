<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\ReviewClass;
use common\models\Schedule;
use common\models\user;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Transaction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaction-form">

    <?php $form = ActiveForm::begin(); ?>

<!--<div class="col-xs-6"> 
    <?= $form->field($model, 'user_id')->textInput(['value'=>Yii::$app->user->id, 'readonly'=>true])?> 
</div> -->
<div class="col-xs-6">     
    <?= $form->field($model, 'review_class_id')->dropDownList(ArrayHelper::map(ReviewClass::find()->all(),'id','name'),
        ['prompt'=>'Select Review Class']) ?>
</div>
<div class="col-xs-6"> 
    <?= $form->field($model, 'schedule_id')->dropDownList(ArrayHelper::map(Schedule::find()->all(),'id','batch'),
        ['prompt'=>'Select Review Class']) ?>
</div>
<div class="col-xs-6"> 
    <?= $form->field($model, 'transaction_type')->dropDownList([ 'Reserve' => 'Reserve', 'Enroll' => 'Enroll', ], ['prompt' => '']) ?>
</div>
<div class="col-xs-6"> 
    <?= $form->field($model, 'selected_school')->textInput(['maxlength' => true]) ?>
</div>
    <!--<?= $form->field($model, 'status')->dropDownList([ 'Pending' => 'Pending', 'Reserved' => 'Reserved', 'Enrolled' => 'Enrolled', 'Done' => 'Done', 'Cancelled' => 'Cancelled', ], ['value'=>'Pending','prompt' => '', 'value' => 'pending']) ?>  -->


<!--    <?= $form->field($model, 'date')->textInput() ?> -->
<div class="col-xs-6"> 
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn1 btn-success btn-block' : 'btn btn-primary']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
