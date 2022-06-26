<?php

namespace app\controllers;

use app\forms\LoginForm;
use core\Logs;
use core\ParamUtils;
use core\App;
use core\SessionUtils;
use core\RoleUtils;
use core\Utils;
use core\Validator;

/**
 * Class LoginControl
 * @package app\controllers
 */
class LoginControl
{
    /**
     * @var LoginForm
     */
    public $form;

    /**
     * @var
     */
    public $accountData;

    /**
     * LoginControl constructor.
     */
    public function __construct(){
        $this->form = new LoginForm();
    }

    /**
     *
     */
    public function getLoginParams(){
        $this->form->login = ParamUtils::getFromRequest("login");
        $this->form->password = ParamUtils::getFromRequest("password");
    }

    /**
     * @return bool
     */
    public function validateLogin(){
        if(!empty(SessionUtils::load("Id_user", true))) return true;

        if(!$this->form->checkIsNull()) return false;

        $v = new Validator();
        $v->validate($this->form->login,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 3,
            'max_length' => 32,
            'validator_message' => 'Login powinien zawierać od 3 do 32 znaków'
        ]);

        $v->validate($this->form->password,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
        ]);

        if(App::getMessages()->isError()) return false;

        try{
            $this->accountData = App::getDB()->get("user", [
                "[>]rola" => ["Id_rola" => "Id_rola"],
            ],[
                'user.Id_user',
                'user.Login',
                'user.Haslo',
                'rola.Nazwa_rola',
            ],[
                'Login' => $this->form->login,
                'Haslo' => md5($this->form->password)
            ]);
            
           
            if(empty($this->accountData)){
                Utils::addErrorMessage("Nieprawidłowy login lub hasło");
            }
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }

        if(!App::getMessages()->isError()) return true;
        else return false;
    }

    /**
     * @throws \SmartyException
     */
    public function generateView(){
        if($this->validateLogin()){
            SessionUtils::store("Id_user", $this->accountData["Id_user"]);
            SessionUtils::store("Login", $this->accountData["Login"]);
            SessionUtils::store("rola", $this->accountData["Nazwa_rola"]);
            if($this->accountData["Nazwa_rola"] == "user"){
            $var_user_id = App::getDB()->get("user","Id_user",[
				"Login" => $this->form->login
			]);
			SessionUtils::store("global_user_id", $var_user_id);
                        App::getDB()->insert("wypozyczenie",[
					"Id_user" => SessionUtils::load("global_user_id", true),
				]);
            SessionUtils::store("global_order_id", App::getDB()->id("wypozyczenie"));
            }

            

            RoleUtils::addRole($this->accountData["Nazwa_rola"]);
            RoleUtils::addRole("logged");
            Utils::addInfoMessage("Logowanie udane!");

           
            header("Location: ".App::getConf()->app_url."/panel");
        }
        else{
            App::getSmarty()->assign('page_title','Zaloguj się');
            App::getSmarty()->assign('page_description','Logowanie do systemu');
            App::getSmarty()->display('LoginView.tpl');
        }
    }

    /**
     * @throws \SmartyException
     */
    public function action_login(){
        $this->getLoginParams();
        $this->generateView();
    }

    /**
     *
     */
    public function action_logout(){
        RoleUtils::removeRole("logged");
        RoleUtils::removeRole(SessionUtils::load("rola"));
        SessionUtils::remove("Id_user");
        SessionUtils::remove("Login");
        SessionUtils::remove("rola");
        header("Location: ".App::getConf()->app_url);
    }
}