<?php
class common {
    static function isLoggedIn(){
        $check = array("id", "username", "fname", "lname");
        return (session::check($check)) ? true : false;
    }

    static function dd($var) {
        echo "<pre>";
        die(var_dump($var));
        echo "</pre>";
    }
}