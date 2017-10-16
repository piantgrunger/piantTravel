<?php


use hscstudio\mimin\components\Mimin;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax; use kartik\export\ExportMenu;
$gridColumns=[['class' => 'yii\grid\SerialColumn'], 
            'no_sewa',
            'tgl_pemesanan',
            'tgl_sewa',
            'jam_sewa',
            // 'id_customer',
            // 'tgl_pengembalian',
            // 'jam_pengembalian',
            // 'jaminan',
            // 'ket_jaminan:ntext',
            // 'DP_rp',
            // 'total_sewa_kendaraan',
            // 'total_sewa_sopir',
            // 'total',
            // 'ket:ntext',
            // 'created_at',
            // 'updated_at',

         ['class' => 'yii\grid\ActionColumn',   'template' => Mimin::filterActionColumn([
              'update','delete','view'],$this->context->route),    ],    ]; echo ExportMenu::widget(['dataProvider' => $dataProvider,'columns' => $gridColumns]);

/* @var $this yii\web\View */
/* @var $searchModel app\models\sewaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Daftar Sewa');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sewa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p> <?php if ((Mimin::checkRoute($this->context->id."/create"))){ ?>        <?=  Html::a(Yii::t('app', 'Sewa  Baru'), ['create'], ['class' => 'btn btn-success']) ?>
    <?php } ?>    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,        'responsive'=>true,
        'hover'=>true,
         'resizableColumns'=>true,    
    ]); ?>
    <?php Pjax::end(); ?>
</div>
