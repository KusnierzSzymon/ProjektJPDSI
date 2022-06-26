<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;

class RentControl {
  private $rent;
  

  public function __construct() {
    
  }

  public function action_rentList(){
    try {
      $this->rent = App::getDB()->select("wypozsprzet",[
         "[>]wypozyczenie" => ["Id_wypozyczenia" => "Id_wypozyczenia"],
      "[>]sprzet" => ["Id_sprzet" => "Id_sprzet"],       
            ],[
          
          
          "wypozsprzet.Id_sprzet",
        "wypozsprzet.Id_wypozyczenia",
                "wypozyczenie.zakonczone",
                "wypozyczenie.Id_user",
                "sprzet.Producent",
                "sprzet.Model"
                
                
      ]
      ,["wypozyczenie.zakonczone" => 1]
    );
    } catch (\PDOException $e) {
      Utils::addErrorMessage('Nie udało się wyświetlić zawartości wypozyczen');
      if(App::getConf()->debug)
        Utils::addErrorMessage($e->getMessage());
    }
    
    App::getSmarty()->assign("rent", $this->rent);
    App::getSmarty()->display("RentView.tpl");
  }
public function action_rentDelete(){
    try {
      App::getDB()->delete("wypozsprzet",[
        "Id_sprzet" => ParamUtils::getFromCleanURL(1),
        "Id_wypozyczenia" => ParamUtils::getFromCleanURL(2)
      ]);
      Utils::addInfoMessage('Usunięto!');
    } catch (\PDOException $e) {
      Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu z koszyka');
      if (App::getConf()->debug)
          Utils::addErrorMessage($e->getMessage());
    }
        App::getRouter()->redirectTo('rentList');
  }
  
  public function action_rentAccept(){
    
      try {
        App::getDB()->update("wypozyczenie",[
          "akceptacja" => "1"
        ],[
          "Id_wypozyczenia" => ParamUtils::getFromCleanURL(2)
        ]);
       App::getDB()->delete("wypozsprzet",[
        "Id_sprzet" => ParamUtils::getFromCleanURL(1),
        "Id_wypozyczenia" => ParamUtils::getFromCleanURL(2)
      ]);
      Utils::addInfoMessage('Usunięto!');
    } catch (\PDOException $e) {
      Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu z koszyka');
      if (App::getConf()->debug)
          Utils::addErrorMessage($e->getMessage());
    }  
    
     App::getRouter()->redirectTo('rentList');
  
    }
}
