<?php   
require __DIR__ . "/../Controller/RouteHandler.php";
require __DIR__ . "/../Controller/AuthController.php";

        $router = new RouteHandler();
        

    RouteHandler::get('/', __DIR__ . '/../View/landingpage.php' );

    // RouteHandler::set('/authOTP',)
    // RouteHandler::set("/login", )
   $router->dispatch($_GET['url'] ?? trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), '/'));

?>