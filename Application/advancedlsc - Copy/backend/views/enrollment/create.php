<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Enrollment */

$this->title = 'Create Enrollment';
$this->params['breadcrumbs'][] = ['label' => 'Enrollments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enrollment-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>==9
