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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Boris Adamyan Boramos">
    <link rel='shortcut icon' type=image/vnd.microsoft.icon href=img/logo.png>
    <link rel=apple-touch-icon type=image/png href=img/logo.png>
    <link rel=apple-touch-icon type=image/png sizes=72x72 href=img/logo.png>
    <link rel=apple-touch-icon type=image/png sizes=114x114 href=img/logo.png>
    <link rel=icon type=image/png href=img/logo.png>
    <?= Html::csrfMetaTags() ?>
    <title>Doctor Smart</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <?= $content ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php
$this->registerJs(
    "new WOW().init();"
);
$this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
