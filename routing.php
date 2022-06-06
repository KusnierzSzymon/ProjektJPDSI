<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('showMainPage'); #default action
App::getRouter()->setLoginRoute('login'); 

Utils::addRoute('login', 'LoginControl');
Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('showMainPage', 'MainControl');
Utils::addRoute('register', 'RegisterControl');
Utils::addRoute('logout', 'LoginControl');