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
Utils::addRoute('search', 'PanelControl', ['admin', 'moderator', 'user', 'zbanowany']);
Utils::addRoute('addEquip', 'AddEquipControl', ['admin', 'moderator' , 'user', 'zbanowany']);
Utils::addRoute('hint', 'SearchHintsControl', ['admin', 'moderator', 'user', 'zbanowany']);
Utils::addRoute('shop', 'ShopDetailsControl', ['admin', 'moderator', 'user', 'zbanowany']);
Utils::addRoute('manageUsers', 'UserManagerControl', ['admin', 'moderator']);
Utils::addRoute('profile', 'ProfileControl', ['admin', 'moderator', 'user', 'zbanowany']);
Utils::addRoute('rentList', 'RentControl', ['admin', 'moderator']);
Utils::addRoute('place', 'PlaceControl', ['admin', 'moderator' , 'user', 'zbanowany']);
Utils::addRoute('userEdit', 'UserEditControl', ['admin', 'moderator']);
Utils::addRoute('cartList', 'CartCtrl',	['user']);
Utils::addRoute('cartDelete', 'CartCtrl',	['user']);
Utils::addRoute('cartFinalize', 'CartCtrl',	['user']);
Utils::addRoute('SprzetGet', 'SprzetEditCtrl', ['user']);
Utils::addRoute('rentDelete', 'RentControl', ['admin', 'moderator']);
Utils::addRoute('rentAccept', 'RentControl', ['admin', 'moderator']);
Utils::addRoute('placeList', 'PlaceListControl', ['admin', 'moderator']);
Utils::addRoute('placeListPart', 'PlaceListControl', ['admin', 'moderator']);

