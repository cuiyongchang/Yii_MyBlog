<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace frontend\widgets\chat;
use frontend\models\FeedsForm;
use yii\base\Widget;
/**
 * Description of ChatWidget
 *
 * @author Administrator
 */
class ChatWidget extends Widget{
    public function init(){
        
    }
    
    public function run() {
        $feeds = new FeedsForm;
        $data['feed'] = $feeds->getList();
        return $this->render("index", ['data' => $data]);

    }
}
