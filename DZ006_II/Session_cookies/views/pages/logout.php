<?php
	session_start();
	session_destroy();
	setcookie('email', $email, time()-1);
	setcookie('pass', $pass, time()-1);
	
?>