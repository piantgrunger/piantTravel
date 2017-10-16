<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use hscstudio\mimin\components\Mimin;

/* @var $this yii\web\View */
/* @var $model app\models\sewa */

$this->title = $model->no_sewa;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Sewa'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sewa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
             <?php if ((Mimin::checkRoute($this->context->id."/update"))){ ?>        <?= Html::a(Yii::t('app', 'Ubah'), ['update', 'id' => $model->id_sewa], ['class' => 'btn btn-primary']) ?>
        <?php } if ((Mimin::checkRoute($this->context->id."/delete"))){ ?>        <?= Html::a(Yii::t('app', 'Hapus'), ['delete', 'id' => $model->id_sewa], [
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
            'no_sewa',
            'tgl_pemesanan',
            'tgl_sewa',
            'jam_sewa',
            'id_customer',
            'tgl_pengembalian',
            'jam_pengembalian',
            'jaminan',
            'ket_jaminan:ntext',
            'DP_rp',
            'total_sewa_kendaraan',
            'total_sewa_sopir',
            'total',
            'ket:ntext',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
