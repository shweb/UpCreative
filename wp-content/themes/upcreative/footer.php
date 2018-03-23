<footer>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <a href="<?php echo home_url(); ?>">
                        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('logo')) ?>
                </div>
                <div class="col-md-6 col-xs-12 ">
                    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer')) ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="main ">
                    <?php html5blank_foot_nav();?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="privacy">
                <p>Copyright 2017 © Up Creatives &nbsp;&nbsp;&nbsp;&nbsp;</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
