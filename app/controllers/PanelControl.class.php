<?php


namespace app\controllers;

use app\forms\PanelForm;
use core\App;
use core\ParamUtils;
use core\Utils;

class PanelControl
{
    public $form;
    public $where = [];
    public $search_params = [];
    public $query;

    public function __construct(){
        $this->form = new PanelForm();
    }

    public function getParams(){
        $this->form->producent = ParamUtils::getFromGet("producent");
        $this->form->model = ParamUtils::getFromGet("model");
        $this->form->typ = ParamUtils::getFromGET('typ');
        $this->form->rozmiar = ParamUtils::getFromGET('rozmiar');
    }

    public function validateStatement(){
        if(!empty($this->form->producent)) $this->where['sprzet.Producent[~]'] = $this->form->producent . '%';
        if(!empty($this->form->model)) $this->where['sprzet.Model[~]'] = '%' .$this->form->model . '%';
        if(!empty($this->form->typ)) $this->where['typsprzetu.Nazwa_typ'] = $this->form->typ;
        if(!empty($this->form->rozmiar)) $this->where['sprzet.Rozmiar'] = $this->form->rozmiar;
        $this->where['LIMIT'] = 50;
        

        $num_params = sizeof($this->where);
        if ($num_params > 1) {
            $this->search_params = ["AND" => &$this->where];
        } else {
            $this->search_params = &$this->where;
        }

        if(empty($this->where)) Utils::addErrorMessage("Brak kryteriów wyszukiwania!");

        if(!App::getMessages()->isError()) return true;
        else return false;
    }

    public function queryToDB(){
        $this->where['LIMIT'] = 50;

        try{
           $this->query = App::getDB()->select("typsprzetu",[
                "[>]sprzet" => ["Id_typsprzetu" => "Id_typsprzetu"],
           ],[
                'sprzet.Id_sprzet',
                'sprzet.Producent',
                'sprzet.Model',
                'sprzet.Rozmiar',
                'typsprzetu.Dla_dzieci',
                
           ], $this->where);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }

    public function generateView(){
        App::getSmarty()->assign("page_title", "Wyszukiwarka");
        App::getSmarty()->assign("query", $this->query);
        App::getSmarty()->display("PanelView.tpl");
    }

    public function action_search(){
        $this->getParams();
        if($this->validateStatement()){
            $this->queryToDB();
        }
        $this->generateView();
    }

}