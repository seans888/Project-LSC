<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Transaction */

$this->title = $model->id;
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => 'Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?><br><br><br>
<div class="transaction-view">

=======
?>
<div class="transaction-view"><br><br>

    <h1 class="h1a"><?= Html::encode($this->title) ?></h1>
>>>>>>> 875794bd2a13e0c9382dedb8a526c4c281d9e5b9

  <!--  <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
<<<<<<< HEAD
    </p>
-->
=======
    </p> -->
>>>>>>> 875794bd2a13e0c9382dedb8a526c4c281d9e5b9

     <center> <?php echo
            '<h1>'.Yii::$app->user->identity->firstname.' '.Yii::$app->user->identity->lastname.'</h1>'?>
     </center><br>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'reviewClass.name:text:Review Class',
            'schedule.start_date:text: Start Date',
            'schedule.end_date:text: End Date',
            'transaction_type',
            'selected_school',
            'status',
            'date',

        ],
    ]) ?>

</div>
