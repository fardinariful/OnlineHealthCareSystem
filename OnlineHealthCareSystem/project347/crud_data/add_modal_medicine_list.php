<!-- Add New -->
<div class="modal fade" id="addnew2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Medicine</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_medicine_list.php">
            <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Medicine:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="medicine" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Dose1:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="dose1" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Dose2:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="dose2" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Dose3:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="dose3" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Duration:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="duration" required>
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