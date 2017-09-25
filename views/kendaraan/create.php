<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\kendaraan */

$this->title = Yii::t('app', 'Kendaraan  Baru');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Kendaraan'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
          'browseArray' =>$browseArray
    ]) ?>

</div>
