<!-- Add New -->
<div class="modal fade" id="appo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add appoinment</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_appo.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">D_name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="doctors_name" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">A_date:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="appoinment_date" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">A_time:</label>
					</div>
					<div class="col-sm-10">
						<input type="time" class="form-control" name="appoinment_time" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">P_name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="patients_name" required>
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