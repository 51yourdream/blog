<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TakonomyCategory */

$this->title = 'Update Takonomy Category: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Takonomy Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="takonomy-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
