<?php
    include("connect.php");
    include("header.php");
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
        <header>Edit form</header>

        <fieldset>
            <section>
                <label class="input">
                    <i class="icon-append fa fa-envelope"></i>
                    <input type="email" name="email" value="<?php echo $result_arr['Email'];?>">
                    <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                </label>
            </section>
        </fieldset>

        <fieldset>
            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <input type="text" name="firstname" value="<?php echo $result_arr['FirstName'];?>">
                    </label>
                </section>
                <section class="col col-6">
                    <label class="input">
                        <input type="text" name="lastname" value="<?php echo $result_arr['LastName'];?>">
                    </label>
                </section>
            </div>

            <section>
                <label class="select">
                    <select name="country">
                        <option value="th"<?php if($result_arr['Country'] == "th"){ echo "selected";}?>>THA</option>>
                        <option value="us"<?php if($result_arr['Country'] == "us"){ echo "selected";}?>>USA</option>
                        <option value="fr"<?php if($result_arr['Country'] == "fr"){ echo "selected";}?>>FRA</option>
                        <option value="sp"<?php if($result_arr['Country'] == "sp"){ echo "selected";}?>>SPA</option>
                    </select>
                    <i></i>
                </label>
            </section>

            <section>
                <label class="checkbox"><input type="checkbox" name="rules" id="rules" value="admin" 
                    <?php if($result_arr['Rules'] == "admin") echo "checked"; ?>>
                    <i></i>I want to be an Administrator..
                </label>
            </section>
        </fieldset>
        <footer>
            <input type="hidden" name="customersID" value="<?php echo $CUSTOMERSID; ?>">
            <button name="submit" type="submit" class="btn-u" value="=submit">Submit</button>
        </footer>
    </form>
    <!-- End Reg-Form -->
</div>
<?php
}
else {
    if(!isset($_POST['rules'])) 
    {
        $rules = "user";
    }
    else 
    {
        $rules =  $_POST['rules'];
    }
   
    //update to database
    $query = "UPDATE customers SET "
            . "FirstName = '".$_POST["firstname"]."', "
            . "LastName = '".$_POST["lastname"]."', "
            . "Country = '".$_POST["country"]."', "
            . "Email = '".$_POST["email"]."', "
            . "Rules = '".$_POST["rules"]."' "
            . "WHERE CustomersID = '".$_POST["customersID"]."'";

    $result = mysql_query($query);

    if(mysql_affected_rows() == 1)
    {
            echo '<p>Your information has been updated.</p>';
    }
    else
    {
            error_log(mysql_error());
            echo '<p>Something went wrong with your signup attempt.</p>';
    }
}
?>
<?php
    include("footer.php");
?>

