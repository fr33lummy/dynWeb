<?php
class Validator
{
    public function isValidLength($key, $min = 4)
    {
        global $statusMessage;
        $valid = true;
        if (isset($_POST[$key])) {
            if (strlen($_POST[$key]) < $min) {
                if($min == 1){
                     $statusMessage[$key] = $key . " mag niet leeg zijn";

                } else {
                    $statusMessage[$key] = $key . " moet " . $min . " tekens lang zijn";
                }
                $valid = false;
            }
        }
        return $valid;
    }

public function isValidPass($key, $min){
     global $statusMessage;

        $valid = $this->isValidLength($key,$min);
        if($valid == true){
            if($key == 'wouter'){
                $valid = true;
            } else {
                $valid = false;
                $statusMessage[$key] = "je hebt een fout passwoord opgegeven";

            }
        } 
        return $valid;
}
    public function isValidUser($key, $min){
        global $statusMessage;

        $valid = $this->isValidLength($key,$min);
        if($valid == true){
            if($key == 'wouter'){
                $valid = true;
            } else {
                $valid = false;
                $statusMessage[$key] = $key . " is geen geregistreerde gebruiker";

            }
        } 
        return $valid;
    }

    public function checkPassword($key, $key2){
       global $statusMessage;
        $valid = true; 
         if (isset($_POST[$key]) & isset($_POST[$key2]) ) {
            if($_POST["passwoord"] == $_POST["passwoord2"]){
                    $valid = true;
            } else {
                    $statusMessage[$key] = "beide passwoorden moeten hetzelfde zijn";
                    $valid = false; 
            }
         }
        return $valid;
    }

    public function isValidEmail($key)
    {
        global $statusMessage;
        $valid = true;
        if (isset($_POST[$key])) {
            $email = filter_var($_POST[$key], FILTER_VALIDATE_EMAIL);
            if (!$email) {
                $statusMessage[$key] = $_POST[$key] . " is geen geldig e-mail adres";
                $valid = false;
            }
        }
        return $valid;
    }

    public function sanitize($input)
    {
        if (is_array($input)) {
            foreach ($input as $key => $element) {
                $input[$key] = sanitize($element);
            }
        } else {
            $input = trim($input);
            $input = htmlentities($input);
        }
        return $input;
    }
}

?>
