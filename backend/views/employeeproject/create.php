<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\EmployeeProject */

$this->title = 'Create Employee Project';
$this->params['breadcrumbs'][] = ['label' => 'Employee Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-project-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
