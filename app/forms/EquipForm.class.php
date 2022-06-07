<?php



namespace app\forms;


class EquipForm {
    
    public $producent;
    public $model;
    public $cena_dzien;
    public $rozmiar;
    public $nazwa_typ;
    public $dla_dzieci;
    public $liczba_dostepnych;
    

    function checkIsNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
}

