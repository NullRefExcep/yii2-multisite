<?php

use nullref\multisite\models\Site;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model Site */

$this->title = Yii::t('multisite', 'Create Site');
$this->params['breadcrumbs'][] = ['label' => Yii::t('multisite', 'Sites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
