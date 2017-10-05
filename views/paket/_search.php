<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\paketSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paket-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_paket') ?>

    <?= $form->field($model, 'kode_paket') ?>

    <?= $form->field($model, 'nama_paket') ?>

    <?= $form->field($model, 'jenis_paket')->
            dropDownList([ 'Paket Sopir' => 'Paket Sopir', 'Paket Kendaraan' => 'Paket Kendaraan', ], ['prompt' => '']
                    
                    ) 
             ?>

    <?= $form->field($model, 'id_jns_kendaraan') ?>

    <?php // echo $form->field($model, 'jenis_biaya') ?>

    <?php // echo $form->field($model, 'biaya_rp') ?>

    <?php // echo $form->field($model, 'denda_rp') ?>

    <?php // echo $form->field($model, 'stat') ?>

    <?php // echo $form->field($model, 'ket') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
