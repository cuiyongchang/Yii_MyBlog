<?php
use yii\widgets\LinkPager;
?>

<?php foreach ($countrys as $key => $value) { ?>
    <h1><?php echo $value['name'];?></h1>
    
<?php }?>
    <div class="text-center"><?= LinkPager::widget(['pagination' => $pagination]) ?></div>