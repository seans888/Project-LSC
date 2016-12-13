<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
        'brandLabel' => Html::img('@web/images/logo.png') . 'Loyola Student Center',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/contact']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Tutorials', 'url' => 'index.php?r=site%2Fcontact#tutorial-sec'],
        ['label' => 'Reviews', 'url' => 'index.php?r=site%2Fcontact#review-sec'],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];


         }elseif (!Yii::$app->user->isGuest) {

            $menuItems = [
        ['label' => 'Home', 'url' => ['/site/contact']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Tutorials', 'url' => 'index.php?r=site%2Findex#tutorial-sec'],
        ['label' => 'Reviews', 'url' => 'index.php?r=site%2Findex#review-sec'],
        ['label' => 'Profile', 'url' => ['/site/profile']],
];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link',
                'data'=>[
                    'confirm' => 'Are you sure you want to logout?',
                    'method' => 'post',
                ],]

            )
            . Html::endForm()
            . '</li>';
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout',
            'data' => [
                'confirm' => 'Are you sure you want to logout?',
                'method' => 'post',
            ],
        ])
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
<!--
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
