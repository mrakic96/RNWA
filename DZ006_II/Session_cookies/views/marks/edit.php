
<p>Edit a mark:</p>

    <form action="?controller=marks&action=update" method="POST">
      <div class="form-group">
        <label for="id">Id:</label>
        <input type="text" readonly class="form-control" name="id" value=<?php echo $mark->id?>>
      <div class="form-group">
        <label for="student_roll_num">Student roll num:</label>
        <input type="text" readonly class="form-control" name="student_roll_num" value=<?php echo $mark->student_roll_num?>>
      </div>
      <div class="form-group">
        <label for="subject_id">Subject id:</label>
        <input type="text" readonly class="form-control" name="subject_id" value=<?php echo $mark->subject_id?>>
      </div>
      <div class="form-group">
        <label for="marks">Mark:</label>
        <input type="text" class="form-control" name="marks" value=<?php echo $mark->marks?>>
      </div>
        <button type="submit" class="btn btn-default">Confirm</button>
    </form> 

