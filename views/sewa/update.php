<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\sewa */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Sewa',
]) . $model->no_sewa;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Sewa'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_sewa, 'url' => ['view', 'id' => $model->id_sewa]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sewa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
