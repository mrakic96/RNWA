<?php
  class Students {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $roll_num;
    public $first_name;
    public $last_name;
    public $department_id;
    public $phone;
    public $admission_date;
    public $cet_marks;


    public function __construct($roll_num, $first_name, $last_name, $department_id, $phone, $admission_date, $cet_marks) {
      $this->roll_num  = $roll_num;
      $this->first_name  = $first_name;
      $this->last_name = $last_name;
      $this->department_id = $department_id;
      $this->phone = $phone;
      $this->admission_date = $admission_date;
      $this->cet_marks = $cet_marks;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM students');


      // we create a list of Student objects from the database results
      foreach($req->fetchAll() as $students) {
        $list[] = new Students($students['roll_num'], $students['first_name'], $students['last_name'], $students['department_id'], $students['phone'], $students['admission_date'], $students['cet_marks']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM students WHERE roll_num = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $student = $req->fetch();

      return new Students($student['roll_num'], $student['first_name'], $student['last_name'], $student['department_id'], $student['phone'], $student['admission_date'], $student['cet_marks']);
    }

    public static function create($first_name, $last_name, $phone, $cet_marks){
      $db = Db::getInstance();
      $cet_marks = intval($cet_marks);

      $sql = "INSERT INTO students (roll_num, first_name, last_name, department_id, phone, admission_date, cet_marks) values (NULL, '$first_name', '$last_name', NULL, '$phone', now(), $cet_marks)";
      $db->query($sql);
      // return $sql;
    }

    public static function update($roll_num, $first_name, $last_name, $phone, $cet_marks) {
      $db = Db::getInstance();
      $roll_num = intval($roll_num);
      $cet_marks = intval($cet_marks);
      $sql="UPDATE students SET first_name = '$first_name', last_name='$last_name', phone = '$phone', cet_marks = $cet_marks
       WHERE roll_num = '$roll_num'";
      $db->query($sql);
    }

    public static function delete($id) {
      $db = Db::getInstance();
      
      //delete action
      $sql="DELETE FROM students WHERE roll_num ='$id'";
    
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