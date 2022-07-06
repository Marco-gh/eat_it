<?php header('Content-type: text/html; charset=UTF-8');

require_once "vendor/autoload.php";
require_once "routes.php";
require_once "View.php";
require_once "vendor/pecee/simple-router/helpers.php";
require_once "Utility.php";


use Pecee\SimpleRouter\SimpleRouter;

//Creiamo un'oggetto View e lo inseriamo nell'array superglobale $GLOBAL in modo che altri metodi
//lo possano reperire
$smarty = new View();
$GLOBALS['smarty'] = $smarty;


//Impostiamo il NameSpace di default su cui il router andrà a svolgere il proprio mestriere
SimpleRouter::setDefaultNamespace("\App\Controllers");
//Inizializzazione del simplerouter e di tutto il processo di routing
SimpleRouter::start(); 
