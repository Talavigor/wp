<!--header-->
<?php
/*
Template Name: reg
Template Post Type: post, page
*/
get_header(); ?>
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">WPTEST</h1>
            <div class="row center">
                <?php get_template_part('custom-registration'); ?>
                <?php custom_registration_function(); ?>
            </div>
            <div class="row center">
            </div>
            <br><br>

        </div>
    </div>

</div>
<!--footer-->
<?php get_footer(); ?>