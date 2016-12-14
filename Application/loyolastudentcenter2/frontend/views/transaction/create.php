<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Transaction */

$this->title = 'Create Transaction';
?>
<div class="transaction-create"> <br><br>

    <h1 class="h1a"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
