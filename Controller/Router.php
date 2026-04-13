<?php   
require __DIR__ . "/../Controller/RouteHandler.php";
require __DIR__ . "/../Controller/AuthController.php";
require __DIR__ . "/../Controller/EmployeeController.php";
require __DIR__ . "/../Controller/EmployerController.php";
        $router = new RouteHandler();
        

    RouteHandler::get('/', __DIR__ . '/../View/landingpage.php' );
    RouteHandler::get('/login', [new AuthController(), 'loginForm']);
    RouteHandler::get('/register', [new AuthController(), 'registerForm']);
    RouteHandler::get('/Employer/ApplicantSearch', [new EmployerController(), 'ApplicantSearchPage']);
    RouteHandler::get('/Employer/NotVerified', [new EmployerController(), 'NotVerifiedPage']);
    RouteHandler::get('/Employee/JobFinding', [new EmployeeController(), 'JobFindingPage']);
    RouteHandler::post('/register', [new AuthController(), 'registerData']);
    // RouteHandler::set('/authOTP',)
    // RouteHandler::set("/login", )
   $router->dispatch($_GET['url'] ?? trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), '/'));
?>