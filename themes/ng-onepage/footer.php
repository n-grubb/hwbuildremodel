            <div id="social-bar">
                <p class="social-text">Feel free to connect with us on social media on:</p>
                <ul class="social-links">
                    <li>
                        <a target="_blank" rel="nofollow" href="https://www.facebook.com/">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" rel="nofollow" href="https://www.instagram.com/">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <footer class="page-footer" >

                <div class="container">

                    <div class="row">

                        <div class="col-sm-3">
                            &nbsp;
                        </div><!-- .col end -->

                        <div class="col-md-6 col-sm-6 footer-center">
                            <div class="footer-logo">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" width="150"/>
                            </div>
                            <div class="row footer-copyright">
                                <p>
                                    Copyright &copy; <?php echo date('Y'); ?>  <?php bloginfo('name'); ?>. <br>
                                    All Rights Reserved
                                </p>
                            </div>

                        </div>


                        <div class="col-md-3 col-sm-6">
                            &nbsp;
                        </div><!-- .col end -->

                    </div><!-- .row end -->

                </div><!-- .container end -->

            </footer>

        </div><!-- .site-container end -->

        <!-- Extra Check to make sure jquery gets included -->
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.min.js"><\/script>')</script>

        <?php wp_footer(); ?>

    </body>
</html>
