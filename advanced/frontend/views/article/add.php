<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//设置面包屑导航
$this->title = \Yii::t("common", "add article");
$this->params['breadcrumbs'][] = ["label" => \Yii::t("common", "Article"),"url" =>["article/index"]];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-9">
        <div class="panel-title">
            <span><?= Yii::t("common", "add article");?></span>
        </div>
        <div>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'title')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'cat_id')->dropDownlist($cats) ?>

                <?= $form->field($model, 'label_img')->widget('common\widgets\file_upload\FileUpload',[
                    
                ]) ?>
                
                <?= $form->field($model, 'content')->widget('common\widgets\ueditor\Ueditor',[
                    'options'=>[
                        'initialFrameHeight' => 450,
                        
                    ]
                ]) ?>
                <?= $form->field($model, 'tags')->widget('common\widgets\tags\TagWidget') ?>
                

                <div class="form-group">
                    <?= Html::submitButton(\Yii::t("common", "submit"), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <div>
            <?= "注意事项"."<br>"?>
            <?= "&nbsp&nbsp&nbsp&nbsp"."不要说脏话"."<br>"?>
            <?= "&nbsp&nbsp&nbsp&nbsp"."不要说脏话"."<br>"?>
            <?= "&nbsp&nbsp&nbsp&nbsp"."不要说脏话"."<br>"?>
            <?= "&nbsp&nbsp&nbsp&nbsp"."不要说脏话"."<br>"?>
            <?= "&nbsp&nbsp&nbsp&nbsp"."不要说脏话"."<br>"?>
            <?= "&nbsp&nbsp&nbsp&nbsp"."不要说脏话"."<br>"?>
            
        </div>
    </div>
    
</div>