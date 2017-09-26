<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sopirSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sopir-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_sopir') ?>

    <?= $form->field($model, 'nama_sopir') ?>

    <?= $form->field($model, 'alamat_sopir') ?>

    <?= $form->field($model, 'telp_sopir') ?>

    <?= $form->field($model, 'no_ktp') ?>

    <?php // echo $form->field($model, 'jns_SIM') ?>

    <?php // echo $form->field($model, 'no_SIM') ?>

    <?php // echo $form->field($model, 'tgl_berlaku_SIM') ?>

    <?php // echo $form->field($model, 'stat') ?>

    <?php // echo $form->field($model, 'persentase') ?>

    <?php // echo $form->field($model, 'ket') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
