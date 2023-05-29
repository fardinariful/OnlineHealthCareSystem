<!-- Edit -->
<div class="modal fade" id="edit_medicine_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Medicine</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_medicine_list.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Medicine:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="medicine" value="<?php echo $row['medicine']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Dose1:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="dose1" value="<?php echo $row['dose1']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Dose2:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="dose2" value="<?php echo $row['dose2']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Dose3:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="dose3" value="<?php echo $row['dose3']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Duration:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="duration" value="<?php echo $row['duration']; ?>">
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_medicine_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Medicine</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure?</br> you want to Delete?</p>
				<h2 class="text-center"><?php echo $row['medicine'].' '.$row['dose1'].' '.$row['dose2'].' '.$row['dose3'].' '.$row['duration']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_medicine_list.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>