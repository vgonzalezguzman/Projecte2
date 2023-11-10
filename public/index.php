<?php

/**
 * This file is an example of a Front Controller, through which all requests pass.
 */

 // Include configuration and controller files
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
 include "../src/controllers/ctrlDades.php";
 include "../src/controllers/ctrlDoDades.php";
 include "../src/controllers/ctrlReserva.php";
 include "../src/controllers/ctrlUsers.php";
 include "../src/controllers/ctrlGestioApartament.php";
 include "../src/controllers/ctrlEditApartament.php";
 include "../src/controllers/ctrlDoEditApartament.php";
 include "../src/controllers/ctrlDoDeleteApartament.php";
 include "../src/controllers/ctrlViewReservasUsuari.php";
 include "../src/controllers/ctrlDoReserva.php";





 include "../src/middleware/isLogged.php";
 include "../src/middleware/Gestor.php";

/**
  * Load the classes of the Emeset Framework.
*/
  
 include "../src/Emeset/Container.php";
 include "../src/Emeset/Request.php";
 include "../src/Emeset/Response.php";

 $request = new \Emeset\Request();
 $response = new \Emeset\Response();
 $container = new \Emeset\Container($config);

 /* 
  * This is the part that makes the Front Controller work.
  * If there is no parameter, load the home page.
  * If there is a parameter, load the corresponding page.
  * If the page does not exist, load the error page.
  */
 $r = '';
 if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
 }
 
 /* Determine which action to execute based on the 'r' parameter */
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
elseif($r == "dodades") {
  $response = isLogged ($request, $response, $container, "ctrlDoDades");
}
elseif($r == "reserva") {
  $response = ctrlReservaView($request, $response, $container);
}
elseif($r == "users") {
  $response = Gestor($request, $response, $container, "ctrlUsersView");
}
elseif($r == "gestioapartament") {
  $response = Gestor($request, $response, $container, "ctrlGestioApartamentView");
}
elseif($r == "editapartament") {
  $response = Gestor($request, $response, $container, "ctrlEditApartamentView");
}
elseif($r == "doeditapartament") {
  $response = Gestor($request, $response, $container, "ctrlDoEditApartament");
}
elseif($r == "dodeleteapartament") {
  $response = Gestor($request, $response, $container, "ctrlDoDeleteApartament");
}
elseif ($r == "llistaReservaUsuari") {
  $response = isLogged ($request, $response, $container, "ctrlViewReservasUsuari");
}
elseif ($r == "doreserva") {
  $response = isLogged ($request, $response, $container, "ctrlDoReserva");
}
else {
     echo "No existeix la ruta";
 }

 /* Send the response to the client */
 $response->response();