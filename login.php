<?php
include ("connect.php");
$title = "Login Page | Proniel";
include ("header.php");

if(!isset($_POST['submit']))
{
    session_destroy();
?>  
    <!--=== Content Part ===-->
<div class="container" id="login">
    
    <div class="row" id="space">
        <div class="col-md-6">   
            <a href="index.php">
                <img src="img/logo.png" class="img-responsive">
            </a>
                <p >Think outside the Box, Beyond the Horizon </p><br>
        </div>
        
    </div>
        
    <div class="row">

                            <div class="col-md-6">
                                <h2> Join the List of Our Happy Customers </h2>
                                <p>Customer service is our strenght. We've got your Back</p>
                                <img src="img/secure-shopping.jpg" alt="Proniel" class="img-responsive">
                            </div>
                            
                                
                            <div class=dashed>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="sky-form">
                                        <div class="container content" id="dashed">
                                            <div class="row">
                                              <div class=" col-md-4 col-md-offset-2  col-sm-6">
                                                <form class="reg-page">
                                                    <div class="reg-header">
                                                        <h2>Login to your account</h2>
                                                    </div>

                                                    <div class="input-group margin-bottom-20">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <input type="text" placeholder="Email" name="email" class="form-control" requried>
                                                    </div>
                                                    <div class="input-group margin-bottom-20">
                                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                        <input type="password" placeholder="Password" name="password" class="form-control" requried>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-md-offset-6 margin-bottom-10 ">
                                                            <a href="register.php"> <span>No Account? Join free now!</span> </a>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <button class="btn-u btn-u-dark pull-right" id="buttonwidth" type="submit" name="submit" value="submit"><span>Login</span></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                               </form>
                            </div>
        <!--/row-->
    <!--/container-->
    
    <!--=== End Content Part ===-->
</div>
</div>
<?php
}
else {
    $strSQL = "SELECT * FROM customers WHERE Email = '".mysql_real_escape_string($_POST['email'])."' AND Password = '".mysql_real_escape_string(md5($_POST['password']))."'";
    $objQuery = mysql_query($strSQL);
    $objResult = mysql_fetch_array($objQuery);

    if(!$objResult)
    {
        header("Location: http://localhost/frontend/login.php");
    }
    else
    {   
        session_start();
        $_SESSION["email"] = $objResult["Email"];
        $_SESSION["rules"] = $objResult["Rules"];
        $_SESSION["login"] = true;
        $_SESSION["username"] = $objResult["FirstName"];


        session_write_close();
        
        if($_SESSION["rules"] == "admin")
        {
        
        header("Location: http://localhost/frontend/listcustomer.php");
        }
        else {
            header("Location: http://localhost/frontend/index_.php");
            
        }
    }
    $email = $objResult["Email"] ;
    echo "email:".$email;
}
?>
    <footer>

        <p>Copyright Notice © 2016 Proniel.com  Inc. All rights reserved.</p>
    </footer>
<?php
    include("footer.php");
?>