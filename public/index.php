<?php

/**
 * Aquest fitxer és un exemple de Front Controller, pel qual passen totes les requests.
 */

 include "../src/config.php";
 include "../src/controllers/ctrlIndex.php";
 include "../src/controllers/ctrlJson.php";
 include "../src/controllers/ctrlDoRegister.php";
 include "../src/controllers/ctrlRegister.php";
 include "../src/controllers/ctrlDoLogin.php";
 include "../src/controllers/ctrlLogin.php";
 include "../src/controllers/ctrlApartament.php";
 include "../src/controllers/ctrlDoApartament.php";
 include "../src/controllers/ctrlDoLogout.php";
<<<<<<< HEAD
 include "../src/controllers/ctrlDades.php";



=======
 include "../src/controllers/ctrlReserva.php";
>>>>>>> 717b89a57d033952a1f0c2cec74e6baa40ca2080
 include "../src/middleware/isLogged.php";
/**
  * Carreguem les classes del Framework Emeset
*/
  
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
elseif($r == "dologout") {
  $response = ctrlDoLogout($request, $response, $container);
}
elseif($r == "apartament") {
  $response = isLogged ($request, $response, $container, "ctrlApartamentView");
}
elseif($r == "doaddapartament") {
  $response = isLogged ($request, $response, $container, "ctrlDoApartament");
}
elseif($r == "dades") {
  $response = isLogged ($request, $response, $container, "ctrlDadesView");
}
elseif($r == "reserva") {
  $response = ctrlReservaView($request, $response, $container);
else {
     echo "No existeix la ruta";
 }

 /* Enviem la resposta al client. */
 $response->response();