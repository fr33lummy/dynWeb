<?php
require_once('validation.php');
require_once('user.php');
require_once('User_Mapper.php');

class Controller
{
    private $_safeParameters = Array();
    private $_action = 'home';
    private $_object;
    private $_statusMessage;
    private $_validator;
    private $_users;
    private $_userMapper;

    public function __construct()
    {
        $this->_validator = new Validator();
        $this->_userMapper = new User_Mapper();

        $this->doSafeGet();
        $this->doSafePost();

        if (isset($this->_safeParameters['action'])) {
            $this->_action = $this->_safeParameters['action'];
        }
    }

    private function doSafeGet()
    {
        foreach ($_GET as $key => $value) {
            $this->_safeParameters[$key] = $this->_validator->sanitize($value);
        }
    }

    private function doSafePost()
    {
        foreach ($_POST as $key => $value) {
            $this->_safeParameters[$key] = $this->_validator->sanitize($value);
        }
    }

    public function run()
    {
        $nextPage;
        if ($this->_action == 'registreer') {
            $nextPage = $this->register();
        } elseif ($this->_action == 'new') {
            $nextPage = $this->newRegistration();
        } elseif ($this->_action == 'home') {
            $nextPage = $this->home();
        } elseif ($this->_action = 'login'){
			$nextPage= $this->login();
		} elseif($this->action='logout'){
			$nextPage=$this->logout();             
		} else 
            $nextPage = 'home.php';
        require_once($nextPage);

    }

    private function register()
    {

        $naam = $this->_safeParameters['usernaam'];
        $passwoord =  $this->_safeParameters['passwoord'];
        $passwoord2 =  $this->_safeParameters['passwoord2'];
        $voornaam =  $this->_safeParameters['voornaam'];
        $email =  $this->_safeParameters['email'];
        $achternaam =  $this->_safeParameters['achternaam'];

        $this->_object = new User(1, $naam,$voornaam,$passwoord);



        if ($this->_validator->isValidLength('usernaam',4)
            & $this->_validator->isValidLength('passwoord',4) & $this->_validator->isValidEmail('email') 
            & $this->_validator->checkPassword('passwoord','passwoord2') & $this->_validator->isValidLength('voornaam',1)
            & $this->_validator->isValidLength('achternaam',1)
        ) {
           // $this->_userMapper->add($this->_object);

            //$this->users = $this->_userMapper->getAll();
            return 'succes.php';
        } else {
            global $statusMessage;
            $this->_statusMessage = $statusMessage;
            return 'register.php';
        }
    }

    private function newRegistration()
    {
        //$this->_object = new User("","","","");
        return 'register.php';
    }

    private function home()
    {
        return 'home.php';
    }
    
    private function login(){
		$naam = $this->_safeParameters['usernaam'];
        $passwoord =  $this->_safeParameters['passwoord'];

        if ($this->_validator->isValidLength('usernaam',4)
            & $this->_validator->isValidLength('passwoord',4)
        ) {
			
            //$this->_userMapper->isValidUser($this->_object);
            //eerste if vervangen door de tweede
            $_SESSION['usernaam'] = $naam;
			return 'succes.php';
        } else {
            global $statusMessage;

            $this->_statusMessage = $statusMessage;
            return 'home.php';
        }
	}

    private function logout(){
        session_destroy();
        return  'home.php';
    }
}
?>



