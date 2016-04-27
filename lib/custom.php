<?php

/**
 * Customize Login Screen
 */

function my_login_logo() { ?>
    <style type="text/css">
        body.login {
            background: #222;
        }
        body.login div#login h1 a {
            background: url(<?php echo get_bloginfo( 'template_directory' ) ?>/assets/images/logo.png) center center no-repeat;
            background-size: contain;
            padding-bottom: 30px;
            width: auto;
        }
        body.login .message {
            border-color: #e4992c;
        }
        body.login #wp-submit {
            text-transform: uppercase;
            cursor: pointer;
            background: white;
            border: 3px solid #e4992c;
            color: #e4992c;
            height: 40px;
            font-weight: bold;
            text-shadow: none;
            border-radius: 0;
            box-shadow: none;
            -webkit-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }
        body.login #wp-submit:hover {
            color: white;
            background-color: #e4992c;
            -webkit-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }
    </style>

    <?php echo my_favicon_url();
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_favicon_url() {
    return '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/assets/images/favicon.png' . '" />';
}

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'A Bite of Atacama';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/**
* Add Favicon in admin panel
*/
function add_admin_area_favicon() {
    echo my_favicon_url();
}
add_action('admin_head', 'add_admin_area_favicon');