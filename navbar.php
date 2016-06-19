<?php



?>
    <div class="header-v5 header-static">

        <!-- Topbar v3 -->
        <div class="topbar-v3">
            <div class="search-open">
                <div class="container">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="search-close"><i class="icon-close"></i></div>
                </div>    
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline right-topbar pull-right">

                               <li> <a href="login.php">Login</a> | <a href="register.php">Register</a></li>

                            <li><i class="search fa fa-search search-button"></i></li>
                        </ul>
                    </div>
                </div>
            </div><!--/container-->
        </div>
        <!-- End Topbar v3 -->

        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse ">
                    <!-- Shopping Cart -->
                <!--    <ul class="list-inline shop-badge badge-lists badge-icons pull-right">
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            <span class="badge badge-sea rounded-x">3</span>
                            <ul class="list-unstyled badge-open mCustomScrollbar" data-mcs-theme="minimal-dark">
                                <li>
                                    <img src="assets/img/thumb/05.jpg" alt="">
                                    <button type="button" class="close">×</button>
                                    <div class="overflow-h">
                                        <span>Black Glasses</span>
                                        <small>1 x $400.00</small>
                                    </div>    
                                </li>
                                
                                <li class="subtotal">
                                    <div class="overflow-h margin-bottom-10">
                                        <span>Subtotal</span>
                                        <span class="pull-right subtotal-cost">$1200.00</span>
                                    </div>
                                    <div class="row">    
                                        <div class="col-xs-6">
                                            <a href="shop-ui-inner.html" class="btn-u btn-brd btn-brd-hover btn-u-sea-shop btn-block">View Cart</a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a href="shop-ui-add-to-cart.html" class="btn-u btn-u-sea-shop btn-block">Checkout</a>
                                        </div>
                                    </div>        
                                </li>    
                            </ul>
                        </li>
                    </ul> -->
                    <!-- End Shopping Cart -->

                    <!-- Nav Menu -->
                    <ul class="nav navbar-nav pull-center">
                        <!-- Pages -->
                       
                        <li><a href="<?php echo $_SERVER['PHP_SELF']?>">Home</a></li>
						

						<li><a href="product-grid.html">Product</a></li>
                        <li><a href="cart.html">Checkout</a></li>
						<li><a href="contact.html">Contact</a></li>
                        <!-- Main Demo -->
                    </ul>
                    <!-- End Nav Menu -->
                </div>
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>

<?php
include ("footer.php");
?>