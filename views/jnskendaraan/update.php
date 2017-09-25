<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\jnskendaraan */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Jns kendaraan',
]) . $model->nama_jns_kendaraan;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Jns Kendaraan'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jns_kendaraan, 'url' => ['view', 'id' => $model->id_jns_kendaraan]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="jnskendaraan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
