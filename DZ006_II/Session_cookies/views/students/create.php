
<p>Add a new student:</p>


	<form action="?controller=students&action=insert" method="post" >
							
	                        <div class="form-group">
	                            <label for="first_name">F. name:</label>
	               				<input name="first_name" class="form-control">
	                            
	                        </div>
	                        <div class="form-group">
	                            <label for="last_name">L. name:</label>
	               				<input name="last_name" class="form-control">
	                            
	                        </div>
	                        <div class="form-group">
	                            <label for="phone">Phone:</label>
	               				<input name="phone" class="form-control">
	                            
	                        </div>
	                       
	                        <div class="form-group">
	                            <label for="cet_marks">CET Marks:</label>
	               				<input name="cet_marks" class="form-control">
	                           
	                        </div>
	          
	    <input type="submit" class="btn btn-primary" value="Submit">
	 	<a href='?controller=students&action=index' class="btn btn-default">Back to index page</a>
	 </form>
