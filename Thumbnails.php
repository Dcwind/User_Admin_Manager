<?php
include("connect.php");
include("header.php");
$CUSTOMERSID = $_GET['id'];
$query = "SELECT * FROM customers WHERE CustomersID = $CUSTOMERSID";
$result = mysql_query($query);
$result_arr = mysql_fetch_array($result);

if(!isset($_POST['submit']))
{

?>
		<div class="modal-content">	
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<center><h2 class="modal-title" id="details">Details</h2><center>
				</div>
					<div class="row">
			
								<div class="col-md-6">
									<div class="thumbnail">
										<div class="fancybox-button zoomer" data-rel="fancybox-button" >
											<span class="overlay-zoom">
												<div class="caption">
													<center><h3>User Contact</h3></center>
												
													<div class="funny-boxes funny-boxes-top-sea">
														<p><b>First Name:</b>   <small><?php echo $result_arr['FirstName'];?></small></p>
														<p><b>Last Name:</b>    <small><?php echo $result_arr['LastName'];?></small></p>
														<p><b>Email:</b>        <small><?php echo $result_arr['Email'];?><small></p>
														<p><b>Phone Number:</b> <small><?php echo $result_arr['Phone'];?><small></p>
														<p><b>Country: </b>     <small><?php echo $result_arr['Country'];?><small></p>
													</div>
												</div>
											</span>
										</div>
										
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="thumbnail">
										<div class="fancybox-button zoomer" data-rel="fancybox-button" >
											<span class="overlay-zoom">
												<div class="caption">
													<center><h3>Address Information</h3></center>
												
													<div class="funny-boxes funny-boxes-top-sea">
														<p><b>First Name:</b>   <small><?php echo $result_arr['FirstName'];?></small></p>
														<p><b>Last Name:</b>    <small><?php echo $result_arr['LastName'];?></small></p>
														<p><b>Email:</b>        <small><?php echo $result_arr['Email'];?><small></p>
														<p><b>Phone Number:</b> <small><?php if (strlen($result_arr['Phone'])==NULL){
																																		echo 'Null';
																																	}
																																		else echo $result_arr['Phone'];  ?><small></p>
														<p><b>Country: </b>     <small><?php echo $result_arr['Country'];?><small></p>
													</div>
												</div>
											</span>
										</div>
										
									</div>
								</div>
								<?php 
								/*if (strlen($result_arr['Phone'])==NULL)
								{
								echo '<p>Null</p>';
								}
								else echo $result_arr['Phone']; */
								?> 
			
					<!-- End Thumbnails v4 -->
				</div>
				<div class="row" > 
							<div class="col-md-6">
									<div class="thumbnail">
										<div class="fancybox-button zoomer" data-rel="fancybox-button" >
											<span class="overlay-zoom">
												<div class="caption">
													<center><h3>Address Information</h3></center>
												
													<div class="funny-boxes funny-boxes-top-sea">
														<p><b>First Name:</b>   <small><?php echo $result_arr['FirstName'];?></small></p>
														<p><b>Last Name:</b>    <small><?php echo $result_arr['LastName'];?></small></p>
														<p><b>Email:</b>        <small><?php echo $result_arr['Email'];?><small></p>
														<p><b>Phone Number:</b> <small><?php if (strlen($result_arr['Phone'])==NULL){
																																		echo 'Null';
																																	}
																																		else echo $result_arr['Phone'];  ?><small></p>
														<p><b>Country: </b>     <small><?php echo $result_arr['Country'];?><small></p>
													</div>
												</div>
											</span>
										</div>
										
									</div>
								</div>
							<div class="col-md-6">
									<div class="thumbnail">
										<div class="fancybox-button zoomer" data-rel="fancybox-button" >
											<span class="overlay-zoom">
												<div class="caption">
													<center><h3>Address Information</h3></center>
												
													<div class="funny-boxes funny-boxes-top-sea">
														<p><b>First Name:</b>   <small><?php echo $result_arr['FirstName'];?></small></p>
														<p><b>Last Name:</b>    <small><?php echo $result_arr['LastName'];?></small></p>
														<p><b>Email:</b>        <small><?php echo $result_arr['Email'];?><small></p>
														<p><b>Phone Number:</b> <small><?php if (strlen($result_arr['Phone'])==NULL){
																																		echo 'Null';
																																	}
																																		else echo $result_arr['Phone'];  ?><small></p>
														<p><b>Country: </b>     <small><?php echo $result_arr['Country'];?><small></p>
													</div>
												</div>
											</span>
										</div>
										
									</div>
								</div>
				
				</div>
								
				<!--/row-->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
	</div>	
<?php
}
    include("footer.php");
?>