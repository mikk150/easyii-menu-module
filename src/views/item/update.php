<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model qwestern\easyii\menu\models\MenuItem */

$this->title = 'Update Menu Item: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Menu Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'children' => $children,
    ]) ?>

</div>
