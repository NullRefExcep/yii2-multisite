<?php

use nullref\multisite\models\Site;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model Site */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('multisite', 'Sites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('multisite', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('multisite', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('multisite', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'baseUrl:url',
        ],
    ]) ?>

</div>
