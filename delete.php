<?php
include("connect.php");
include("header.php");

if(!isset($_POST['submit']))
{
    $CUSTOMERSID = $_GET['id'];
    $query = "SELECT * FROM customers WHERE CustomersID = $CUSTOMERSID";
    $result = mysql_query($query);
    $result_arr = mysql_fetch_array($result);
    
?>
<!-- General Unify Forms -->
<div class="col-md-6">
    <!-- Reg-Form -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="sky-form">
        <header>Are you sure to remove customer</header>
        
        <fieldset>
            <section>
                <p>
                    <?php echo $result_arr['FirstName']."  ". $result_arr['LastName'];?>
                </p>
            </section>
        </fieldset>
        
        <footer>
            <input type="hidden" name="customersID" value="<?php echo $result_arr['CustomersID'];?>">
            <button name="submit" type="submit" class="btn-u btn-u-dark" value="=submit">Remove</button>
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
        </footer>
    </form>
    <!-- End Reg-Form -->
</div>
<?php
}
else {
   //delete to database
    $query = "DELETE FROM customers WHERE CustomersID = '".$_POST["customersID"]."'";

    $result = mysql_query($query);

    if(mysql_affected_rows() == 1)
    {
        ?>
        <!--=== Breadcrumbs ===-->
        <div class="breadcrumbs">
            <div class="container">
                <h1 class="pull-left">Customer</h1>
                <ul class="pull-right breadcrumb">
                    <li><a href="listcustomer.php">Home</a></li>
                    <li><a href=""><a href="register.php">Register</a></li>
                    <li class="active">Create Customer</li>
                </ul>
            </div>
        </div><!--/breadcrumbs-->
        <!--=== End Breadcrumbs ===-->    
        <?php
            echo '<p>Customer has been deleted.</p>';
    }
    else
    {
        ?>
        <!--=== Breadcrumbs ===-->
        <div class="breadcrumbs">
            <div class="container">
                <h1 class="pull-left">Customer</h1>
                <ul class="pull-right breadcrumb">
                    <li><a href="listcustomer.php">Home</a></li>
                    <li><a href=""><a href="register.php">Register</a></li>
                    <li class="active">Create Customer</li>
                </ul>
            </div>
        </div><!--/breadcrumbs-->
        <!--=== End Breadcrumbs ===-->    
        <?php
            error_log(mysql_error());
            echo '<p>Something went wrong with your signup attempt.</p>';
    }
}
?>
<?php
    include("footer.php");
?>

