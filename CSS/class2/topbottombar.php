<?php include 'includes/header.php';

if(isset($_POST['card'])){
	$dc->insertintocard($_POST);
	echo "<script>alert('Content Inserted Successfully.')</script>";
}

if(isset($_GET['id'])){
	$dc->deletecard($_GET['id']);
}

?>

<div class="content-page">
	<div class="content">

		<!-- Start Content-->
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
								<li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
								<li class="breadcrumb-item active">Datatable</li>
							</ol>
						</div>
						<h4 class="page-title">Datatable</h4>
					</div>
				</div>
			</div>     
			<!-- end page title --> 
			<div class="row">
				<div class="col-md-6">
					<div class="card-box">
						<h4 class="header-title mb-4">Card</h4>

						<form method="post" action="">
							<div class="form-group">
								<label for="exampleInputEmail1">Icon</label>
								<input type="text" class="form-control" name="icon" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Icon">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Title</label>
								<input type="text" class="form-control" name="title" id="exampleInputPassword1" placeholder="Enter Title">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Description</label>
								<input type="text" class="form-control" name="description"  id="exampleInputPassword1" placeholder="Enter Description">
							</div>
<!-- 			<div class="form-group">
	<div class="checkbox">
		<input id="checkbox0" type="checkbox">
		<label for="checkbox0">
			Check me out
		</label>
	</div>
</div> -->
<button type="submit" name="card" class="btn btn-primary">Insert</button>
</form>
</div>
</div>

</div>

<div class="row">
	<div class="col-12">
		<div class="card-box table-responsive">
			<h4 class="header-title">Cards</h4>


			<table id="myTable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

				<thead>
					<tr>
						<th>SL</th>
						<th>Icon</th>
						<th>Tttle</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
				</thead>


				<tbody>
					<?php
					$sl = 0;
					$data = $dc->getallcard();
					while($row = $data->fetch_assoc()){
						$sl++;
						?>
						<tr>
							<td><?php echo  $sl; ?></td>
							<td><span class="fab <?php echo $row['icon']; ?> icon-md color-primary"></td>
								<td><?php echo $row['tittle']; ?></td>
								<td><?php echo $row['description']; ?></td>
								<td><button class="button btn"><a href="edittopbottombar.php?id=<?php echo $row['id']; ?>">Edit</a></button>&nbsp;<button class="button btn"><a href="?id=<?php echo $row['id']; ?>">Delete</a></button></td>
							</tr>
						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</div> <!-- end row -->
</div>
</div>
</div>




<?php include 'includes/footer.php'; ?>