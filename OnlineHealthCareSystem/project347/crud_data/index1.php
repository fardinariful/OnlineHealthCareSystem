<?php
	session_start();
?>
<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
<title> Prescription </title>
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
	<h1 class="page-header text-center"><b>Prescription</b></h1>
	<div class="box-container container">
<div class="box">
   
<p>Name:Krittika Roy <br> NID:56178300000000000 <br> Phone Number:01700000000</p>
</div>
</div>


<div class="container">
	<h1 class="page-header text-center">patients Information</h1>
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
			
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Email</th>
						<th>Date</th>
						
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql1 = "SELECT * FROM patient";

							//use for MySQLi-OOP
							$query = $conn->query($sql1);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['email']."</td>
									<td>".$row['date']."</td>
									
									
								</tr>";
								
							}
						

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<h1 class="page-header text-center">Status</h1>
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
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>BP</th>
						<th>BT</th>
						<th>Pulse</th>
						
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql1 = "SELECT * FROM add_status";

							//use for MySQLi-OOP
							$query = $conn->query($sql1);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['bp']."</td>
									<td>".$row['bt']."</td>
									<td>".$row['pulse']."</td>
									
									
								</tr>";
								
							}
						

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<h1 class="page-header text-center">Complain</h1>
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
			
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Complain</th>
						
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql1 = "SELECT * FROM add_complain";

							//use for MySQLi-OOP
							$query = $conn->query($sql1);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['complain']."</td>
									
									
								</tr>";
								
							}
						

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</div>





<div class="container">
	<h1 class="page-header text-center">Medicine</h1>
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
			<div class="height10">
			</div>
			<div class="row">
			
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Medicine</th>
						<th>Dose1</th>
						<th>Dose2</th>
						<th>Dose3</th>
						<th>Duration</th>
					
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM medicine_list";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['medicine']."</td>
									<td>".$row['dose1']."</td>
									<td>".$row['dose2']."</td>
									<td>".$row['dose3']."</td>
									<td>".$row['duration']."</td>
									
								</tr>";
								
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<h1 class="page-header text-center">Instruction</h1>
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
			<div class="height10">
			</div>
			<div class="row">
			
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Instruction</th>
						
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM add_instruction";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['instruction']."</td>
									
								
								</tr>";
								
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<h1 class="page-header text-center">Tests</h1>
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
			
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Test</th>
						
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql1 = "SELECT * FROM add_test";

							//use for MySQLi-OOP
							$query = $conn->query($sql1);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['test']."</td>
									
									
									
								</tr>";
								
							}
						

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>


<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
</body>
<style>
	body{
		width: 100%;
		height: 2000px;
	}
.PP{
	text-align: center;
}

 .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:2rem;
}

 .box-container .box{
   text-align: center;
   padding:5rem;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
}

 .box-container .box img{
   margin:2px;
   height: 15rem;
}



 .box-container .box p{
   font-size: 1.2rem;
   color:var(--light-color);
   line-height: 2;
}
        </style>
      
        </html>
</style>
</html>
