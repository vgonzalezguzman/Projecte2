
<?php

function Gestor($request, $response, $container, $next) {
    $user = $request->get("SESSION", "user");

    if ($user["Rol"] == "Gestor") {
        $gestor = true;
    }
    else{
        
        $response->redirect("location: index.php?r=");
        return $response;
    }
    

    // Continúa con el siguiente middleware o acción.
    $response = $next($request, $response, $container);

    return $response;
}


