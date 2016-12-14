<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Payment */

$this->title = 'Create Payment';
?>
<div class="payment-create">

<br><br>    <h1 class="h1a">Create Payment</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
