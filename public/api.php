<?php 

include "../src/controllers/ctrlSelect.php";

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
elseif($r == "apartament") {
 $response = ctrlApartamentView($request, $response, $container);
}
elseif($r == "doaddapartament") {
 $response = ctrlDoApartament($request, $response, $container);
}