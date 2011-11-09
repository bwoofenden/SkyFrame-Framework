<?php
    include(APP . 'config/Routes.php');
    $request = $_SERVER['REQUEST_URI'];
    $request = str_replace('/', '', $request);
    
    if (array_key_exists($request, $routes)) {
        $exp = explode('#', $routes[$request]);
        require(APP . 'controllers' . DS . $exp[0] . DS . $exp[1] . EXT);
        $controller = new $exp[1]();
        $controller->index();
    }
?>