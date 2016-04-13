<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

/**
 * @var yii\data\ActiveDataProvider $dataProvider
 */
?>

<?= Html::a('Create menu', ['create']) ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'name' => [
            'attribute' => 'name',
            'value' => function ($model) {
                return Html::a($model->name, ['/admin/menu/item', 'id' => $model->primaryKey]);
            },
            'format' => 'html',
        ],
        'slug',
        [
            'class' => ActionColumn::className(),
            'template' => '{update} {delete}'
        ]
    ]
]);
