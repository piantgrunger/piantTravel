<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\jnskendaraan;
use kartik\money\MaskMoney;

/* @var $this yii\web\View */
/* @var $model app\models\paket */
/* @var $form yii\widgets\ActiveForm */

$js='function showstuff(element, option, t){
   if(t.options[t.selectedIndex].value==option){
      document.getElementById(element).style.display="block";
   }else{
      document.getElementById(element).style.display="none";
   }
}';
$this->registerJs($js);

?>

<div class="paket-form">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->errorSummary($model) ?> <!-- ADDED HERE -->
               <div class="row">

             <div class="col-sm-6">

    <?= $form->field($model, 'kode_paket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_paket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_biaya')->dropDownList([ 'Harian' => 'Harian', 'Total' => 'Total', ], ['prompt' => '']) ?>
    
   
  </div>
                       <div class="col-sm-6">

    <?php if ($tipe=='kendaraan') {
        echo $form->field($model, 'id_jns_kendaraan')->widget(Select2::classname(), [
    
    'data' => jnskendaraan::getDataBrowsejnskendaraan(),
    'options' => ['placeholder' => 'Pilih Jns Kendaraan ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],])->label('Jns Kendaraan'); }?>

  
    <?= $form->field($model, 'biaya_rp')->widget(MaskMoney::classname(), [
    'pluginOptions' => [
        'prefix' => 'Rp ',
        'allowNegative' => false,
             'precision' => 0
    ]
])->label('Biaya') ?>

    <?php if ($tipe=='kendaraan') {
        echo $form->field($model, 'denda_rp')->widget(MaskMoney::classname(), [
    'pluginOptions' => [
        'prefix' => 'Rp ',
          'allowNegative' => false,
             'precision' => 0
    ]
    ])->label('Denda'); }
                ?>

    <?= $form->field($model, 'stat')->dropDownList([ 'Aktif' => 'Aktif', 'Tidak Aktif' => 'Tidak Aktif', ], ['prompt' => '']) ?>

                           </div>
                   </div>
    <?= $form->field($model, 'ket')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
