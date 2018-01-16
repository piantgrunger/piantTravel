<?php
use app\models\jnskendaraan;
use kartik\select2\Select2;

?>

<td><?= $form->field($model,"[$key]id_jns_kendaraan")->widget(Select2::classname(),[ 
     'data' => jnskendaraan::getDataBrowsejnskendaraan(),
     'options' => ['placeholder' => 'Pilih Jenis Kendaraan...'],
     'pluginOptions' => [
         'allowClear' => true
     ],])->label(false); ?></td>
<td><?= $form->field($model,"[$key]id_kendaraan")->textInput()->label(false); ?></td>
<td><?= $form->field($model,"[$key]id_paket")->textInput()->label(false); ?></td>
<td><?= $form->field($model,"[$key]sub_tot")->textInput()->label(false); ?></td>

<td><a data-action="delete"><span class="glyphicon glyphicon-trash"></span></a></td>