<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Student */

$this->title = 'Reservation Form';
//$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<table class="tb2" align="center">
<tr><td>
<div class="student-create" align="center">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</tr></td></table>