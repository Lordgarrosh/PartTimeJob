<?php
require_once 'Controller.php';
class EmployerController extends Controller {
    public function ApplicantSearchPage () {
        $this->view('/Employer/ApplicantSearch');
    }

    public function NotVerifiedPage () {
        $this->view('/Employer/NotVerified'); 
    }
}

?>