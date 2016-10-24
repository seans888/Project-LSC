<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\views\student;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' =>  Html::img('@web/images/logo.png') . 'Loyola Student Center',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'HOME', 'url' => ['/site/index']],
		['label' => 'TUTORIALS', 'url' => '#tutorials-sec'],
        ['label' => 'REVIEWS', 'url' => '#review-sec'],
        ['label' => 'ABOUT', 'url' => ['/site/about']],
        ['label' => 'CONTACT', 'url' => ['/site/contact']],
];
    if (Yii::$app->user->isGuest) {
      //  $menuItems[] = ['label' => 'Register', 'url' => ['/site/signup']];
       
          $menuItems[] = '<li>'
            . Html::button('Login', ['value'=>Url::to('index.php?r=site/login'),'class' => 'btn btn-success','id'=>'modalButton'])
            . '</li>';
         
      //   $menuItems[] = ['label' => 'Login', 'url' => ['/site/login'],'class'=>'btn btn-success', 'id'=>'modalButton' ];
      //  $menuItems[] = ['label' => 'Login', ['value'=>Url::to('index.php?r=site/login'), 'id'=>'modalButton' ]];
      // $menuItems[] =  Html::button('Login', ['value'=>Url::to('index.php?r=site/login'),
       //    ['class' => 'btn btn-success', 'id'=>'modalButton' ])
        

         }elseif (!Yii::$app->user->isGuest) {

            $menuItems = [
        ['label' => 'HOME', 'url' => ['/site/index']],
        ['label' => 'TUTORIALS', 'url' => '#tutorials-sec'],
        ['label' => 'REVIEWS', 'url' => '#review-sec'],
        ['label' => 'ACCOUNT', 'url' => ['/site/account']],
        ['label' => 'ABOUT', 'url' => ['/site/about']],
        ['label' => 'CONTACT', 'url' => ['/site/contact']],
];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']

            )
            . Html::endForm()
            . '</li>';
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
 <!--       <p class="pull-left"> Loyola Student Center <?= date('Y') ?></p> -->

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
    <?php
         Modal::begin([
             'header'=>'<h4>Login</h4>',
             'id' => 'modal',
             'size'=>'modal-lg',
        ]);
        echo "<div id='modalContent'></div>";

         Modal::end();
    ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
