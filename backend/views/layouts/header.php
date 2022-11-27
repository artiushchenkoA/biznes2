<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#">Сховати</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <?= Html::a('Вихід', ['site/logout'], ['data' => ['method' => 'post']]) ?>
            <?php Html::endForm() ?>

        </li>
    </ul>
</nav>
