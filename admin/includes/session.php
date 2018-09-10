<?php

class Session{

    private $signed_in = false;
    public $user_id;
    public $msg = "";

    //constructor
    function __construct()
    {
        session_start();
        $this->check_the_login();
    }

    // getter :: A method that is public but returns a private variable.
    public function is_signed_in(){
        return $this->signed_in;
    }

    public function login($user){
        $this->user_id = $_SESSION['user_id'] = $user->id;
        $this->signed_in = true;
    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->signed_in = false;
    }

    // check if the use is logged in
    public function check_the_login(){
        if (isset($_SESSION['user_id'])){
            $this->user_id = $_SESSION['user_id'];
            $this->signed_in = true;
        } else {
            unset($this->user_id);
            unset($this->signed_in);
        }
    }
//
//    public static function logout_message(){
//        return "you have been logged out";
//    }
}

$session = new Session();