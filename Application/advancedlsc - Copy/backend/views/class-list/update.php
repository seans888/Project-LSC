<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ClassList */

$this->title = 'Update Class List: ' . $model->review_class_id;
$this->params['breadcrumbs'][] = ['label' => 'Class Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->review_class_id, 'url' => ['view', 'review_class_id' => $model->review_class_id, 'student_id' => $model->student_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="class-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
