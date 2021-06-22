<?php
  class MarksController {
    public function index() {
		session_start();
		if(isset($_COOKIE['email']) and isset($_COOKIE['pass']) and isset($_SESSION['email'])){
      // we store all the posts in a variable
      $marks = Marks::all();
      require_once('views/marks/index.php');
		}
		else{
			require_once('views/pages/login.php');
		}
    }

    public function show() {
		session_start();
		if(isset($_COOKIE['email']) and isset($_COOKIE['pass']) and isset($_SESSION['email'])){
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $mark = Marks::find($_GET['id']);
      require_once('views/marks/show.php');
		}
		else{
			require_once('views/pages/login.php');
		}
    }

    public function create(){
session_start();
		if(isset($_COOKIE['email']) and isset($_COOKIE['pass']) and isset($_SESSION['email'])){
      $student_roll_nums = Marks::student_roll_nums();
      $subject_ids = Marks::subject_ids();
      require_once('views/marks/create.php');
		}
		else{
			require_once('views/pages/login.php');
		}
    }

    public function insert(){
      session_start();
		if(isset($_COOKIE['email']) and isset($_COOKIE['pass']) and isset($_SESSION['email'])){
        Marks::create($_POST['student_roll_num'], $_POST['subject_id'], $_POST['marks']);
      
        // require_once('views/marks/displaymsg.php');
        return call('marks', 'index');
        // require_once('views/marks/index.php');
		}
		else{
			require_once('views/pages/login.php');
		}
    }

    public function edit(){
    session_start();
	if(isset($_COOKIE['email']) and isset($_COOKIE['pass']) and isset($_SESSION['email'])){
        if (!isset($_GET['id']))
              return call('pages', 'error');

        $mark = Marks::find($_GET['id']);

        require_once('views/marks/edit.php');
		}
		else{
			require_once('views/pages/login.php');
		}
    }

    public function update(){
      session_start();
		if(isset($_COOKIE['email']) and isset($_COOKIE['pass']) and isset($_SESSION['email'])){
        if (!isset($_POST['id']))
            return call('pages', 'error');

        Marks::update($_POST['id'],$_POST['student_roll_num'],$_POST['subject_id'],$_POST['marks']);

        return call('marks', 'index');
		}
		else{
			require_once('views/pages/login.php');
		}
    }

    public function delete() {
		session_start();
		if(isset($_COOKIE['email']) and isset($_COOKIE['pass']) and isset($_SESSION['email'])){
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id']))
          return call('pages', 'error');

        // we use the given id to get the right post
        $mark = Marks::delete($_GET['id']);
        require_once('views/marks/delete.php');
		}
		else{
			require_once('views/pages/login.php');
		}
    }


  }
?>