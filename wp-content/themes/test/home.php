<!--header-->
<?php get_header(); ?>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">WPTEST</h1>
            <div class="row center">

            </div>
            <div class="row center">
                <?php get_template_part('form'); ?>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="/wp-content/themes/test/img/background1.jpg" alt="Unsplashed background img 1">
    </div>
</div>
<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <?php
            if (wp_get_current_user()->exists()) {
                $client_id = $current_user->display_name;

                $url = 'https://www.behance.net/v2/users/';
                $id_api = 'client_id=6H1g85wtuIimgRBG2NANoftSNDP6aUBY';
                $request = $url . $client_id . '?' . $id_api;
                $json = file_get_contents($request);
                global $result;
                $result = json_decode($json);
                echo ' 
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                    <h5 class="center">Username</h5>
                    <h4><p class="light center">' . $current_user->user_login . ' </p></h4>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">User ID</h5>
                    <h4><p class="light center">' . $current_user->ID . '</p></h4>
                </div>
            </div> 
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                    <h4>Behance personal data</h4>
                    <p>' . $result->user->last_name . '</p>
                    <p>' . $result->user->city . '</p>
                    <p>' . $result->user->country . '</p>
                    <p>' . $result->user->location . '</p>
                </div>
            </div> ';

            } else {
                echo <<<Info
<div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>
            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>
            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>
Info;
            }
            ?>

        </div>
    </div>

</div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="/wp-content/themes/test/img/background2.jpg" alt="Unsplashed background img 2">
    </div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h4>Contact Us</h4>
                <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque
                    id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut
                    ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem
                    neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu
                    mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum
                    ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum
                    primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="/wp-content/themes/test/img/background3.jpg" alt="Unsplashed background img 3">
    </div>
</div>


<!--footer-->
<?php get_footer(); ?>