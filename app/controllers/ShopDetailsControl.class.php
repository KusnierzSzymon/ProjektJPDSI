<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\RoleUtils;
use core\Utils;
use core\Validator;
use core\SessionUtils;

class ShopDetailsControl
{

    public $id;
    public $markerData;
    

    public function getMarkerFromDb($id){
        try{
            $this->markerData = App::getDB()->get("sprzet", [
                "[>]typsprzetu" => ["Id_typsprzetu" => "Id_typsprzetu"],
                
            ],[
                'sprzet.Producent',
                'sprzet.Model',
                'sprzet.Cena_dzien',
                'sprzet.rozmiar',
                'typsprzetu.Nazwa_typ',
                'typsprzetu.Dla_dzieci',
                'typsprzetu.Liczba_dostepnych',
                
            ],[
                'sprzet.Id_sprzet' => $id
            ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
        return $this->markerData;
    }

   

    public function generateView(){
        $this->markerData = $this->getMarkerFromDb($this->id);
        
        
        App::getSmarty()->assign("place", $this->markerData);
        
        
        App::getSmarty()->assign("page_title", "Sprzęt");
        App::getSmarty()->display("ShopView.tpl");
    }

    public function validate(){
        if(empty($this->id) || $this->id <= 0) Utils::addErrorMessage("Brak parametru");

        $v = new Validator();
        $v->validate($this->id,[
            'numeric' => true,
            'int' => true,
            'validator_message' => 'Nieprawidłowy parametr!',
        ]);

        $this->isExist();

        if(App::getMessages()->isError()) return false;
        else return true;
    }

    public function isExist(){
        try{
            $isExist = App::getDB()->has("sprzet", [
                'Id_sprzet' => $this->id
            ]);

            if(!$isExist){
                Utils::addErrorMessage("Użytkownik o podanym id nie istnieje!");
            }
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych‚!");
        }
    }

    public function action_shop(){
        $this->id = ParamUtils::getFromCleanURL(1);

        if(!$this->validate()){
            header("Location: ".App::getConf()->app_url."/panel");
        }
        else{
            $this->generateView();
        }
    }
}