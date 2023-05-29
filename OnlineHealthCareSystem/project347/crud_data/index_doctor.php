<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<div class="container ">
<ul class="pager font-weight-bold text-monospace">
  <li class="previous "><a href="http://localhost/onlinehealth/view_admin_home_page.php">Previous</a></li>
</ul></div>
	<title>Doctors List</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center"><b>Doctors List</b></h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
		<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Number</th>
						<th>Date</th>
						<th>Age</th>
						<th>Address</th>
                        <th>Specialist</th>
                        <th>qualification</th>
						<th>Password</th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM onlinehealthcare_form_doctor";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['name']."</td>
									<td>".$row['email']."</td>
									<td>".$row['number']."</td>
									<td>".$row['date']."</td>
									<td>".$row['age']."</td>
									<td>".$row['address']."</td>
                                    <td>".$row['specialist']."</td>
                                    <td>".$row['qualification']."</td>
									<td>".$row['password']."</td>
									
								 	<td>
								 	<a href='#edit_doctor_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
									<a href='#delete_doctor_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
								
								 </td>
								</tr>";
								 include('edit_delete_doctor_modal.php');
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_doctor_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('datatable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
<style>
	  body  {
          width: 100%;
           background-color:skyblue;
           background-position: center;
		   background:center;
    background-size: cover;
    height: 109vh;}
.PP{
    
	text-align: center;
}
body{ 
	background-color: skyblue;
}
</style>
</html>