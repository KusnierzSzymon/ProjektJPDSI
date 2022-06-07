<?php


namespace app\controllers;

use app\forms\EquipForm;
use core\App;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;

class AddEquipControl {
   public $form;
    public $newAddedId;
   
    public function __construct()
    {
        $this->form = new EquipForm();
    }

    /**
     *
     */
    public function getParams(){
        $this->form->producent = ParamUtils::getFromPost('producent');
        $this->form->model = ParamUtils::getFromPost('model');
        $this->form->cena_dzien = ParamUtils::getFromPost('cena_dzien');
        $this->form->rozmiar = ParamUtils::getFromPost('rozmiar');
        $this->form->nazwa_typ = ParamUtils::getFromPost('nazwa_typ');
        $this->form->dla_dzieci = ParamUtils::getFromPost('dla_dzieci');
        $this->form->liczba_dostepnych = ParamUtils::getFromPost('liczba_dostepnych');
      
    }

   
    public function validateEquip(){
        if(!$this->form->checkIsNull()) return false;

        

        $v = new Validator();
        $v->validate($this->form->producent,[
            'trim' => true,
            'required' => true,
            'min_length' => 2,
            'max_length' => 45,
            'required_message' => 'Producent jest wymagana',
            'validator_message' => "Producent powinna składać się od 4 do 45 znaków!"
        ]);

        $v->validate($this->form->model,[
            'trim' => true,
            'required' => true,
            'min_length' => 2,
            'max_length' => 45,
            'required_message' => 'Model jest wymagany',
            'validator_message' => "Model powinna składać się od 4 do 45 znaków!!"
        ]);

        $v->validate($this->form->cena_dzien,[
            'trim' => true,
            'required' => true,
            'numeric' => true,
            'min_length' => 1,
            'max_length' => 11,
            'required_message' => 'Cena jest wymagany',
            'validator_message' => "Cena powinna składać się od 1 do 11 cyfr!!"
        ]);

        $v->validate($this->form->rozmiar,[
            'trim' => true,
            'required' => true,
            'numeric' => true,
            'min_length' => 1,
            'max_length' => 11,
            'required_message' => 'Rozmiar jest wymagany',
            'validator_message' => "Rozmiar powinna składać się od 1 do 11 cyfr!!"
        ]);

        $v->validate($this->form->nazwa_typ,[
            'trim' => true,
            'required' => true,
            'min_length' => 4,
            'max_length' => 45,
            'required_message' => 'Typ jest wymagany',
            'validator_message' => "Typ powinna składać się od 4 do 45 znaków!!"
            ]);

        $v->validate($this->form->dla_dzieci,[
            'trim' => true,
            'required' => true,
            'min_length' => 3,
            'max_length' => 3,
            'required_message' => 'Jest wymagany',
            'validator_message' => "Powinna składać się z 3 znaków!!"
            ]);

        $v->validate($this->form->liczba_dostepnych,[
            'trim' => true,
            'required' => true,
            'numeric' => true,
            'min_length' => 1,
            'max_length' => 11,
            'required_message' => 'Liczba dostępnych jest wymagany',
            'validator_message' => "Liczba dostępnych powinna składać się od 1 do 11 cyfr!!"
        ]);

        
        $this->checkForDuplicates();

        if(!App::getMessages()->isError()) return true;
        else return false;
    }

    public function checkForDuplicates(){
        try{
            $record = App::getDB()->has('sprzet',[
                'AND'=>[
                    'Producent' => $this->form->producent,
                    'Model' => $this->form->model,
                ]
            ]);

            if($record){
                Utils::addErrorMessage("Model danego produencta już instnieje w bazie");
            }
        }catch(\PDOException $e){
            Utils::addErrorMessage("Blad polaczenia z baza danych");
        }
    }

    /**
     *
     */
    public function insertToDB(){
        try{
            
             
             
              
             
           App::getDB()->insert('typsprzetu',[
                'Id_typsprzetu' => null,
                'Nazwa_typ' => $this->form->nazwa_typ,
                'Dla_dzieci' => $this->form->dla_dzieci,
                'Liczba_dostepnych' => $this->form->liczba_dostepnych,
                
            ]);
           
            $this->newAddedId = App::getDB()->id();
            
            App::getDB()->insert('sprzet',[
                'Id_sprzet' => null,
                'Producent' => $this->form->producent,
                'Model' => $this->form->model,
                'Cena_dzien' => $this->form->cena_dzien,
                'Rozmiar' => $this->form->rozmiar,
                'Id_typsprzetu' => $this->newAddedId,

            ]);
           

            

           
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }

    /**
     * @throws \SmartyException
     */
    public function generateView(){
        if($this->validateEquip()){
            $this->insertToDB();
            Utils::addInfoMessage("Pomyślnie dodano nowe miejsce!");
            header("Location: ".App::getConf()->app_url."/equip/".$this->newAddedId);
        }
        else{
            App::getSmarty()->assign("title", "Dodaj nowe miejsce");
            App::getSmarty()->assign("form", $this->form);
            App::getSmarty()->assign("page_title", "Dodaj nowe miejsce");
            App::getSmarty()->display("AddEquipView.tpl");
        }
    }


    /**
     * @throws \SmartyException
     */
    public function action_addEquip(){
        $this->getParams();
        $this->generateView();
    }

} 

