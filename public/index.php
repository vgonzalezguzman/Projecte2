<?php

/**
 * Aquest fitxer és un exemple de Front Controller, pel qual passen totes les requests.
 */

<<<<<<< HEAD
 include "../src/config.php";
 include "../src/controllers/ctrlIndex.php";
 include "../src/controllers/ctrlJson.php";
 include "../src/controllers/ctrlDoRegister.php";
 include "../src/controllers/ctrlRegister.php";
 include "../src/controllers/ctrlDoLogin.php";
 include "../src/controllers/ctrlLogin.php";

=======
 error_reporting(E_ERROR | E_WARNING | E_PARSE);
 require "../src/config.php";

 $config = include "../src/config.php";
 include "../src/controllers/ctrlIndex.php";
 include "../src/controllers/ctrlJson.php";
 include "../src/controllers/ctrlLogin.php";
 include "get.php";
>>>>>>> emma

/**
  * Carreguem les classes del Framework Emeset
*/
<<<<<<< HEAD
  
=======
>>>>>>> emma
 include "../src/Emeset/Container.php";
 include "../src/Emeset/Request.php";
 include "../src/Emeset/Response.php";

 $request = new \Emeset\Request();
 $response = new \Emeset\Response();
 $container = new \Emeset\Container($config);

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
 
 /* Front Controller, aquí es decideix quina acció s'executa */
 if($r == "") {
<<<<<<< HEAD
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

else {
     echo "No existeix la ruta";
=======
    $response = ctrlIndex($request, $response, $container);
 } elseif($r == "login") {
    $response = ctrlLogin($request, $response, $container);
 } elseif($r == "json") {
    $response = ctrlJson($request, $response, $container);
} else {
    echo "No existeix la ruta";
>>>>>>> emma
 }

 /* Enviem la resposta al client. */
 $response->response();