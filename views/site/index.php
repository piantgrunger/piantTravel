
<?php
use hscstudio\mimin\components\Mimin;
use yii\helpers\Html;

/* @var $this yii\web\View */


?>
<div class="site-index">

  

    <div class="body-content">
        <div class="row">
              <div class="col-md-4">
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
             <div class="col-md-4">
        
             <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$Jmlcustomerready;?></h3>

              <p>Customer Aktif</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-o"></i>
            </div>
            <?php if ((Mimin::checkRoute("/customer/"))){ ?>         
         <?=Html::a(Yii::t('app', 'Daftar Customer'), ['/customer/'], ['class' => 'small-box-footer']) ?> 
                 
                 <?php }?>
          </div>
                  
                  
                </div>  
<div class="col-md-4">
             
             <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$Jmlsopirready;?></h3>

              <p>Sopir Aktif</p>
            </div>
            <div class="icon">
              <i class="fa fa-id-card-o"></i>
            </div>
            <?php if ((Mimin::checkRoute("/sopir/"))){ ?>         
         <?=Html::a(Yii::t('app', 'Daftar Sopir'), ['/sopir/'], ['class' => 'small-box-footer']) ?> 
                 
                 <?php }?>
          </div>
              
        </div>
            </div>
   
        
        </div>
        <div class="row">
            
            <div class="col-md-6">
 </div>
            
            <div class="col-md-6">
            
     
                    
             <div class="panel box box-success">
            <div class="box-header with-border">
              <i class="fa fa-car"></i>

              <h3 class="box-title">Profil Perusahaan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        
                  <?=Html::img( Yii::getAlias('@web')."/uploads/" . $modelSetting->logo_perusahaan,
                          ['width'=>'100%','height'=>'100%'
                      ]);?>
               
           </div>
                
                
            </div>
            <!-- /.box-body -->
          </div>
            </div>
       </div>
        </div>

    </div>
</div>
