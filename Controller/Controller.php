<?php  

// require_once __DIR__ . "/../Model/Users.php";
// require_once __DIR__ . "/../Model/Database.php";
class Controller {
    //redirect the user if the user 
    protected function view(string $viewPath, array $data = []) {
        extract($data);
        // echo "<script>alert('dd')</script>";
        require __DIR__ . '/../View/' . $viewPath  . '.php';
    }

    protected function model(string $modelName) 
    {
        $modelName = trim($modelName, '/');
        require_once __DIR__ . '/../Model/' . $modelName . '.php'; 
        return new $modelName;  
    }

    protected function redirect($url,  array $params = []) {
        extract($params);
        $url = trim($url, '/');
      
        header("Location: $url");
        
    }





    public function startSession() {
        if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
    }


}

?>