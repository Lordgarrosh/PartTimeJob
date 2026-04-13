<?php
require_once __DIR__ . "/../Users/Users.php";
require_once __DIR__ . "/../Model/UsersManager.php";
class Authentication extends Users {
    private $uservalidation = "Not Validated";
    private $messageReport = "";
    private $userPage = "/Authentication/register";
    private $userRole = "";
    public function getUserValidation () {
        return $this->uservalidation;
    }
    public function getMessageReport () {
        return $this->messageReport;
    }
    public function getUserPage () {
        return $this->userPage;
    }

    
    public function setUserValidation ($uservalidation) {
        $this->uservalidation = $uservalidation;
    }
    public function setMessageReport ($messageReport) {
        $this->messageReport = $messageReport;
    }

    public function setUserPage ($userPage) {
        $this->userPage = $userPage;
    }


        public function registerValidation() {
        
        $this->setRole(isset($_GET['r']) ? $_GET['r'] : 'null');
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
            
            if (empty($_POST['fname']) || empty($_POST['mname']) || empty($_POST) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['number']) || empty($_FILES['profPic'])) {
            
            $this->setMessageReport("PLease fill up all the data");
          
            }
            else {
                if (isset($_POST['fname']) || isset($_POST['mname']) || isset($_POST) || isset($_POST['lname']) || isset($_POST['email']) || isset($_POST['password']) ||isset($_POST['number']) || isset($_FILES['profPic']))  {
                   
                         $fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
	$img_name = $_FILES['profPic']['name'];       //getting image name
			$img_typ = $_FILES['profPic']['type'];            //getting image name
			$tmp_name = $_FILES['profPic']['tmp_name'];   //set temporary name
			$img_explode = explode('.', $img_name);   // let's Explode Image
			$img_extension = end($img_explode);
			$extensions = ['png', 'jpeg', 'jpg'];       //these are some valid extensions
      $time = time();
      $profPic = $time . $img_name;

$number = $_POST['number'];
if (move_uploaded_file($tmp_name,__DIR__ . "/../ProfilePic/" . $profPic)) {
      $otp =  mt_rand(111111,999999);
$userRegistration = UsersManager::userRegister($email, $password, $fname, $mname, $lname, $profPic, $this->getRole());
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $this->setMessageReport("PLease fill up all the data");
          
    }
        else if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)) {
              $this->setMessageReport("Password must contains 1 upper and lowercase with 1 digit and special character");
          
        }
        else if ($userRegistration->searchUser()) {
             $this->setMessageReport("Email already exist");
          
        }
        else if(!in_array($img_extension, $extensions)) {
            $this->setMessageReport("Wrong image extension please try again");
        }
        else {
          $isRegistered =   $userRegistration->createUser();
          $this->setUserValidation(($isRegistered) ? "Validated" : "Not Validated");
            $this->setMessageReport("Wrong image extension please try again");
          $this->setUserPage(($this->getRole() == "Employee") ? "/". $this->getRole() . "/JobFinding" :"/". $this->getRole() . "/NotVerified");
          ?> <script>alert("test are <?php echo $this->getUserPage() ?>");</script>  <?php
           $_SESSION['email'] = $email;
           $_SESSION['password'] = $password;
        }
}
else {
      $this->setMessageReport("Registration Failed Successfully");
}
                }
            }
        }
        return ['userRole' => $this->getRole(), 'userPage' => $this->getUserPage(), 'userValidation' => $this->getUserValidation(), 'messageReport' => $this->getMessageReport()];
    }

}

?>