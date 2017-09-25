<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Setting */

$this->title = Yii::t('app', '{modelClass} Applikasi ', [
    'modelClass' => 'Setting',
]);
?>
<div class="setting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
