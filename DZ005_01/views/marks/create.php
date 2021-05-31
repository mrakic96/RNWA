
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create mark</title>

</head>
<body>
<p>Create a new mark:</p>


	<form action="?controller=marks&action=insert" method="post" >
							<!-- <div class="form-group">
	                            <label for="id">ID:</label>
	               				<input name="id" class="form-control">
	                           
	                        </div> -->
	                        <div class="form-group">
	                            <label for="student_roll_num">Student roll num:</label>
	                            <select name="student_roll_num">
	                            	<?php foreach($student_roll_nums as $student_roll_num) { ?>
	                            		<option value="<?php echo $student_roll_num[0];?>"><?php echo $student_roll_num[0] ?></option>
	                            	<?php } ?>
	                            </select>
	                         
	                        </div>
	                        <div class="form-group" >
	                            <label for="subject_id">Subject id:</label>
	                            <select name="subject_id">
	                            	<?php foreach($subject_ids as $subject_id) { ?>
	                            		<option value="<?php echo $subject_id[0];?>"><?php echo $subject_id[0] ?></option>
	                            	<?php } ?>
	                            </select>
	                        </div>
	                        <div class="form-group">
	                            <label for="marks">Mark:</label>
	               				<input name="marks" class="form-control">
	                           
	                        </div>
	          
	    <input type="submit" class="btn btn-primary" value="Submit">
	 	<a href='?controller=marks&action=index' class="btn btn-default">Back to index page</a>
	 </form>
</body>
	 </html>