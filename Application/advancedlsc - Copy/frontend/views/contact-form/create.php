<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ContactForm */

$this->title = 'Create Contact Form';
$this->params['breadcrumbs'][] = ['label' => 'Contact Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-form-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
