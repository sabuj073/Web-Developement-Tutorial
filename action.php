<?php

include "config.php";

if(isset($_POST['get_port'])){
	$id = $_POST['id'];
	if($id==1){
		$get_port = mysqli_query($con,"SELECT * from portfolio");
	}else{	$get_port = mysqli_query($con,"SELECT * from portfolio where work_id='$id'");
}
while($row = mysqli_fetch_array($get_port)){
	?>

	<div class="mix portfolio-item branding" data-ref="mixitup-target">
		<div class="portfolio-wrapper">
			<a href="project-details.html" target="_blank">
				<div class="content-overlay"></div>
				<img class="img-fluid" src="<?php echo $row['img']; ?>" alt="portfolio"/>
				<div class="content-details fadeIn-bottom text-white">
					<h5 class="text-white mb-1"><?php echo $row['title']; ?></h5>
					<p><?php echo $row['description']; ?></p>
				</div>
			</a>
		</div>
	</div>


<?php }} 

?>