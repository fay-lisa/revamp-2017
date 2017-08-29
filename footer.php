</div>
</div><!-- ends container from header -->

<!-- allows footer full browser width -->
<div class="footer-bkg">

    <div class="container center">

    <!-- add the widgetized footer areas -->

        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets') ) : ?>
        <?php endif; ?>

        <!-- copyright -->
        <p class="small">
        Copyright 2017 <?php bloginfo('name'); ?> | All Rights Reserved.
        </p>

    </div><!-- container -->

</div><!-- footer-bkg -->

<?php wp_footer(); ?>
 <script type="text/javascript">
(function() {

    var quotes = $(".quotes");
    var quoteIndex = -1;

    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(1500)
            .delay(1500)
            .fadeOut(1500, showNextQuote);
    }

    showNextQuote();

})();
</script>

</body>
</html>
