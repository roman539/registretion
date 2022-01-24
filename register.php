<?php

	class register
    {
        public $logine;
        public $password;
        public $password1;
        public $mail;
        public $name3;

        public function __construct($logine,$password,$password1,$mail,$name3)
        {
            $this->logine = $logine;
            $this->password=$password;
            $this->password1=$password1;
            $this->mail=$mail;
            $this->name3=$name3;
        }

        public function checkLogin()
        {  $logine1=$this->delspase($this->logine);
            if ($logine1== null or strlen($logine1) < 6) {

                return false ;
            }
            else {


                return true;

            }
        }
        public function checkPass()
        {
            $password3=$this->delspase($this->password);
            if (!preg_match('#([a-z_-])#',$password3) or !preg_match('#[0-9]#',$password3) or strlen($password3) < 6 ) {
                return false;
            }
            else {
                return true;
            }
        }
        public function comparisonPass()
        {   $password3=$this->delspase($this->password);
            $password4=$this->delspase($this->password1);
            if ($password3 != $password4) {
                return false;
            }
            else {
                return true;
            }
        }
        public function mail()
        {   $mail=$this->delspase($this->mail);
            $res = preg_match_all('#@#',  $mail);

            if ($res!=1) {
                return  false;
            }
            else {
                return true;
            }
        }
        public function Name()
        {   $name1=$this->delspase($this->name3);
            $res1 = preg_match_all('#[A-Z]#',  $name1);
            if ($res1!=0 or strlen($name1)<1) {
                return false;
            }
            return true;
        }
        public function delspase($tt)
        {   $probeldel=preg_replace('/\s+/','',$tt);
            return $probeldel;
        }

    }

	?>





