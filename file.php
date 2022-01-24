<?php
    class file
    {
        private $name;

        public function __construct($file)
        {
            $this->name = $file;
        }











        public function getName()
        {
            return $this->name;

        }
        public function writefile($param){
            $masiv = $this->reedfile();
            $Sole=$this->generateSalt();

            $param['password']=md5($Sole . $param['password']);
            $param['sole']=$Sole;

            $masiv[] = $param;
            var_dump($param);
            if (!$this->searchfile($param['login'])){


                file_put_contents($this->name, json_encode($masiv));
            }
            else {

                echo 'Логин занят';


            }


        }

         public function searchfile($param, $password=null ,$sole=null){
          $dy=$this->reedfile();

              foreach ($dy as $item) {

                    $sol=$item['sole'];
                  $solpasword=md5($sol.$password);

                  if (($param == $item['login'] and $password==null) or ($param == $item['login'] and $solpasword==$item['password'])) {
                      return true;

                  }
              }
          }

        public function reedfile(){


          return json_decode(file_get_contents($this->name),true) ;


        }
      private  function generateSalt()
        {
            $salt = '';
            $saltLength = 8; // длина соли

            for($i = 0; $i < $saltLength; $i++) {
                $salt .= chr(mt_rand(33, 126)); // символ из ASCII-table
            }

            return $salt;
        }










    }





?>