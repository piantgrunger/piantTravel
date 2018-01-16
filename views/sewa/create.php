<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\sewa */

$this->title = Yii::t('app', 'Sewa  Baru');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Sewa'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sewa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
                    
    ]) ?>

</div>
