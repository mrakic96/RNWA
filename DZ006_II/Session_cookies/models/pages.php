<?php
  class Pages {

    public $email;
    public $pass;
	
	public function __construct($email, $pass) {
      $this->email  = $email;
      $this->pass  = $pass;
      
    }
	public static function validate($email, $pass){
      
    }
?>
