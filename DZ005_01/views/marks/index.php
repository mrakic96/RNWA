<p>Here is a list of all marks:</p>

<a href='?controller=marks&action=create'>CREATE NEW MARK</a>

<?php foreach($marks as $mark) { ?>
  <p>
    <?php echo $mark->student_roll_num; ?>
    <?php echo $mark->marks; ?>
    <a href='?controller=marks&action=show&id=<?php echo $mark->id; ?>'>See content</a>
    <a href='?controller=marks&action=delete&id=<?php echo $mark->id; ?>'>Delete</a>
  </p>
<?php } ?>