<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Tutorials';
 /*
$this->params['breadcrumbs'][] = $this->title;
*/
?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>

<table align="center">
  <tr bgcolor="#62C2CC">
    <th>Kinder & Prep</th>
    <th>Reading <br>
		Writing<br>
		Speech<br></th>
    <th>Math<br>
		Phonics</th>
  </tr>

  <tr bgcolor="#E4F6F8">
    <td>Grade School</td>
    <td>English<br>
		Filipino<br>
		CLE<br></td>
    <td>Science<br>
		Reading<br>
		Araling Panlipunan<br></td>
  </tr>

  <tr bgcolor="#EEF66C">
    <td>High School</td>
    <td>Elementary Algebra<br>
		Advanced Algebra<br>
		Geometry<br>
		Trigonometry<br>
		Calculus<br>
		Filipino<br></td>
    <td>General Science<br>
		Biology<br>
		Chemistry<br>
		Physics<br>
		English<br>
		Araling Panlipunan<br></td>
  </tr>

  <tr bgcolor="#FDB813">
    <td>College</td>
    <td>Math </td>
    <td>Science</td>
  </tr>
</table>
</body>
</html>