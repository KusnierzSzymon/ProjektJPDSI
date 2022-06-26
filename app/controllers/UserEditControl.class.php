<?php

namespace app\controllers;

use app\forms\UserEditForm;
use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;

/**
 * Class UserEditControl
 * @package app\controllers
 */
class UserEditControl
{
    /**
     * @var UserEditForm
     */
    public $form;
    /**
     * @var
     */
    public $user;

    /**
     * UserEditControl constructor.
     */
    public function __construct()
    {
        $this->form = new UserEditForm();
    }

    /**
     *
     */
    public function getParams(){
        $this->form->Id_user = ParamUtils::getFromPost('Id_user');
        $this->form->Login = ParamUtils::getFromPost('Login');
        $this->form->Haslo = ParamUtils::getFromPost('Haslo');
        $this->form->Email = ParamUtils::getFromPost('Email');
        $this->form->Id_rola = ParamUtils::getFromPost('Id_rola');
       
    }

    /**
     *
     */
    public function getCurrentUserData(){
        try{
            $this->user = App::getDB()->get("user","*",[
                'Id_user' => $this->form->Id_user
            ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }

    /**
     * @return bool
     */
    public function validateForm(){
        $v = new Validator();
        $v->validate($this->form->Email,[
            'email' => true,
            'trim' => true,
            'required' => true,
            'min_length' => 4,
            'max_length' => 45,
            'required_message' => 'Adres email jest wymagany',
            'validator_message' => "Nieprawidłowy adres email"
        ]);

        $v->validate($this->form->Login,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 3,
            'max_length' => 45,
            'validator_message' => 'Login powinien zawierać od 3 do 45 znaków'
        ]);

        $v->validate($this->form->Haslo,[
            'required' => true,
            'required_message' => 'Haslo jest wymagane',
            'regexp' => "/(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}/",
            'validator_message' => 'Haslo powinno mieć conajmniej 5 znaków'
        ]);

      
     

      
        $this->checkForDuplicates();
        $this->checkIsForbidden();

        if(!App::getMessages()->isError()) return true;
        else return false;
    }

    /**
     *
     */
    public function checkForDuplicates(){
        try{
            $isLoginExist = App::getDB()->has('user',[
                'Login' => $this->form->Login,
                'Id_user[!]' => $this->form->Id_user
            ]);

            if($isLoginExist) Utils::addErrorMessage("Podany login występuje już u innego użytkownika");

            $isMailExist = App::getDB()->has('user',[
                'Email' => $this->form->Email,
                'Id_user[!]' => $this->form->Id_user
            ]);

            if($isMailExist) Utils::addErrorMessage("Podany login występuje już u innego użytkownika");
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }

    public function checkIsForbidden(){
        if(SessionUtils::load('rola', true) == 'moderator'){
            if($this->user['Id_rola'] <= 2){
                Utils::addErrorMessage("Moderator nie moĹĽe edytowaÄ‡ kont innych niĹĽ uĹĽytkownik i zbanowany!");
            }

            if($this->form->Id_rola <= 2){
                Utils::addErrorMessage("Moderator nie moĹĽe nadawaÄ‡ uprawnieĹ„ administratora ani moderatora!");
            }
        }
    }

    /**
     *
     */
    public function updateUser(){
        //Szyfrowanie haseĹ‚, jeĹ›li zmieniĹ‚y siÄ™.
        if($this->form->Haslo != $this->user['Haslo']) $this->form->Haslo = md5($this->form->Haslo);
        

        try{
            App::getDB()->update('user',[
                'Login' => $this->form->Login,
                'Haslo' => $this->form->Haslo,
                'Email' => $this->form->Email,
                'Id_rola' => $this->form->Id_rola,
            ],[
                'Id_user' => $this->form->Id_user
            ]);

          

            Utils::addInfoMessage("Pomyślnie zmieniono dane użytkownika");
            
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }

    /**
     *
     */
    public function generateView(){
        if($this->validateForm()) {
            $this->updateUser();
        }
        header("Location: ".App::getConf()->app_url."/manageUsers/0/edit/".$this->form->Id_user);
    }

    /**
     *
     */
    public function action_userEdit(){
        $this->getParams();
        $this->getCurrentUserData();
        $this->generateView();
    }

}