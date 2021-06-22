<?php
  class DepartmentsController {
    public function index() {
	session_start();
	if(isset($_SESSION['email'])){
      // we store all the posts in a variable
      $departments = Departments::all();
      require_once('views/departments/index.php');
	}
	else{
		require_once('views/pages/login.php');
	}
    }

    public function show() {
	session_start();
	if(isset($_SESSION['email'])){
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $department = Departments::find($_GET['id']);
      require_once('views/departments/show.php');
    }
	else{
		require_once('views/pages/login.php');
	}
	}

     public function create(){
session_start();
	if(isset($_SESSION['email'])){
      require_once('views/departments/create.php');
    }
	else{
		require_once('views/pages/login.php');
	}
	 }
     public function insert(){
      session_start();
	if(isset($_SESSION['email'])){
        Departments::create($_POST['name']);  
      
        // require_once('views/departments/index.php');
        return call('departments', 'index');
	}
	else{
		require_once('views/pages/login.php');
	}
    }

    public function edit(){
        session_start();
	if(isset($_SESSION['email'])){
        if (!isset($_GET['id']))
              return call('pages', 'error');

        $department = Departments::find($_GET['id']);

        require_once('views/departments/edit.php');
	}
	else{
		require_once('views/pages/login.php');
	}
    }

    public function update(){
      session_start();
	if(isset($_SESSION['email'])){
        if (!isset($_POST['id']))
            return call('pages', 'error');

        Departments::update($_POST['id'],$_POST['name']);

        return call('departments', 'index');
	}
	else{
		require_once('views/pages/login.php');
	}
    }

    public function delete() {
		session_start();
	if(isset($_SESSION['email'])){
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id']))
          return call('pages', 'error');

        // we use the given id to get the right post
        $department = Departments::delete($_GET['id']);
        require_once('views/departments/delete.php');
	}
	else{
		require_once('views/pages/login.php');
	}
    }
  }
?>