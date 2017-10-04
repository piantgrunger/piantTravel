<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\paket */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Paket',
]) . $model->kode_paket;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Paket'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_paket, 'url' => ['view', 'id' => $model->id_paket]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="paket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
