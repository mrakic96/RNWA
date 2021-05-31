<?php
  class StudentsController {
    public function index() {
      // we store all the posts in a variable
      $students = Students::all();
      require_once('views/students/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $student = Students::find($_GET['id']);
      require_once('views/students/show.php');
    }

     public function create(){

      require_once('views/students/create.php');
    }

     public function insert(){
      
        Students::create($_POST['first_name'],$_POST['last_name'], $_POST['phone'], $_POST['cet_marks']);  
      
        // require_once('views/departments/index.php');
        return call('students', 'index');
    }

    public function delete() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id']))
          return call('pages', 'error');

        // we use the given id to get the right post
        $student = Students::delete($_GET['id']);
        require_once('views/students/delete.php');
    }


  }
?>