<p>Here is a list of all departments:</p>

<a href='?controller=departments&action=create'>CREATE NEW DEPARTMENT</a>


<?php foreach($departments as $department) { ?>
  <p>
    <?php echo $department->id ." ".$department->name  ?>
 <a href='?controller=departments&action=show&id=<?php echo $department->id; ?>'>View details</a>
 <a href='?controller=departments&action=delete&id=<?php echo $department->id; ?>'>Delete</a>
  </p>
<?php } ?>