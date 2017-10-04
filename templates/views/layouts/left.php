<?php
use hscstudio\mimin\components\Mimin;
$menuItems =
        [
                    ['label' => 'Gii','options' => ['class' => 'treeview'] ,'icon' => 'fa fa-file-code-o', 'url' => ['/gii/'],'visible' => !Yii::$app->user->isGuest],
                    [
                        'visible' => !Yii::$app->user->isGuest,
                        'label' => 'User / Group',
                        'icon' => 'user-circle',
                        'url' => '#',
                        'items' => [
                    ['label' => 'App. Route','options' => ['class' => 'treeview'] , 'icon' =>  'user', 'url' => ['/mimin/route/'],'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Role','options' => ['class' => 'treeview'] , 'icon' =>  'user', 'url' => ['/mimin/role/'],'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'User','options' => ['class' => 'treeview'] , 'icon' => 'user', 'url' => ['/mimin/user/'],'visible' => !Yii::$app->user->isGuest],
                   ]]
                        ,
            ['label' => 'Setting','options' => ['class' => 'treeview'] , 'icon' => 'dashboard', 'url' => ['/setting/'],'visible' => !Yii::$app->user->isGuest],
            
            [
                        'visible' => !Yii::$app->user->isGuest,
                        'label' => 'Master',
                        'icon' => 'bus',
                        'url' => '#',
                        'items' => [
                    ['label' => 'Jns Kendaraan','options' => ['class' => 'treeview'] , 'icon' =>  'car', 'url' => ['/jnskendaraan/'],'visible' => !Yii::$app->user->isGuest],
              ['label' => 'Kendaraan','options' => ['class' => 'treeview'] , 'icon' =>  'taxi', 'url' => ['/kendaraan/'],'visible' => !Yii::$app->user->isGuest],
            ['label' => 'Sopir','options' => ['class' => 'treeview'] , 'icon' =>  'drivers-license-o', 'url' => ['/sopir/'],'visible' => !Yii::$app->user->isGuest],
           
                   ]]
                        ,
           
                   ['label' => 'Customer','options' => ['class' => 'treeview'] , 'icon' =>  'user-o', 'url' => ['/customer/'],'visible' => !Yii::$app->user->isGuest],
                  ['label' => 'Paket','options' => ['class' => 'treeview'] , 'icon' =>  'money', 'url' => ['/paket/'],'visible' => !Yii::$app->user->isGuest],
           
            
                ];     
                
 if (!Yii::$app->user->isGuest)
{             
 if (Yii::$app->user->identity->username !== 'admin') 
{
  $menuItems = Mimin::filterMenu($menuItems);
}
}        
?>
<aside class="main-sidebar">

    <section class="sidebar">



        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree'],
                'items' => $menuItems,
            ]
        ) ?>

    </section>

</aside>
