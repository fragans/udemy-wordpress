<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fragans
 */

?>


<?php wp_footer(); ?>

<section id="signup" data-type="background" data-speed="4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
                <p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="col-sm-3">
            <p><a href="/"><img src="<?php bloginfo('stylesheet_directory')?>/assets/img/logo.png" alt=""></a></p>
        </div>
        <div class="col-sm-6">
            <nav>
                <ul class="list-unstyled list-inline">
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Resources</a></li>
                    <li><a href="">Contact</a></li>
                    <li class="signup-link"><a href="">Sign up now</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-sm-3">
            <div class="pull-right">&copy; 2014 Brady Hustey</div>
        </div>
    </div>
</footer>

<!-- MODAL -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing
                    List</h4>
            </div>
            <div class="modal-body">
                <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of
                    our best-selling courses, <em>for free!</em></p>
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label for="subscribe-name" class="sr-only">Your first name</label>
                        <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                    </div>
                    <div class="form-group">
                        <label for="subscribe-email" class="sr-only">and Your email</label>
                        <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                    </div>
                    <input type="submit" class="btn btn-danger" value="Subscribe!">
                </form>
                <hr>
                <p><small>By providing your email you consent to receiving occasional promotional email &amp;
                        newsletters. <br>No Spam. Just good stuff. We resepect your privaci &amp; you may
                        unsubsrcibe at any time.</small></p>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>

</html> 