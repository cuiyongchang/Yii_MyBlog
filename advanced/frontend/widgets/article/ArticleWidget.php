<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace frontend\widgets\article;

use yii\base\Widget;
use frontend\models\PostsForm;
/**
 * Description of ArticleWidget
 *
 * @author Administrator
 */
class ArticleWidget  extends Widget{
    public $title;
    public $limit = 3;
    public $page = true;
    public $more = true;



    public function init(){
        
    }
    
    public function run() {
        // 1.获取当前页
        $currentPage = \Yii::$app->request->get("page",1);
        // 2.查询所有可见的文章
        $condition = ['=','is_valid',  \frontend\models\Posts::IS_VALID];
        // 3.由表单模型根据条件查询符合的文章数据
        $res = PostsForm::getArticleList($condition,$currentPage,  $this->limit);        
        return $this->render("index",['data'=>$res['data']]);
    }
    
}
