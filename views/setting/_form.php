<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Setting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="setting-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
        <?= $form->errorSummary($model) ?> <!-- ADDED HERE -->

    <?= $form->field($model, 'nama_perusahaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_perusahaan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telp_perusahaan1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telp_perusahaan2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_perusahaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website_perusahaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo_perusahaan')->widget(FileInput::classname(), [
    'options' => ['multiple' => FALSE,
                  'accept' => 'image/*'],
    'pluginOptions' => ['previewFileType' => 'image',
           
        'showPreview' => false,
        'showCaption' => true,
        'showRemove' => true,
        'showUpload' => false,
    
        'resizeImages'=>true,  'initialPreviewConfig' => [
        'previewSettings'=>["width"=> "120px", "height"=> "120px"],
            ['caption' => $model->nama_perusahaan, "width"=> "10px", "Height"=> "10px"]], 'initialPreview'=>[
                Html::img( Yii::getAlias('@web')."/uploads/" . $model->logo_perusahaan)
            ],
            'overwriteInitial'=>true],
    
        
]);  ?>

    <?= $form->field($model, 'ket')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
