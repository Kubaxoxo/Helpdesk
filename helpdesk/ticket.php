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
<script src="js/tickets.js"></script>
<link rel="stylesheet" href="css/style.css" />
<?php include('inc/container.php');?>
<div class="container" style="font-size: 20px; width: auto;">	
	<div class="row home-sections" style="font-size: 20px;"></div>
		
	<?php include('menus.php'); ?>		
	</div> 		
		<div class="panel-heading" style="font-size: 20px;">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right" style="font-size: 20px;">
					<button type="button" name="add" id="createTicket" class="btn btn-success btn-xs" style="font-size: 20px;">Create Ticket</button>
				</div>
			</div>
		</div>
		<table id="listTickets" class="table table-bordered table-striped" style="font-size: 20px; color: white;">
			<thead>
				<tr style="background-color: rgba(23, 23, 26, 0.884);">
					<th>S/N</th>
					<th>Ticket ID</th>
					<th>Subject</th>
					<th>Department</th>
					<th>Created By</th>					
					<th>Created</th>	
					<th>Status</th>
					<th></th>
					<th></th>
					<th></th>					
				</tr>
			</thead>
		</table>
	</div>
	<?php include('add_ticket_model.php'); ?>
</div>	
<?php include('inc/footer.php');?>