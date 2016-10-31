<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ContactForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form-form">

    <?php $form = ActiveForm::begin(); ?>
 <div class="overlay">
 	<div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >CONTACT US  </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                     If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
                         </p>
                 </div>
             </div>
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                   
    <?= $form->field($model, 'sender_name')->label(false)->textInput(['maxlength' => true,'placeholder'=>'Name']) ?>

    <?= $form->field($model, 'sender_email')->label(false)->textInput(['maxlength' => true,'placeholder'=>'Email']) ?>

    <?= $form->field($model, 'subject')->label(false)->textInput(['maxlength' => true,'placeholder'=>'Subject']) ?>

    <?= $form->field($model, 'content')->label(false)->textarea(['rows' => 6,'placeholder'=>'Message']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit Message' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success1' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
</div>
</div>