<?php 
include 'init.php'; 
if(!$users->isLoggedIn()) {
	header("Location: login.php");	
}
include('inc/header.php');
$user = $users->getUserInfo();
?>
<title>Helpdesk</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
<script src="js/general.js"></script>
<script src="js/department.js"></script>
<link rel="stylesheet" href="css/style.css" />
<?php include('inc/container.php');?>
<div class="container" style="font-size: 20px; width: auto;">	
	<div class="row home-sections" style="font-size: 20px;">
	<?php include('menus.php'); ?>		
	</div> 
	
	<div class="panel-heading" style="font-size: 20px;">
		<div class="row">
			<div class="col-md-10">
				<h3 class="panel-title"></h3>
			</div>
			<div class="col-md-2" align="right">
				<button type="button" name="add" id="addDepartment" class="btn btn-success btn-xs" style="font-size: 20px;">Add New</button>
			</div>
		</div>
	</div>
			
	<table id="listDepartment" class="table table-bordered table-striped" style="font-size: 20px; color: white;">
		<thead>
			<tr style="background-color: rgba(23, 23, 26, 0.884);">
				<th>S/N</th>
				<th>Department</th>					
				<th>Status</th>
				<th></th>
				<th></th>									
			</tr>
		</thead>
	</table>
	
	<div id="departmentModal" class="modal fade" style="font-size: 20px;">
		<div class="modal-dialog">
			<form method="post" id="departmentForm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Add Department</h4>
					</div>
					<div class="modal-body" style="font-size: 20px;">
						<div class="form-group"
							<label for="department" class="control-label">Department</label>
							<input type="text" class="form-control" id="department" name="department" placeholder="department" required>			
						</div>
						<div class="form-group" style="font-size: 20px;">
							<label for="status" class="control-label">Status</label>				
							<select id="status" name="status" class="form-control">
							<option value="1">Enable</option>				
							<option value="0">Disable</option>	
							</select>						
						</div>						
						
					</div>
					<div class="modal-footer" style="font-size: 20px;">
						<input type="hidden" name="departmentId" id="departmentId" />
						<input type="hidden" name="action" id="action" value="" />
						<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
						<button type="button" class="btn btn-default" data-dismiss="modal" style="font-size: 20px;">Close</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>	
<?php include('inc/footer.php');?>