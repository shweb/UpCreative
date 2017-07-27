<?php get_header(); ?>
<style>
    .page-numbers {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px !important;
        width: 120px !important;
        height: 30px !important;
        background-color: white;
        margin: 0 5px 0 5px;
        display: inline-block;
        padding: 5px;
        text-decoration: none;
    }

    .next, .prev {
        padding-top: 5px;
        text-decoration: none;
    }

    .page-numbers:hover {
        background-color: black;
        color: white !important;
        text-decoration: none;
    }

    .current {
        background-color: black;
        color: white;
    }

    .space {
        height: 50px;
    }

    @media only screen and (min-width: 200px) and (max-width: 375px) {
        .pagination, .page-numbers {
            width: 100% !important;
        }

        .page-numbers {
            margin: 5px 0px 5px 0px;
        }

        .space {
            height: 25px;
        }

        .dividerupc {
            height: 40px;
        }
    }
</style>

<div style="background-color:#DEDEDE;">
    <div class="container" style="min-height:650px;">
        <div class="dividerupc"></div>
        <div class="dividerupc"></div>
        <div class="dividerupc"></div>
        <?php get_template_part('loop'); ?>
        <div class="row" style="text-align: center;">
            <?php get_template_part('pagination'); ?>
        </div>
    </div><!-- #container -->
</div>
<?php get_template_part('enquire'); ?>
<?php get_footer(); ?>
