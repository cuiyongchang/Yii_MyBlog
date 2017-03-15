<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Country;
/**
 * Description of CountryController
 *
 * @author Administrator
 */
class CountryController extends Controller{
    //put your code here
    public function actionIndex(){
        $query = Country::find();
        
        $pagination = new Pagination([
            'defaultPageSize' => 5,//每页几行数据
            'totalCount' => $query->count(),
        ]);

        $countrys = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        
        // 如果使用sql查询，有可能会被攻击 ---sql注入
        Country::findBySql("select * from country");
        // 1.查询大量数据 -- 查询所有商品的基本信息
        // 注意：直接查询会导致内存不够用
        // 解决方法：
        // 1) 过滤不必要的字段  select id from ****
        // 2) 返回的数据为标准数组，而不是对象
        $countrys = $query->asArray()->All();
        // 3) 分段查询  分页
        foreach ($query->batch(10) as $country){
            
        }

        //查询所有城市
//        $countrys = $query->all();
//        $countrys = $query->where([">","population","100000000"])->all();
        return $this->render("index",["countrys"=>$countrys,"pagination"=> $pagination]);
    }
    
    
}
