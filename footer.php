<?php
/**
 * Created by PhpStorm.
 * User: MAXIM
 * Date: 02/03/2018
 * Time: 11:18
 */

?>

<footer id="footerinfo" class="site-footer" role="contentinfo">
    <div class="container footer-inner">

        <div class="row">
            <div class="site-info col-sm-12">
                <div id="socialnetwork">
                    <a href="https://www.facebook.com/Marginals.Lab" target="_blank"><img src="img/socialnetworks/facebook.png" alt="Facebook"></a>
                    <a href="https://twitter.com/Marginals_Lab" target="_blank"><img src="img/socialnetworks/twitter.png" alt="Twitter"></a>
                    <a href="https://www.instagram.com/marginals_lab/" target="_blank"><img src="img/socialnetworks/instagram.png" alt="Instagram"></a>
                    <a href="https://www.linkedin.com/company/marginals-lab/" target="_blank"><img src="img/socialnetworks/linkedin.png" alt="Linkedin"></a>
                </div>
                <div class="copyright-text">
                    <p>© MARGINALS'LAB 2018 - <a href="/legal-notice"><?php echo $language[$_SESSION['language']]['FooterMentionsLegales']; ?></a></p>
                </div>

            </div><!-- .site-info -->

        </div>
    </div>

    <a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>
</footer>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>

    function toggleNav() {
        if ( $('#navbar-toggler').hasClass('noopen') == true) {

            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("containerNav").style.marginRight = "250px";
            document.getElementById("page").style.marginRight = "250px";
            document.getElementById("footerinfo").style.marginRight = "250px";
            document.body.style.backgroundColor = "rgba(192,192,192,0.4)";
            $('body').addClass('stop-scrolling');
            $('body').bind('touchmove', function(e){e.preventDefault()});

           // $('#navbar-toggler').hide();
            $('#imgHeader').hide("slow");

            $('#navbar-toggler').removeClass('noopen');

        } else {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("containerNav").style.marginRight = "0";
            document.getElementById("page").style.marginRight = "0";
            document.getElementById("footerinfo").style.marginRight = "0";
            document.body.style.backgroundColor = "white";
            $('body').unbind('touchmove');
            $('body').removeClass('stop-scrolling');

          //  $('#navbar-toggler').show();
            $('#imgHeader').show("slow");

            $('#navbar-toggler').addClass('noopen');
        }
    }

    function toggleDropdown(id) {
        if ( $('#dropdown'+id).hasClass('affiche') == false) {
            $('#dropdown'+ id).addClass('affiche');

            $('#spandropdown'+ id).removeClass('unexpanded');
            $('#spandropdown'+ id).addClass('expanded');

            $('#dropdown'+ id).show();

        } else {
            $('#dropdown'+ id).removeClass('affiche');

            $('#spandropdown'+ id).addClass('unexpanded');
            $('#spandropdown'+ id).removeClass('expanded');

            $('#dropdown'+ id).hide("slow");

        }
    }

</script>
<?php
if  ($_SESSION['language'] == "fr") {
        echo '<script type="text/javascript" id="cookieinfo"
            src="/js/cookieinfofr.min.js">
    </script>';
} else {
        echo '<script type="text/javascript" id="cookieinfo"
            src="/js/cookieinfoen.min.js">
    </script>';
}
?>


</body>
</html>
