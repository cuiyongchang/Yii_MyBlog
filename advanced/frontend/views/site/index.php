<?php

/* @var $this yii\web\View */
use frontend\widgets\banner\BannerWidget;
use frontend\widgets\hot\HotWidget;
use frontend\widgets\tag\TagWidget;
use frontend\widgets\article\ArticleWidget;
use frontend\widgets\chat\ChatWidget;
$this->title = 'My Yii Application';
?>

<!-- 组件有什么用？-->
<!--1. 方便代码移植-->
<!--2. 界面清新-->
<!--3. 减少代码量-->
<h1>这是首页广告轮播图</h1>
<div class="row">
    <div class="col-lg-9">
        <?= BannerWidget::widget() ?>
        <?= ArticleWidget::widget() ?>
    </div>
    <div class="col-lg-3">
        <?= BannerWidget::widget() ?>
        <?= HotWidget::widget()?>
        <?= TagWidget::widget()?>
        <?= ChatWidget::widget()?>
    </div>
</div>
<div>
    
</div>


