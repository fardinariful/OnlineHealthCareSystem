<!-- Add New -->
<div class="modal fade" id="addnewst" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add status</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_status.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">BP:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="bp" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">BT:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="bt" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Pulse:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="pulse" required>
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