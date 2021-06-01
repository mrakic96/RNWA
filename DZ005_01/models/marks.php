<?php
  class Marks {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $student_roll_num;
    public $subject_id;
    public $marks;

    public function __construct($id, $student_roll_num, $subject_id, $marks) {
      $this->id      = $id;
      $this->student_roll_num  = $student_roll_num;
      $this->subject_id = $subject_id;
      $this->marks = $marks;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM marks');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $mark) {
        $list[] = new Marks($mark['id'], $mark['student_roll_num'], $mark['subject_id'], $mark['marks']);
      }

      return $list;
    }

    public static function student_roll_nums(){
      $db = Db::getInstance();
      // we make sure $id is an integer
      $roll_num = $db->query('SELECT roll_num FROM students');
      // the query was prepared, now we replace :id with our actual $id value

      $list = array();
      // foreach adding to list
      foreach($roll_num->fetchAll() as $num) {
        $list[] = $num;
      }
      return $list;
    }

    public static function subject_ids(){
      $db = Db::getInstance();
      // we make sure $id is an integer
      $subject_ids = $db->query('SELECT id FROM subjects');
      // the query was prepared, now we replace :id with our actual $id value

      $list = array();
      foreach($subject_ids->fetchAll() as $id) {
        $list[] = $id;
      }
      
      return $list;

    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM marks WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $mark = $req->fetch();

      return new Marks($mark['id'], $mark['student_roll_num'], $mark['subject_id'], $mark['marks']);
    }

    public static function create($student_roll_num, $subject_id, $marks){
      $db = Db::getInstance();
      $student_roll_num = intval($student_roll_num);
      $subject_id = intval($subject_id);
      $marks = intval($marks); 
      // $id = intval($id); 
      $sql = "INSERT INTO marks (id, student_roll_num, subject_id, marks) values (NULL, $student_roll_num, $subject_id, $marks)";
      $db->query($sql);
      // return $sql;
    }

    public static function update($id, $student_roll_num, $subject_id, $marks) {
      $db = Db::getInstance();
      $id = intval($id);
      $student_roll_num = intval($student_roll_num);
      $subject_id = intval($subject_id);
      $sql="UPDATE marks SET student_roll_num = '$student_roll_num', subject_id='$subject_id', marks = '$marks' WHERE id = '$id'";
      $db->query($sql);
    }
    
    public static function delete($id) {
      $db = Db::getInstance();
      
      //delete action
      $sql="DELETE FROM marks WHERE id ='$id'";
    
      if ($db->query($sql) == TRUE){
      
          $rez="USPJESNO brisanje";
        }
          else {
           $rez="NESPJESNO brisanje";
          }
          return $rez;
    }

  }
?>