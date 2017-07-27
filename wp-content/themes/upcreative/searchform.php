<!-- search -->
<form class="cbform" id="sform" name="sform" method="POST" novalidate="novalidate" action="<?php echo home_url(); ?>" role="search">
    <input type="search" name="s" class="menu-search-input" placeholder="<?php _e('Explore'); ?>" autocomplete="off" autocapitalize="on" autocorrect="on">
    <div class="menu-search-box">
        <button type="submit" class="menu-search-button button-defaul button-w button-xl" style="padding-top:10px; padding-bottom:10px;">Search</button>
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-close.png" class="menu-search-close clicker hidden" width="40" alt="">
    </div>
</form>
<!-- /search -->