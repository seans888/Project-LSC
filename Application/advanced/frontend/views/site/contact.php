
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact Us';
 /*
$this->params['breadcrumbs'][] = $this->title;
*/
?>

<p>
LSC Abada <br>
434-1916 or 463-6169 <br>
Unit 202 Loyola Serviced Residences <br>
88 Esteban Abada Street <br>
Loyola Heights, Quezon City <br>
</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.333456393701!2d121.07151331436964!3d14.637003180108765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7818a89e5d3%3A0xd9fa649fdb2979f2!2sLoyola+Student+Center!5e0!3m2!1sen!2sph!4v1470293133343" width="1150" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
<hr>

<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>		

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
		</div>
    </div>
</div>

<!--
<p>
LSC Katipunan <br>
929-9283 <br>
Unit 205 Torres Bldg. <br>
321 Katipunan Road <br>
Loyola Heights, Quezon City <br>
</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d965.0689386063609!2d121.07375182916881!3d14.640281996922687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b77f300a9c77%3A0x5090612b9b0d2b49!2sTorres+Building!5e0!3m2!1sen!2sph!4v1470289201587" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<hr>

<p>
LSC Ortigas <br>
687-4608 <br> 
Unit 828 Cityland Megaplaza Condominium <br>
Ortigas Center, Pasig City <br>
</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1326.2699067693861!2d121.05995260502391!3d14.58893118755948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c819dcf3159f%3A0x6ee8de5684fb596!2sOrtigas+Review+Center!5e0!3m2!1sen!2sph!4v1470292639172" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
-->

            <?php ActiveForm::end(); ?>