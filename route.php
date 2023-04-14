<?php
class Route {
    private static function getURI() : array
    {
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

        return explode('/', $url);
    }

    private static function processURI() : array {
        $controllerPart = self::getURI()[0] ?? '';
        $methodPart = self::getURI()[1] ?? '';
        $numParts = count(self::getURI());
        $argsPart = [];
        for ($i = 2; $i < $numParts; $i++) {
            $argsPart[] = self::getURI()[$i] ?? '';
        }

        $controller = !empty($controllerPart) ?
        $controllerPart.'Controller' :
        'homeController';

        $method = !empty($methodPart) ?
            $methodPart :
            'index';

        $args = !empty($argsPart) ?
            $argsPart :
            [];

        return [
            'controller' => $controller,
            'method' => $method,
            'args' => $args
        ];
    }
    
    public static function contentToRender() : void {

        $uri = self::processURI();

        if (class_exists($uri['controller'])) {
            $controller = $uri['controller'];
            $method = $uri['method'];
            $args = $uri['args'];

            if(isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
                $args ? (new $controller)->{$method}(...$args) :
                (new $controller)->{$method}();
            } 
            else {
                if($controller == "userController" && in_array($method, ["auth"])){
                    $args ? (new $controller)->{$method}(...$args) :
                    (new $controller)->{$method}();
                }else{
                    $user = new userController();
                    $user->index();
                }
            }
        }
    }
}