<?php

/**
 * Aquest fitxer és un exemple de Front Controller, pel qual passen totes les requests.
 */
error_reporting(E_ERROR | E_WARNING | E_PARSE);
 include "../src/config.php";

 include "../src/controllers/ctrlIndex.php";
 include "../src/controllers/ctrlJson.php";
 include "../src/controllers/ctrlDoRegister.php";
 include "../src/controllers/ctrlRegister.php";
 include "../src/controllers/ctrlDoLogin.php";
 include "../src/controllers/ctrlLogin.php";
 include "../src/controllers/ctrlApartament.php";
 include "../src/controllers/ctrlDoApartament.php";
 
 require "../src/middleware/middleAdmin.php";

 /* 
  * Aquesta és la part que fa que funcioni el Front Controller.
  * Si no hi ha cap paràmetre, carreguem la pàgina d'inici.
  * Si hi ha paràmetre, carreguem la pàgina que correspongui.
  * Si no existeix la pàgina, carreguem la pàgina d'error.
  */
 $r = '';
 if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
 }
 

 $container = new Emeset\Container($config);
 $response = $container->response();
 $request = $container->request();

 /* Front Controller, aquí es decideix quina acció s'executa */
 if($r == "") {
     $response = ctrlIndex($request, $response, $container);
 } elseif($r == "json") {
  $response = ctrlJson($request, $response, $container);
}
elseif($r == "register") {
  $response = ctrlRegistroView($request, $response, $container);
}elseif($r == "doregister") {
  $response = ctrlRegister($request, $response, $container);
}
elseif($r == "login") {
  $response = ctrlLoginView($request, $response, $container);
}
elseif($r == "dologin") {
  $response = ctrlDoLogin($request, $response, $container);
}
elseif($r == "apartament") {
  $response = ctrlApartamentView($request, $response, $container);
}
elseif($r == "doaddapartament") {
  $response = ctrlDoApartament($request, $response, $container);
}/*
elseif($r == "carregaJSON") {
  $response = ctrlSelect($response);
  //$response = ctrlSelect($response->$values);
}*/

else {
     echo "No existeix la ruta";
 }


 /* Enviem la resposta al client. */

 $response->response();