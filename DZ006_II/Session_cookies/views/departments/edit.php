
<p>Edit a department:</p>

    <form action="?controller=departments&action=update" method="POST">
      <div class="form-group">
        <label for="id">ID:</label>
        <input type="text" readonly class="form-control" name="id" value=<?php echo $department->id?>>
      <div class="form-group">
        <label for="name">First name:</label>
        <input type="text" class="form-control" name="name" value=<?php echo $department->name?>>
      </div>
      
        <button type="submit" class="btn btn-default">Confirm</button>
    </form> 

