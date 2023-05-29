<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_onlinehealthcare_form.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" required>
					</div>
				</div>
				<div class="col-sm-2">
						<label class="control-label modal-label">Number:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="number" required>
					</div>
				</div>
				<div class="col-sm-2">
						<label class="control-label modal-label">Age:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="age" required>
					</div>
				</div>
				<div class="col-sm-2">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" required>
					</div>
				</div>
						
				<div class="col-sm-2">
						<label class="control-label modal-label">Password:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="password" required>
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div> 

        </div>
    </div>
</div>