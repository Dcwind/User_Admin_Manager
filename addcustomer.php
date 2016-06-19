<?php
    $title= "Proniel Confirm Registration, Login";
    include ("connect.php");
    include("header.php");
?>
<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <span class="pull-left"><a href="index.php"><img src="img/logo.png"></a></span>
        </div>
    </div>
   <!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->     
    <div class="container" id="#login">
<?php
if( !isset($_POST['submit'])  )
{
    echo "<p>Please Submit </p>";
}


else
{    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $country =  $_POST['country'];
    $date = getdate(date("U"));
    $createdon = "$date[weekday], $date[month] $date[mday], $date[year]";

    if(!isset($_POST['rules'])) 
    {
        $rules = "user";
    }
    else 
    {
        $rules =  $_POST['rules'];
    }
            
    //insert to database
    $query = "INSERT INTO customers (CustomersID, CreatedOn, FirstName, LastName, Email, Country, Password, Rules) VALUE (NULL, '$createdon' , '$firstname','$lastname','$email', '$country','$password','$rules')";
    
    $result = mysql_query($query);

    if(mysql_affected_rows() == 1)
    {
        ?>
        <div class="alert alert-success fade in">
            <strong>Registration Successful!</strong> <a href="login.php">Login</a> to continue.
        </div>
        
        
    <?php
    }
    else
    {   error_log(mysql_error());
        ?>
        <div class="alert alert-danger fade in">
            <strong>Registration  Not Successful!</strong> Something went Wrong.
        </div>

    <?php
    }
    ?>

    <?php
    }

?>
    </div>



<?php
    include("footer.php");
?>