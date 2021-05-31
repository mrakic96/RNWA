<p>Here is a list of all Students:</p>
<a href='?controller=students&action=create'>CREATE A NEW STUDENT</a>


<?php foreach($students as $student) { ?>
  <p>
    <?php echo $student->first_name ." ".$student->last_name  ?>
    <a href='?controller=students&action=show&id=<?php echo $student->roll_num; ?>'>View Details</a>
    <a href='?controller=students&action=delete&id=<?php echo $student->roll_num; ?>'>Delete</a>
  </p>
<?php } ?>