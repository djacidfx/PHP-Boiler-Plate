<?php
class Router {
    private $routes;

    public function __construct($routes) {
        $this->routes = $routes;
    }

    public function resolve() {
        $uri = $_SERVER['REQUEST_URI'];

        if (isset($this->routes[$uri])) {
            require_once $this->routes[$uri]; 
        } else {
            // Handle 404 error
            http_response_code(404);
            require_once 'views/404.php'; 
        }
    }
}
