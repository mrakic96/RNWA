<?php
  class PagesController {
    public function home() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
	public function login() {
      require_once('views/pages/login.php');
    }
	public function validate() {
    $myemail = "admin";
	$mypass = "admin";
	
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass = $_POST['password'];
		if($email == $myemail and $pass == $mypass){
			setcookie('email', $email, time()+60*60*24*7);
			setcookie('pass', $pass, time()+60*60*24*7);
			session_start();
			$_SESSION['email'] = $email;
			return call('pages', 'home');
		} else {
			return call('pages', 'home');
		}
	} else{
		return call('pages', 'home');
	}
    }
	public function logout() {
	$email = "admin";
	$pass = "admin";	
	session_start();
	session_destroy();
	setcookie('email', $email, time()-1);
	setcookie('pass', $pass, time()-1);
    return call('pages', 'login');
    }
  }
?>