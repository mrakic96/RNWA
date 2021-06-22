
<p>Create a new department:</p>


	<form action="?controller=departments&action=insert" method="post" >
							
	                        <div class="form-group">
	                            <label for="name">Name of department:</label>
	               				<input name="name" type="text" class="form-control">
	                           
	                        </div>
	          
	    <input type="submit" class="btn btn-primary" value="Submit">
	 	<a href='?controller=departments&action=index' class="btn btn-default">Back to index page</a>
	 </form>
