<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TakonomyCategory */

$this->title = 'Create Takonomy Category';
$this->params['breadcrumbs'][] = ['label' => 'Takonomy Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="takonomy-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
