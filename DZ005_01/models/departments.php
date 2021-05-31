<?php
  class Departments {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $name;
    public $hod_id ;

    public function __construct($id, $name, $hod_id) {
      $this->id      = $id;
      $this->name  = $name;
      $this->hod_id = $hod_id;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM departments');


      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $department) {
        $list[] = new Departments($department['id'], $department['name'], $department['hod_id']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM departments WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $department = $req->fetch();

      return new Departments($department['id'], $department['name'], $department['hod_id']);
    }

     public static function create($name){
      $db = Db::getInstance();
      $sql = "INSERT INTO departments (id, name, hod_id) values (NULL, '$name', NULL)";
      $db->query($sql);
      // return $sql;
    }

    public static function delete($id) {
      $db = Db::getInstance();
      
      //delete action
      $sql="DELETE FROM departments WHERE id ='$id'";

      //veza izmedju studenta i odjela
      $sql2="UPDATE students SET department_id=NULL WHERE department_id='$id'";
      $db->query($sql2);
    
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