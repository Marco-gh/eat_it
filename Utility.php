<?php

use App\Controllers\Session;
use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

/*
Cos'é questa classe? Perché è stata creata?
>Questa classe è stata creata per contenere tutti quei metodi sciolti che vengono utilizzati
all'interno del progetto per svolgere vari compiti.
*/

/*
Cosa fà setData?
>Serve a impostare alcuni dati all'interno dell'array $data, in particolare:
    1)inseriamo tutte le categorie (sotto forma di array di oggetti) sotto la key "categories"
    2)inseriamo l'oggetto restaurant sotto la key "restaurant"
    3) a seconda di se l'untente risulta loggato o no, andremo ad inserire i dati di quest'ultimo presi dalla sessione sotto varie key pertineti (es. "cartId", "CartProducts", ...) oppure andremo ad assegnare NULL alla variabile "user"
    4)viene invocato il metodo view della classe View.php dandogli il nome del tamplate e i dati appena "ripuliti"
*/
function setData($view, $data){
        $session=Session::getInstance();
        $fcat=new \App\Foundation\FCategory();
        $frestaurant=new \App\Foundation\FRestaurant();
        $categories=$fcat->getAll();
        $data["categories"]=$categories;
        $data["restaurant"]=$frestaurant->getByEmail("tasteit@gmail.com");
        if ($session->isUserLogged()){
            $user=$session->loadUser();
            $cart=$user->getCart();
            $favId = $user->getFav()->getId();

            $cartProducts=$cart->getProducts();
            $data["cartId"]=$cart->getId();
            $data["cartProducts"]= $cartProducts;
            $data["user"]= $user;
            $data["favId"] = $favId;
            return view($view, $data);
        }
        else{
            $data["user"]=NULL;
            return view($view, $data);
        }
    }

    function minLength($args): bool
    {
        return strlen($args[0]) >= $args[1];
    }

    function maxLength($args): bool
    {
        return strlen($args[0]) <= $args[1];
    }

    function maxValue($args): bool
    {
        return (int)$args[0] <= $args[1];
    }

    function minValue($args): bool
    {
        return (int)$args[0] >= $args[1];
    }

    function isPositive($args): bool {
        return intval($args[0]) > 0;
    }

    function isNotExpired($args): bool {
        return $args[0] > date("Y-m-d");
    }

/*
Cosa fà validate?
>$target sono i dati che vogliamo validare, $fields è un array che contiene le operazioni che vogliamo svolgere per ognuno degli elementi all'interno del target.
Ad ogni operazione sarà associato il nome del metodo da chiamare ed gli attributi da dargli (insieme all'attributo corrispondente in target).
L'obiettivo di questo metodo è quello di controllare se tutti i campi soddisfano i requisiti dati; se anche un solo campo non è consistente, l'intera validazione risulterà falsa.
*/
function validate($target, $fields): bool {
        $isValid = true;
        foreach ($fields as $field=>$validators) {
           foreach ($validators as $validator) {
               $splitted = explode(":", $validator);
               $functionToCall = $splitted[0];
               //Array che contiene l'attributo da verificare e la condizione di verifica
               $args = [$target[$field], $splitted[1]];
               //verifica che la chiamata di funzione risulti falsa, datagli gli argomenti precedentemente messi in array
               if(call_user_func(strval($functionToCall), $args) == false) {
                   //validazione fallita
                   $isValid = false;
               }

           }
        }
        return $isValid;
    }


    function printObject($data) {
        echo '<pre>'; print_r($data); echo '</pre>';
    }

    /*
    Cosa fà questo metodo?
    >prende un'immagine, che è stata caricata nella cartella tmp di apache, è la va a "portare" sotto la directory src/assets/images/ per poterla recuperare in futuro.
    Questa immagine ci è stata inviata da un utente.
    Il metodo restituisce il nuovo path dell'immagine.
    */
    function uploadImage(): string {
        $msg = "";
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "src/assets/images/" . $filename;
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }
        return '/'.$folder;
    }