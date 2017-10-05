<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\paket */

$this->title = Yii::t('app', 'Paket Baru');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Paket'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'tipe' => $tipe,
    ]) ?>

</div>
