<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;

class CartCtrl {
  private $cart;
  

  public function __construct() {
    
  }

  public function action_cartList(){
    try {
      $this->cart = App::getDB()->select("wypozsprzet",[
        "Id_sprzet",
        "Id_wypozyczenia"
      ]
      ,["Id_wypozyczenia" => SessionUtils::load("global_order_id", true)]
    );
    } catch (\PDOException $e) {
      Utils::addErrorMessage('Nie udało się wyświetlić zawartości koszyka');
      if(App::getConf()->debug)
        Utils::addErrorMessage($e->getMessage());
    }
    
    App::getSmarty()->assign("cart", $this->cart);
    App::getSmarty()->display("CartView.tpl");
  }

  public function action_cartDelete(){
    try {
      App::getDB()->delete("wypozsprzet",[
        "Id_sprzet" => ParamUtils::getFromCleanURL(1),
        "Id_wypozyczenia" => SessionUtils::load("global_order_id", true)
      ]);
      Utils::addInfoMessage('Usunięto z koszyka!');
    } catch (\PDOException $e) {
      Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu z koszyka');
      if (App::getConf()->debug)
          Utils::addErrorMessage($e->getMessage());
    }
        App::getRouter()->redirectTo('cartList');
  }

  public function action_cartFinalize(){
    if (!App::getDB()->has("wypozsprzet",[
        "Id_wypozyczenia" => SessionUtils::load("global_order_id", true)
      ])) {
      Utils::addErrorMessage('Koszyk jest pusty!');

    } else {
      try {
        App::getDB()->update("wypozyczenie",[
          "zakonczone" => "1"
        ],[
          "Id_wypozyczenia" => SessionUtils::load("global_order_id", true)
        ]);
        App::getDB()->insert("wypozyczenie",[
          "Id_user" => SessionUtils::load("global_user_id", true),
        ]);
		SessionUtils::store("global_order_id",App::getDB()->id("wypozyczenie"));
      } catch (\Exception $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas finalizacji zamówienia');
        if (App::getConf()->debug)
          Utils::addErrorMessage($e->getMessage());
      }
    }
    App::getRouter()->redirectTo('cartList');
  }

}
