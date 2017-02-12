<?php

use nullref\multisite\models\Site;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model Site */

$this->title = Yii::t('multisite', 'Update {modelClass}: ', [
    'modelClass' => 'Site',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('multisite', 'Sites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('multisite', 'Update');
?>
<div class="site-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
