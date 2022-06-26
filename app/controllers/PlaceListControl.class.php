<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\PlaceForm;

class PlaceListControl {

    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych

    public function __construct() {
        //stworzenie potrzebnych obiektĂłw
        $this->form = new PlaceForm();
    }

    public function validate() {
        // 1. sprawdzenie, czy parametry zostaĹ‚y przekazane
        // - nie trzeba sprawdzaÄ‡
        $this->form->miasto = ParamUtils::getFromRequest('miasto');

        // 2. sprawdzenie poprawnoĹ›ci przekazanych parametrĂłw
        // - nie trzeba sprawdzaÄ‡

        return !App::getMessages()->isError();
    }

    public function load_data() {
        // 1. Walidacja danych formularza (z pobraniem)
        // - W tej aplikacji walidacja nie jest potrzebna, poniewaĹĽ nie wystÄ…piÄ… bĹ‚edy podczas podawania nazwiska.
        //   Jednak pozostawiono jÄ…, poniewaĹĽ gdyby uzytkownik wprowadzaĹ‚ np. datÄ™, lub wartoĹ›Ä‡ numerycznÄ…, to trzeba
        //   odpowiednio zareagowaÄ‡ wyĹ›wietlajÄ…c odpowiedniÄ… informacjÄ™ (poprzez obiekt wiadomoĹ›ci Messages)
        $this->validate();

        // 2. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartoĹ›Ä‡)
        $search_params = []; //przygotowanie pustej struktury (aby byĹ‚a dostÄ™pna nawet gdy nie bÄ™dzie zawieraĹ‚a wierszy)
        if (isset($this->form->miasto) && strlen($this->form->miasto) > 0) {
            $search_params['miasto[~]'] = $this->form->miasto . '%'; // dodanie symbolu % zastÄ™puje dowolny ciÄ…g znakĂłw na koĹ„cu
        }

        // 3. Pobranie listy rekordĂłw z bazy danych
        // W tym wypadku zawsze wyĹ›wietlamy listÄ™ osĂłb bez wzglÄ™du na to, czy dane wprowadzone w formularzu wyszukiwania sÄ… poprawne.
        // Dlatego pobranie nie jest uwarunkowane poprawnoĹ›ciÄ… walidacji (jak miaĹ‚o to miejsce w kalkulatorze)
        //przygotowanie frazy where na wypadek wiÄ™kszej liczby parametrĂłw
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortujÄ…cej po nazwisku
        $where ["ORDER"] = "miasto";
        //wykonanie zapytania

        try {
            $this->records = App::getDB()->select("wypozyczalnia", [
                "Id_wypozyczalnia",
                "Ulica",
                "Miasto",
                "Kod_pocztowy",
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('WystÄ…piĹ‚ bĹ‚Ä…d podczas pobierania rekordĂłw');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }

    public function action_placeList() {
        $this->load_data();
        App::getSmarty()->assign('PlaceForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('wypozyczalnie', $this->records);  // lista rekordĂłw z bazy danych
        App::getSmarty()->display('PlacelistFull.tpl');
    }

    public function action_placeListPart() {
        $this->load_data();
        App::getSmarty()->assign('PlaceForm', $this->form);
        App::getSmarty()->assign('wypozyczalnie', $this->records);
        App::getSmarty()->display('PlaceListTable.tpl');
    }
}