<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\sopir */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Sopir',
]) . $model->nama_sopir;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Sopir'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_sopir, 'url' => ['view', 'id' => $model->id_sopir]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sopir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
