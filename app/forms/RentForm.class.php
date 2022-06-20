<?php



namespace app\forms;


class RentForm {
    public $liczbadni;
    public $wypozyczalnia;
    

  function checkIsNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }  
    
}
