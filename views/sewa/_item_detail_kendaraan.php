<?php
use app\models\jnskendaraan;
use kartik\select2\Select2;
use kartik\widgets\DepDrop;
use yii\helpers\Url;

?>

<td><?= $form->field($model,"[$key]id_jns_kendaraan")->widget(Select2::classname(),[ 
     'data' => jnskendaraan::getDataBrowsejnskendaraan(),
     'options' => ['placeholder' => 'Pilih Jenis Kendaraan...'],
     'pluginOptions' => [
         'allowClear' => true
     ],])->label(false); ?>
       
     </td>
<td><?= $form->field($model,"[$key]id_kendaraan")->widget(DepDrop::classname(), [
    'type'=>DepDrop::TYPE_SELECT2,
    'data'=> [$model->id_kendaraan=>is_null($model->kendaraan)?"":$model->kendaraan->merk_kendaraan],
    'options'=>[ 'placeholder'=>'Pilih Kendaraan ...'],
    'select2Options'=>['pluginOptions'=>['allowClear'=>true]],
    'pluginOptions'=>[
        'depends'=>['d_sewa_kendaraan-'.$key.'-id_jns_kendaraan'],
        'url'=>Url::to(['/sewa/kendaraan']),
        'placeholder'=>'Pilih Kendaraan ...' ,
        'initialize' =>true,
        ]
    ])->label(false); ?></td>
<td><?= $form->field($model,"[$key]id_paket")->widget(DepDrop::classname(), [
    'type'=>DepDrop::TYPE_SELECT2,
    'data'=> [$model->id_paket=>is_null($model->paket)?"":$model->paket->nama_paket],
    'options'=>[ 'placeholder'=>'Pilih Paket ...'],
    'select2Options'=>['pluginOptions'=>['allowClear'=>true]],
    'pluginOptions'=>[
        'depends'=>['d_sewa_kendaraan-'.$key.'-id_jns_kendaraan'],
         'url'=>Url::to(['/sewa/paket']),
        'placeholder'=>'Pilih Paket ...' ,
        'initialize' =>true,
        ]
    ])->label(false); ?></td>
<td><?= $form->field($model,"[$key]sub_tot")->textInput()->label(false); ?></td>

<td><a data-action="delete"><span class="glyphicon glyphicon-trash"></span></a></td>