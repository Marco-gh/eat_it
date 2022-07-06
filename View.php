<?php

use App\Foundation\FCategory;

// https://www.smarty.net/docs/en/installing.smarty.extended.tpl
class View extends Smarty {

    /*
    Imposta le variabili di Smarty
    */
    public function __construct() {
        parent::__construct();

        $this->setTemplateDir('/src/templates/');
        $this->setCompileDir('src/template_c/');
        $this->setConfigDir('src/smarty_configs/');
        $this->setCacheDir('src/smarty_cache/');


    }

}

/*
Recupera l'oggetto View creato dall'index, verifica che ci siano effettivamente dati da assegnare. Se si, effettua l'assegnazione attraverso Smarty dei valori associati ad ogni variabile. Infine chiama il metodo display di Smarty con il path completo del file template da visualizzare.
*/
function view($templateFile, $data = [] ) {
    $smarty = $GLOBALS['smarty'];
    $templatePath = 'src/templates/';

    if(sizeof($data) > 0) {
        foreach($data as $key => $val) {
            $smarty->assign($key, $val);
        }
    }

    return $smarty->display($templatePath . $templateFile . '.tpl');
}
