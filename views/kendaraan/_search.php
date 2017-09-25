<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\kendaraanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kendaraan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_kendaraan') ?>

    <?= $form->field($model, 'id_jns_kendaraan') ?>

    <?= $form->field($model, 'no_plat_kendaraan') ?>

    <?= $form->field($model, 'no_rangka_kendaraan') ?>

    <?= $form->field($model, 'no_mesin_kendaraan') ?>

    <?php // echo $form->field($model, 'tahun_pembuatan') ?>

    <?php // echo $form->field($model, 'merk_kendaraan') ?>

    <?php // echo $form->field($model, 'pabrikan_kendaraan') ?>

    <?php // echo $form->field($model, 'pemilik_kendaraan') ?>

    <?php // echo $form->field($model, 'kapasitas_penumpang') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'ket') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
