<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EmployeeProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employee Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-project-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Employee Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'employee_id',
            'project_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
