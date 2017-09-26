<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\sopir */

$this->title = Yii::t('app', 'Sopir  Baru');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Sopir'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sopir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
