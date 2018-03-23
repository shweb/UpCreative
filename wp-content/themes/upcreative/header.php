<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="en-gb">
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta http-equiv="expires" content="-1">
<title><?php wp_title(''); ?><?php if (wp_title('', false)){echo ' :';} ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logonoir.png">
<?php wp_head(); ?>
<script>
    new WOW().init();
</script>
<header>
    <?php $custom_logo_id = get_theme_mod( 'custom_logo' );$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
    <div id="topbar" class="white   noselect">
        <div class="wrapper page-topbar ">
            <a href="<?php echo home_url(); ?>" alt="logo" id="logoupcreative" class="load-show wow fadeInLeft"></a>
            <div class="page-buttonsupcreative">
                <div id="navicon" class="wow fadeInRight">
                <span></span><span></span><span></span><span></span></div>
                <div class="top-search  right cover wow fadeInRight"></div>
            </div>
            <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
                <button class="button-multilangue button-top right wow fadeInRight" onclick="location.href='<?php echo get_site_url();?>/zh'"><strong>中文</strong></button>
            <?php else: ?>
                <button class="button-multilangue button-top right wow fadeInRight" onclick="location.href='<?php echo get_site_url();?>/'"><strong>English</strong></button>
            <?php endif; ?>

            <button type="button" class="button-default  button-top right sf-box wow fadeInLeft" data-toggle="modal" data-target="#myModal">ENQUIRE</button>

            <div id="menumask" class="noselect" style="display: none;">

                <div class="wrapper">
                    <div class="relative">
                        <div class="menu-bar">
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-home.png" class="left" width="32" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="menu-frame">
                    <div class="menu-search tcenter" style="display: none;">
                        <?php get_template_part('searchform'); ?>
                        <div class="search-results wrapper"></div>
                    </div>
                    <!-- nav -->
                    <?php html5blank_head_nav(); ?>
                    <!-- fin nav -->
                </div>
            </div>
        </div>
    </div>
</header>