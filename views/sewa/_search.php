<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sewaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sewa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_sewa') ?>

    <?= $form->field($model, 'no_sewa') ?>

    <?= $form->field($model, 'tgl_pemesanan') ?>

    <?= $form->field($model, 'tgl_sewa') ?>

    <?= $form->field($model, 'jam_sewa') ?>

    <?php // echo $form->field($model, 'id_customer') ?>

    <?php // echo $form->field($model, 'tgl_pengembalian') ?>

    <?php // echo $form->field($model, 'jam_pengembalian') ?>

    <?php // echo $form->field($model, 'jaminan') ?>

    <?php // echo $form->field($model, 'ket_jaminan') ?>

    <?php // echo $form->field($model, 'DP_rp') ?>

    <?php // echo $form->field($model, 'total_sewa_kendaraan') ?>

    <?php // echo $form->field($model, 'total_sewa_sopir') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'ket') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
