<?php
    $title = "List of Users, Edit, add, delete";
    include ("connect.php");
    include ("header.php");
    $_SESSION['user'] = "Admin"
?>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <span class="pull-left"><img src="img/logo.png"></span>
        <ul class="pull-right breadcrumb">
            <li><a href="index.php">Log out</a></li>
            <li class="active">Show Customer</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->     

<!--Table Bordered-->
<div class="container content">
  <div class="row">
  <div class="col-md-3" id="textc">
					<ul class="list-group sidebar-nav-v1" id="sidebar-nav">
						<!-- Control Panal -->
						<li class="list-group-item list-toggle">
							<a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-typography">Control Panal</a>
							<ul id="collapse-typography" class="collapse">
								<li><a href="listcustomer.php"><i class="glyphicon glyphicon-book"></i> List Users</a></li>
								<li><a href="uploadimage.php"><i class="glyphicon glyphicon-picture"></i> Upload Pictures</a></li>
							</ul>
						</li>
						<!-- End Control Panal -->

					</ul>
				</div>
  
  <div class="col-md-9">
   <div class="panel panel-dark margin-bottom-40">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-globe"></i> List Customers</h3>
    </div>

    <div class="panel-body">
    <section>
            <div class="padding-top-10">
            <div class="padding-bottom-10">
                <a href="register.php"><button class="btn-u btn-u-dark" type="button">Add Customer</button></a>
            </div>
        </div>
    </section>
		<div class="table-responsive" > 
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th class="hidden-sm">Last Name</th>
                    <th>Email</th>
                    <th>Account CreatedOn</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM customers";
                    $result = mysql_query($query);
                    
                    $i = 0;
                    while($customers = mysql_fetch_array($result))
                    {
                        $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $customers['FirstName']; ?></td>
                    <td><?php echo $customers['LastName']; ?></td>
                    <td><?php echo $customers['Email']; ?></td>
                    <td><?php echo $customers['CreatedOn']; ?></td>
                    <td>
                        <?php
                            if($_SESSION["rules"] == "admin")
                            {
                        ?>
                            <ul class="list-inline table-buttons" id="bcolors">
                                        <li >  <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Edit" href="update.php?id=<?php echo $customers['CustomersID']; ?>" id="red"> 
                                            <button type="button" class="btn-u btn-u-sm btn-u-dark" href="update.php?id=<?php echo $customers['CustomersID']; ?>">
                                              <i class="fa fa-edit"></i>   
                                            </button>
                                        </li> </a>
                                    
                                        <li >  <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Delete" href="#" id="red"> <button type="button" class="btn-u btn-u-sm btn-u-dark" href="delete.php?id=<?php echo              $customers['CustomersID']; ?>" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-trash-o"></i>
                                                  </button>
                                        </li> </a>
                                        
                                        <li >  <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Details" href="#" id="red"> <button type="button" class="btn-u btn-u-sm btn-u-dark" href="Thumbnails.php?id=<?php echo $customers['CustomersID']; ?>" data-toggle="modal" data-target="#details" >
                                            <i class="fa fa-file-excel-o"></i>
                                            </button>
                                        </li> </a>

										
									</ul>
                        <?php
                            }
                            else
                            {
                        ?>
                            <button class="btn btn-info btn-xs" href="Thumbnails.php?id=<?php echo $customers['CustomersID']; ?>" data-toggle="modal" data-target="#details"><i class="glyphicon glyphicon-expand"></i> Detail</button>
                        <?php
                            }
                        ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
	</div>
					<!--	<canvas class="flot-overlay" width="543" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 543px; height: 250px;"></canvas> -->
    </div>
</div>

				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">          
					  </div>
					</div>
				</div>

				<div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
					   </div>
					</div>
				</div>
			</div>
		</div>
</div>
<?php
    include("footer.php");
?>
