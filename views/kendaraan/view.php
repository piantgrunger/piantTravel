<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use hscstudio\mimin\components\Mimin;

/* @var $this yii\web\View */
/* @var $model app\models\kendaraan */

$this->title = $model->no_plat_kendaraan;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Kendaraan'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
             <?php if ((Mimin::checkRoute($this->context->id."/update"))){ ?>        <?= Html::a(Yii::t('app', 'Ubah'), ['update', 'id' => $model->id_kendaraan], ['class' => 'btn btn-primary']) ?>
        <?php } if ((Mimin::checkRoute($this->context->id."/delete"))){ ?>        <?= Html::a(Yii::t('app', 'Hapus'), ['delete', 'id' => $model->id_kendaraan], [
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
            'nama_jns_kendaraan',
            'no_plat_kendaraan',
            'no_rangka_kendaraan',
            'no_mesin_kendaraan',
            'tahun_pembuatan',
            'merk_kendaraan',
            'pabrikan_kendaraan',
            'pemilik_kendaraan',
            'kapasitas_penumpang',
            'status',
            'ket:ntext',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
