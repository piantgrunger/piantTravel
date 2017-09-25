<?php

/* @var $this yii\web\View */


?>
<div class="site-index">

  

    <div class="body-content">

        <div class="row">
         <div class="col-md-6">
              
            </div>
            <div class="col-md-6">
            
                    <div class="box box-solid">
        
            <!-- /.box-header -->
            <div class="box-body">
             <i class="fa fa-calendar"></i>

              <h3 class="box-title center"><?=Yii::$app->formatter->asDate('now', 'dd MMMM yyyy');?></h3>     
            </div>
            <!-- /.box-body -->
          </div>
                
                <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-car"></i>

              <h3 class="box-title">E-Rental</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl>
                
                <dt>Nama Perusahaan</dt>
                <dd><?=$modelSetting->nama_perusahaan;?></dd>
                <dt>Alamat</dt>
                <dd><?=$modelSetting->alamat_perusahaan;?></dd>
                
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
            </div>
       </div>
        </div>

    </div>
</div>
