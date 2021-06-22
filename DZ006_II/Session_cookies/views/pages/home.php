<p>Pocetna stranica projekta (MVC Zadaca)!<p>

<p>Na izborniku imamo 3 razlicita modela sa CRUD operacijama.</p>

<?php
	if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
		session_start();
		echo "Pozdrav " . $_SESSION['email'];
		echo "<a href='?controller=pages&action=logout'>Logout</a>";
	}
?>