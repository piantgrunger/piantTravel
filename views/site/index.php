
<?php
use hscstudio\mimin\components\Mimin;
use yii\helpers\Html;

/* @var $this yii\web\View */


?>
<div class="site-index">

  

    <div class="body-content">

        <div class="row">
         <div class="col-md-6">
             <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$Jmlkendaraanready;?></h3>

              <p>Kendaraan Ready</p>
            </div>
            <div class="icon">
              <i class="fa fa-car"></i>
            </div>
            <?php if ((Mimin::checkRoute("/kendaraan/"))){ ?>         
         <?=Html::a(Yii::t('app', 'Daftar Kendaraan'), ['/kendaraan/'], ['class' => 'small-box-footer']) ?> 
                 
                 <?php }?>
          </div>
              
            </div>
            <div class="col-md-6">
            
                    <div class="panel box box-primary">
        
            <!-- /.box-header -->
            <div class="box-body">
             

              <h3 class="box-title center"><i class="fa fa-calendar"> </i>  <?=Yii::t('app',Yii::$app->formatter->asDate('now', ' dd MMMM yyyy'));?></h3>     
            </div>
            <!-- /.box-body -->
          </div>
            
                    
             <div class="panel box box-success">
            <div class="box-header with-border">
              <i class="fa fa-car"></i>

              <h3 class="box-title">Profil Perusahaan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl >          
                <dt><i class="fa fa-building-o" aria-hidden="true"> </i>  Nama Perusahaan</dt>
                <dd><?=$modelSetting->nama_perusahaan;?></dd>
                
              </dl>
                <dl >          
                
                <dt><i class="fa fa-home" aria-hidden="true"></i>  Alamat Perusahaan</dt>
                <dd><?=$modelSetting->alamat_perusahaan;?></dd>
              </dl>
                <dl >          
               
                <dt><i class="fa fa-phone" aria-hidden="true"></i>  Telepon Perusahaan</dt>
                <dd><?=$modelSetting->telp_perusahaan1;?> <?=$modelSetting->telp_perusahaan2;?></dd>
              </dl>
                <dl >          
             
                <dt><i class="fa fa-envelope-open" aria-hidden="true"></i>  Email Perusahaan</dt>
                
                <dd><?=$modelSetting->email_perusahaan;?></dd>
              </dl>
                <dl >          
             
                <dt><i class="fa fa-firefox" aria-hidden="true"></i>  Website Perusahaan</dt>
                <dd><?=$modelSetting->website_perusahaan;?></dd>
              </dl>
             
                
              </dl>
      
                
                
            </div>
            <!-- /.box-body -->
          </div>
            </div>
       </div>
        </div>

    </div>
</div>
