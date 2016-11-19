<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?=// $form->field($model, 'auth_key') ?>

    <?=// $form->field($model, 'password_hash') ?>

    <?=// $form->field($model, 'password_reset_token') ?>

    <?php echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php echo $form->field($model, 'lastname') ?>

    <?php echo $form->field($model, 'firstname') ?>

    <?php echo $form->field($model, 'middlename') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php echo $form->field($model, 'contact_number') ?>

    <?php // echo $form->field($model, 'home_address') ?>

    <?php // echo $form->field($model, 'school') ?>

    <?php // echo $form->field($model, 'guardian_name') ?>

    <?php // echo $form->field($model, 'relation') ?>

    <?php // echo $form->field($model, 'guardian_contact_number') ?>

    <?php // echo $form->field($model, 'guardian_email_address') ?>

    <?php // echo $form->field($model, 'selected_school') ?>

    <?php // echo $form->field($model, 'learned_lsc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
