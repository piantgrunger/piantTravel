<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\kendaraan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kendaraan-form">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->errorSummary($model) ?> <!-- ADDED HERE -->
                <div class="row">

             <div class="col-sm-6">

    <?= $form->field($model, 'id_jns_kendaraan')->widget(Select2::classname(), [
    'data' => $browseArray,
    'options' => ['placeholder' => 'Pilih Jns Kendaraan ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],])->label('Jns Kendaraan');  ?>

    <?= $form->field($model, 'no_plat_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rangka_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_mesin_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_pembuatan')->textInput() ?>
                 
                    </div>
    <div class="col-sm-6">

    <?= $form->field($model, 'merk_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pabrikan_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemilik_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kapasitas_penumpang')->textInput(['maxlength' => true]) ?>
        
          <?= $form->field($model, 'status')->dropDownList([ 'Ready' => 'Ready', 'Rusak' => 'Rusak','Keluar'=>'Keluar' ], ['prompt' => '']) ?>


</div>
   </div>
    <?= $form->field($model, 'ket')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
