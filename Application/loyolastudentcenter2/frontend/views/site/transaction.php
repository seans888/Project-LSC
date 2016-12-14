<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use Yii;
use common\models\transaction;

/* @var $this yii\web\View */
/* @var $model common\models\Transaction */

?>
<html lang="en-US"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_frontendCSRF">
    <meta name="csrf-token" content="UXZZYTNSZ0EYQxcUdRcrGwYBGwJUBBYjNBk4BmkRKTMZP3QPdhwMDg==">
    <title>1</title>
    <link href="/loyolastudentcenter2/frontend/web/assets/50c80698/css/bootstrap.css" rel="stylesheet">
<link href="/loyolastudentcenter2/frontend/web/css/site.css" rel="stylesheet">
<link href="/loyolastudentcenter2/frontend/web/css/form.css" rel="stylesheet">
<link href="/loyolastudentcenter2/frontend/web/theme/css/bootstrap.css" rel="stylesheet">
<link href="/loyolastudentcenter2/frontend/web/theme/css/flexslider.css" rel="stylesheet">
<link href="/loyolastudentcenter2/frontend/web/theme/css/font-awesome.min.css" rel="stylesheet">
<link href="/loyolastudentcenter2/frontend/web/theme/css/style.css" rel="stylesheet">
<link href="/loyolastudentcenter2/frontend/web/slideshow/css/bootstrap.css" rel="stylesheet">
<link href="/loyolastudentcenter2/frontend/web/slideshow/css/bootstrap.min.css" rel="stylesheet">
<link href="/loyolastudentcenter2/frontend/web/slideshow/css/half-slider.css" rel="stylesheet"></head>
<body>
<br><Br><br>
<div class="wrap">
   <div class="transaction-view">

     <center> <?php echo
            '<h1>'.Yii::$app->user->identity->firstname.' '.Yii::$app->user->identity->lastname.'</h1>'?>
     </center>

 <!--   <p>
        <a class="btn btn-primary" href="/loyolastudentcenter2/frontend/web/index.php?r=transaction%2Fupdate&amp;id=1">Update</a>        <a class="btn btn-danger" href="/loyolastudentcenter2/frontend/web/index.php?r=transaction%2Fdelete&amp;id=1" data-confirm="Are you sure you want to delete this item?" data-method="post">Delete</a>    </p>
-->

<?php echo '<td> '.Yii::$model->transaction->id.' </td>'?>
    <table id="w0" class="table table-striped table-bordered detail-view">
<tbody>
<tr><th>Review Class Name</th><?php echo '<td> '.Yii::$app->user->identity->id.' </td>'?></tr>
<tr><th>Schedule</th></tr>
<tr><th>Selected School</th><td>Ateneo De Manila</td></tr>
<tr><th>Status</th><td>Pending</td></tr>
<tr><th>Date</th><td>2016-12-07 12:42:13</td></tr>
</tbody>
    </table>
</div>
</div>
</div>
</body></html>