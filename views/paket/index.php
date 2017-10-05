<?php


use hscstudio\mimin\components\Mimin;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax; use kartik\export\ExportMenu;
$gridColumns=[['class' => 'yii\grid\SerialColumn'], 
            'kode_paket',
            'nama_paket',
            'jenis_paket',
            'nama_jns_kendaraan',
            // 'jenis_biaya',
            // 'biaya_rp',
            // 'denda_rp',
            // 'stat',
            // 'ket:ntext',
            // 'created_at',
            // 'updated_at',

         ['class' => 'yii\grid\ActionColumn',   'template' => Mimin::filterActionColumn([
              'update','delete','view'],$this->context->route),    ],    ]; echo ExportMenu::widget(['dataProvider' => $dataProvider,'columns' => $gridColumns]);

/* @var $this yii\web\View */
/* @var $searchModel app\models\paketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Daftar Paket');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paket-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p> <?php if ((Mimin::checkRoute($this->context->id."/create-paket-kendaraan"))){ ?> 
       <?=  Html::a(Yii::t('app', 'Paket Kendaraan Baru'), ['create-paket-kendaraan'], ['class' => 'btn btn-success']) ?>
    <?php } ?> 
    
    <?php if ((Mimin::checkRoute($this->context->id."/create-paket-sopir"))){ ?> 
       <?=  Html::a(Yii::t('app', 'Paket Sopir Baru'), ['create-paket-sopir'], ['class' => 'btn btn-success']) ?>
    <?php } ?> 
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,        'responsive'=>true,
        'hover'=>true,
         'resizableColumns'=>true,    
    ]); ?>
    <?php Pjax::end(); ?>
</div>
