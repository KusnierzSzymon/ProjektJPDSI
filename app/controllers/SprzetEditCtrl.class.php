<?php


namespace app\controllers;
use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use core\Validator;
use app\forms\SprzetEditForm;

class SprzetEditCtrl {
  
    
    
    public function action_SprzetGet(){
    try {
      App::getDB()->insert("wypozsprzet",[
        "Id_wypozyczenia" => SessionUtils::load("global_order_id", true),
       
        "Id_sprzet" => ParamUtils::getFromCleanURL(1)
      ]);
    } catch (\PDOException $e) {
      Utils::addErrorMessage('Wystąpił podczas dodawania produktu do koszyka');
      if (App::getConf()->debug)
          Utils::addErrorMessage($e->getMessage());
    }
    App::getRouter()->redirectTo('shop');

  }
  
  public function generateView(){
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->display('ShopView.tpl');
  }
}
