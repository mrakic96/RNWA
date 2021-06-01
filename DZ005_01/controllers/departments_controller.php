<?php
  class DepartmentsController {
    public function index() {
      // we store all the posts in a variable
      $departments = Departments::all();
      require_once('views/departments/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $department = Departments::find($_GET['id']);
      require_once('views/departments/show.php');
    }

     public function create(){

      require_once('views/departments/create.php');
    }

     public function insert(){
      
        Departments::create($_POST['name']);  
      
        // require_once('views/departments/index.php');
        return call('departments', 'index');
    }

    public function edit(){
        
        if (!isset($_GET['id']))
              return call('pages', 'error');

        $department = Departments::find($_GET['id']);

        require_once('views/departments/edit.php');
    }

    public function update(){
      
        if (!isset($_POST['id']))
            return call('pages', 'error');

        Departments::update($_POST['id'],$_POST['name']);

        return call('departments', 'index');
    }

    public function delete() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id']))
          return call('pages', 'error');

        // we use the given id to get the right post
        $department = Departments::delete($_GET['id']);
        require_once('views/departments/delete.php');
    }
  }
?>