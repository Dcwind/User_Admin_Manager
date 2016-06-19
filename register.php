<?php
    $title = "Register";
    include("header.php");

?>
<!--=== Breadcrumbs ===-->
<div class="container" id="regdiv">
    <?php include("logo.php");?><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->      


<!-- General Unify Forms -->
<div class="col-md-6">
    <!-- Reg-Form -->
    <form action="addcustomer.php" method="post" id="sky-form4" class="sky-form">
        <header>Registration form</header>

        <fieldset>
            <section>
                <label class="input">
                    <i class="icon-append fa fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email address">
                    <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                </label>
            </section>
            <section>
                <label class="input">
                    <i class="icon-append fa fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" id="password">
                    <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
                </label>
            </section>
            <section>
                <label class="input">
                    <i class="icon-append fa fa-lock"></i>
                    <input type="password" name="password" placeholder="Confirm Password" id="cfmpassword">
                    <b class="tooltip tooltip-bottom-right">Confirm password</b>
                </label>
            </section>
        </fieldset>

        <fieldset>
            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <input type="text" name="firstname" placeholder="First name">
                    </label>
                </section>
                <section class="col col-6">
                    <label class="input">
                        <input type="text" name="lastname" placeholder="Last name">
                    </label>
                </section>
            </div>

            <section>
                <label class="select">
                    <select name="country">
                        <?php include ("countrylist.php");?>
                    </select>
                    <i></i>
                </label>
            </section>

            <?php
            if($_SESSION['user'] == "user") {
                ?>
                <span> </span>
                <?php
            }
            else {
                ?>
                <section>
                    <label class="checkbox"><input type="checkbox" name="rules" id="rules" value="admin"><i></i>Administrator..</label>
                </section>
                <?php
            }
            ?>
        </fieldset>
        <footer>
            <button name="submit" type="submit" class="btn-u btn-u-dark" id="regbutton" value="=submit">Submit</button>
        </footer>
    </form>
    <!-- End Reg-Form -->
</div>
</div>

<footer>

    <p>Copyright Notice © 2016 Proniel.com  Inc. All rights reserved.</p>
</footer>
<?php
    include("footer.php");
?>

