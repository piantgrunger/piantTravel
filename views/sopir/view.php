<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use hscstudio\mimin\components\Mimin;

/* @var $this yii\web\View */
/* @var $model app\models\sopir */

$this->title = $model->nama_sopir;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Sopir'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sopir-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
             <?php if ((Mimin::checkRoute($this->context->id."/update"))){ ?>        <?= Html::a(Yii::t('app', 'Ubah'), ['update', 'id' => $model->id_sopir], ['class' => 'btn btn-primary']) ?>
        <?php } if ((Mimin::checkRoute($this->context->id."/delete"))){ ?>        <?= Html::a(Yii::t('app', 'Hapus'), ['delete', 'id' => $model->id_sopir], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Apakah Anda yakin ingin menghapus item ini??'),
                'method' => 'post',
            ],
        ]) ?>
        <?php } ?>    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama_sopir',
            'alamat_sopir:ntext',
            'telp_sopir',
            'no_ktp',
            'jns_SIM',
            'no_SIM',
            'tgl_berlaku_SIM',
            'stat',
            'persentase',
            'ket:ntext',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
