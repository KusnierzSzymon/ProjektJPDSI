<?php


namespace app\forms;


class PlaceForm {
    public $miasto;
    public $ulica;
    public $kod_pocztowy;
    
    

    function checkIsNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
}
