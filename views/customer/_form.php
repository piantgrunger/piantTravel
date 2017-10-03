<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->errorSummary($model) ?> <!-- ADDED HERE -->

              <div class="row">

                  <div class="col-sm-6">
    <?= $form->field($model, 'kode_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_customer')->textarea(['rows' => 6]) ?>

                                       
                    </div>
    <div class="col-sm-6">

    <?= $form->field($model, 'telp_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telp2_customer')->textInput(['maxlength' => true]) ?>
        
    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stat')->dropDownList([ 'Aktif' => 'Aktif', 'Tidak Aktif' => 'Tidak Aktif', ], ['prompt' => '']) ?>

    </div>
              </div>>             
    
  <?= $form->field($model, 'ket')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
