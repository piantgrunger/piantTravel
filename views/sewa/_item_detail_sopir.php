<?php
use app\models\sopir;
use kartik\select2\Select2;
use kartik\widgets\DepDrop;
use yii\helpers\Url;

?>

<td><?= $form->field($model,"[$key]id_sopir")->widget(Select2::classname(),[ 
     'data' => sopir::getDataBrowseSopir(),
     'options' => ['placeholder' => 'Pilih Sopir...'],
     'pluginOptions' => [
         'allowClear' => true
     ],])->label(false); ?>
       
     </td>

<td><?= $form->field($model,"[$key]id_paket")->widget(DepDrop::classname(), [
    'type'=>DepDrop::TYPE_SELECT2,
    'data'=> [$model->id_paket=>is_null($model->paket)?"":$model->paket->nama_paket],
    'options'=>[ 'placeholder'=>'Pilih Paket ...'],
    'select2Options'=>['pluginOptions'=>['allowClear'=>true]],
    'pluginOptions'=>[
        'depends'=>['d_sewa_sopir-'.$key.'-id_sopir'],
         'url'=>Url::to(['/sewa/paket']),
        'placeholder'=>'Pilih Paket ...' ,
        'initialize' =>true,
        ]
    ])->label(false); ?></td>
<td><?= $form->field($model,"[$key]sub_tot")->textInput()->label(false); ?></td>

<td><a data-action="delete"><span class="glyphicon glyphicon-trash"></span></a></td>