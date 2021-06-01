<?php
  class MarksController {
    public function index() {
      // we store all the posts in a variable
      $marks = Marks::all();
      require_once('views/marks/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $mark = Marks::find($_GET['id']);
      require_once('views/marks/show.php');
    }

    public function create(){

      $student_roll_nums = Marks::student_roll_nums();
      $subject_ids = Marks::subject_ids();
      require_once('views/marks/create.php');
    }

    public function insert(){
      
        Marks::create($_POST['student_roll_num'], $_POST['subject_id'], $_POST['marks']);
      
        // require_once('views/marks/displaymsg.php');
        return call('marks', 'index');
        // require_once('views/marks/index.php');
    }

    public function edit(){
        
        if (!isset($_GET['id']))
              return call('pages', 'error');

        $mark = Marks::find($_GET['id']);

        require_once('views/marks/edit.php');
    }

    public function update(){
      
        if (!isset($_POST['id']))
            return call('pages', 'error');

        Marks::update($_POST['id'],$_POST['student_roll_num'],$_POST['subject_id'],$_POST['marks']);

        return call('marks', 'index');
    }

    public function delete() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id']))
          return call('pages', 'error');

        // we use the given id to get the right post
        $mark = Marks::delete($_GET['id']);
        require_once('views/marks/delete.php');
    }


  }
?>