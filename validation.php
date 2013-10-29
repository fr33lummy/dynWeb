<?php
class Validator
{
    public function isValidLength($key, $min = 1)
    {
        global $statusMessage;
        $valid = true;
        if (isset($_POST[$key])) {
            if (strlen($_POST[$key]) < $min) {
                $statusMessage[$key] = $key . " is minstens " . $min . " lang";
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
                $statusMessage[$key] = $_POST[$key] . " is niet geldig";
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
