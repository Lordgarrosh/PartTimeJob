<?php
require_once 'Controller.php';
class EmployeeController extends Controller {
    public function JobFindingPage () {
        $this->view('/Employee/JobFinding');
    }
}

?>