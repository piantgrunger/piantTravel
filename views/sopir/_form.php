<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
USE kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\sopir */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sopir-form">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->errorSummary($model) ?> <!-- ADDED HERE -->

    <?= $form->field($model, 'nama_sopir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_sopir')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telp_sopir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jns_SIM')->dropDownList([ 'A' => 'A', 'B1' => 'B1', 'B2' => 'B2', 'C' => 'C', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_SIM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_berlaku_SIM')->widget(DateControl::classname(), [
    'options' => ['placeholder' => 'Masukkan Tanggal Lahir...'
        ],
    'pluginOptions' => [
        'autoclose'=>true
    ]
]);?>

    <?= $form->field($model, 'stat')->dropDownList([ 'Aktif' => 'Aktif', 'Tidak Aktif' => 'Tidak Aktif', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'persentase')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
