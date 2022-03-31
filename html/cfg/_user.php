<?php
class shp_user {
    public $username;
    public $session;
    public $email;
    public function setUsername($username){
        $this->username = $username;
    }
    public function setUserSession($session){
        $this->session = $session;
    }
    public function setUserEmail($email){
        $this->email = $email;
    }
}
?>