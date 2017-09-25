<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\kendaraan */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Kendaraan',
]) . $model->no_plat_kendaraan;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Kendaraan'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kendaraan, 'url' => ['view', 'id' => $model->id_kendaraan]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="kendaraan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
          'browseArray' =>$browseArray
    ]) ?>

</div>
