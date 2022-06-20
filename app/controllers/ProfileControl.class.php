<?php

namespace app\controllers;


use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;

class ProfileControl
{
    public $id;
    public $userData;
    public $addedPlaces;

    public function getUserFromDb($id){
        $user = null;

        try{
            $user = App::getDB()->get("user", [
                "[>]rola" => ["Id_rola" => "Id_rola"],
              
            ],[
                'user.Id_user',
                'user.Login',
                'user.Email',
                
                'user.Id_rola',
                'rola.Nazwa_rola',
                
                
                
            ],[
                'user.Id_user' => $id
            ]);


        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $user;
    }

    

    public function generateView(){
        $this->userData = $this->getUserFromDb($this->id);
        
        App::getSmarty()->assign("profile", $this->userData);
       
        App::getSmarty()->assign("page_title", "Profil użytkownika: " .$this->userData['Login']);
        App::getSmarty()->display("ProfileView.tpl");
    }

    public function validate(){
        $v = new Validator();
        $v->validate($this->id,[
            'numeric' => true,
            'int' => true,
            'validator_message' => 'Nieprawidłowy parametr!',
        ]);

        $isExist = App::getDB()->count("User", "Id_user", [
            'Id_user' => $this->id
        ]);

        if($isExist != 1){
            Utils::addErrorMessage("Użytkownik o podanym id nie istnieje!");
        }

        if(App::getMessages()->isError()) return false;
        else return true;
    }

    public function action_profile(){
        $this->id = ParamUtils::getFromCleanURL(1);
        if(empty($this->id) || $this->id < 0) $this->id = SessionUtils::loadData("Id_user", true);

        if(!$this->validate()){
            $this->id = SessionUtils::loadData("Id_user", true);
        }

        $this->generateView();

    }
}