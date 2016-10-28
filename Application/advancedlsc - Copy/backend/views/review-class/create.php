<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ReviewClass */

$this->title = 'Create Review Class';
$this->params['breadcrumbs'][] = ['label' => 'Review Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-class-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
