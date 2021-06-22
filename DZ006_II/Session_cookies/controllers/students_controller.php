<?php
  class StudentsController {
    public function index() {
	
	if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
      // we store all the posts in a variable
      $students = Students::all();
      require_once('views/students/index.php');
	}
	else{
		require_once('views/pages/login.php');
	}
    }

    public function show() {
		
		if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $student = Students::find($_GET['id']);
      require_once('views/students/show.php');
		}
		else{
		require_once('views/pages/login.php');
	}
		
    }

     public function create(){
if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
      require_once('views/students/create.php');
}
else{
		require_once('views/pages/login.php');
	}
    }

     public function insert(){
      if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
        Students::create($_POST['first_name'],$_POST['last_name'], $_POST['phone'], $_POST['cet_marks']);  
      
        // require_once('views/departments/index.php');
        return call('students', 'index');
	  }
	  else{
		require_once('views/pages/login.php');
	}
    }

    public function edit(){
        if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
        if (!isset($_GET['roll_num']))
              return call('pages', 'error');

        $student = Students::find($_GET['roll_num']);

        require_once('views/students/edit.php');
		}
		else{
		require_once('views/pages/login.php');
	}
    }

    public function update(){
      if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
        if (!isset($_POST['roll_num']))
            return call('pages', 'error');

        Students::update($_POST['roll_num'],$_POST['first_name'],$_POST['last_name'],$_POST['phone'],$_POST['cet_marks']);

        return call('students', 'index');
	  }
	  else{
		require_once('views/pages/login.php');
	}
    }


    public function delete() {
		if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id']))
          return call('pages', 'error');

        // we use the given id to get the right post
        $student = Students::delete($_GET['id']);
        require_once('views/students/delete.php');
		}
		else{
		require_once('views/pages/login.php');
	}
    }


  }
?>