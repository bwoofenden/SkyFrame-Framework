<?php
    /**
     * SkyFrame Router Object
     * 
     * Grabs requested url and redirects to desired page from routes.php
     * 
     * @package     SkyFrame
     * @author      Brandon Woofenden
     */
    Class Router {
        function __construct() {
            
            // Gets requested URL from server
            $request = $_SERVER['REQUEST_URI'];
            
            // gets the routes file for (re)routing
            include(APP . 'config' . DS . 'Routes' . EXT);
            
            // removes '/' from url for easier (re)routing
            $request = str_replace('/', '', $request);
            
            // checks if requested route is in route array
            if (array_key_exists($request, $routes)) {
                $action = explode('#', $routes[$request]);
                if (empty($request)) {
                    $request = 'home';
                }
                $file = APP . 'controllers' . DS . $request . DS . $action[1] . EXT;
                
                require($file);
                $class = $action[1];
                $controller = new $class();
                $controller->index();
            }
        }
    }
?>