
<p>Edit a student:</p>

    <form action="?controller=students&action=update" method="POST">
      <div class="form-group">
        <label for="roll_num">Roll num:</label>
        <input type="text" readonly class="form-control" name="roll_num" value=<?php echo $student->roll_num?>>
      <div class="form-group">
        <label for="first_name">First name:</label>
        <input type="text" class="form-control" name="first_name" value=<?php echo $student->first_name?>>
      </div>
      <div class="form-group">
        <label for="last_name">Last name:</label>
        <input type="text" class="form-control" name="last_name" value=<?php echo $student->last_name?>>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" name="phone" value=<?php echo $student->phone?>>
      </div>
      <div class="form-group">
        <label for="cet_marks">CET Marks:</label>
        <input type="text" class="form-control" name="cet_marks" value=<?php echo $student->cet_marks?>>
      </div>
        <button type="submit" class="btn btn-default">Confirm</button>
    </form> 
