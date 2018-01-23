<?php
/*
 Template Name: form
 */
?>
<div>
    <?php


    global $user_ID, $user_identity;
    wp_get_current_user();

    if (!$user_ID):

        ?>

        <form name="loginform" id="autoriz" action="<?php echo get_option('siteurl'); ?>/wp-login.php"
              method="post">

            <div class="left">

                <input type="text" name="log" placeholder="Login" value="" id="login"/>
                <input type="password" name="pwd" placeholder="Password" value="" id="password"/>

            </div>
            <div>

                <input class="btn-large waves-effect waves-light teal lighten-1" type="submit" name="submit"
                       value="Sign in" id="enter"/><br/>

            </div>
            <div>

                <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>"/>

                <a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=lostpassword"
                   class="btn-large waves-effect waves-light teal lighten-1">Restore password</a>

                <a href="<?php bloginfo('wpurl'); ?>/reg" class="btn-large waves-effect waves-light teal lighten-1">Register</a>

            </div>

        </form>

    <?php else: ?>

        <h5 class="smile">Welcome</h5>
        <h5><a href="<?php echo wp_logout_url(home_url()); ?>" title="logout">Logout</a></h5>

    <?php endif; ?>

    <?php if (current_user_can('level_10')) { ?><br/>

        <div class="">

            <h5><a href="<?php bloginfo('url'); ?>/wp-admin/">Admin Panel</a></h5>

        </div>

    <?php } ?> </div>