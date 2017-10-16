<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\customer;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\sewa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sewa-form">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->errorSummary($model) ?> <!-- ADDED HERE -->

        <div class="row">

             <div class="col-sm-4">

 
    <?= $form->field($model, 'id_customer')->widget(Select2::classname(),[ 
     'data' => customer::getDataBrowseCustomer(),
     'options' => ['placeholder' => 'Pilih Customer ...'],
     'pluginOptions' => [
         'allowClear' => true
     ],])->label('Customer'); ?>

    <?= $form->field($model, 'tgl_pemesanan')->widget(DateControl::className()); ?>

 </div>
 <div class="col-sm-4">
    
    
    <?= $form->field($model, 'tgl_sewa')->widget(DateControl::className());  ?>

    <?= $form->field($model, 'jam_sewa')->widget(DateControl::classname(), [
     'type'=>DateControl::FORMAT_TIME
]);?>
    <?= $form->field($model, 'tgl_pengembalian')->widget(DateControl::className());  ?>

    <?= $form->field($model, 'jam_pengembalian')->widget(DateControl::classname(), [
     'type'=>DateControl::FORMAT_TIME
]);?>
    </div>
 <div class="col-sm-4">
    

    
 

    <?= $form->field($model, 'jaminan')->dropDownList([ 'KTP/SIM' => 'KTP/SIM', 'Uang Tunai' => 'Uang Tunai', 'Kendaraan Bermotor' => 'Kendaraan Bermotor', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_jaminan')->textarea(['rows' => 8]) ?>
    </div>
    </div>




    <?= $form->field($model, 'DP_rp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_sewa_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_sewa_sopir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
