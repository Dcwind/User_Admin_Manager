</div><!--/End Wrapepr-->

<!-- JS Global Compulsory -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script src="assets/plugins/back-to-top.js"></script>
<script src="assets/plugins/smoothScroll.js"></script>
<script src="assets/plugins/jquery.parallax.js"></script>
<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
<!-- JS Customization -->
<script src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script src="assets/js/shop.app.js"></script>
<script src="assets/js/plugins/owl-carousel.js"></script>
<script src="assets/js/plugins/revolution-slider.js"></script>
<script src="assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
<script src="assets/js/plugins/angular.min.js"></script>
<script src="assets/js/proniel-app/app.js"></script>

<script>
    jQuery(document).ready(function() {
        App.init();
        App.initScrollBar();
        App.initParallaxBg();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullWidth();
        StyleSwitcher.initStyleSwitcher();

        $('.modal').on('hidden.bs.modal', function () {
            $('#myModal').removeData('bs.modal')
        });

        $('.modal').on('hidden.bs.modal', function () {
            $('#details').removeData('bs.modal')
        });
        
        // Validation
        $('#sky-form').validate({
            // Rules for form validation
            rules:
            {
                email:
                {
                    required: true,
                    email: true
                },
                password:
                {
                    required: true
                }
            },

            // Messages for form validation
            messages:
            {
                email:
                {
                    required: 'Please enter your email address',
                    email: 'Please enter a VALID email address'
                },
                password:
                {
                    required: 'Please enter your password'
                }
            },                  

            // Do not change code below
            errorPlacement: function(error, element)
            {
                error.insertAfter(element.parent());
            }
        });
    });
</script>
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>

