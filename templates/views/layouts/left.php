<?php
use hscstudio\mimin\components\Mimin;
$menuItems =
        [
                    ['label' => 'Gii','icon' => 'fa fa-file-code-o', 'url' => ['/gii/'],'visible' => !Yii::$app->user->isGuest],
                    [
                        'visible' => !Yii::$app->user->isGuest,
                        'label' => 'User / Group',
                        'icon' => 'user-circle',
                        'url' => '#',
                        'items' => [
                    ['label' => 'App. Route', 'icon' =>  'user', 'url' => ['/mimin/route/'],'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Role', 'icon' =>  'user', 'url' => ['/mimin/role/'],'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'User', 'icon' => 'user', 'url' => ['/mimin/user/'],'visible' => !Yii::$app->user->isGuest],
                   ]]
                        ,
            ['label' => 'Setting', 'icon' => 'dashboard', 'url' => ['/setting/'],'visible' => !Yii::$app->user->isGuest],
            
            [
                        'visible' => !Yii::$app->user->isGuest,
                        'label' => 'Master',
                        'icon' => 'bus',
                        'url' => '#',
                        'items' => [
                    ['label' => 'Jns Kendaraan', 'icon' =>  'car', 'url' => ['/jnskendaraan/'],'visible' => !Yii::$app->user->isGuest],
              ['label' => 'Kendaraan', 'icon' =>  'taxi', 'url' => ['/kendaraan/'],'visible' => !Yii::$app->user->isGuest],
            ['label' => 'Sopir', 'icon' =>  'drivers-license-o', 'url' => ['/sopir/'],'visible' => !Yii::$app->user->isGuest],
           
                   ]]
                        ,
           
                   ['label' => 'Customer', 'icon' =>  'user-o', 'url' => ['/customer/'],'visible' => !Yii::$app->user->isGuest],
                  ['label' => 'Paket', 'icon' =>  'money', 'url' => ['/paket/'],'visible' => !Yii::$app->user->isGuest],
           
            
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
