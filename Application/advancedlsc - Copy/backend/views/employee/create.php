<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Employee */

$this->title = 'Add Employee';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
//S$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-create">

   <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
