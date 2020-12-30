<?php

    function my_function_admin_bar() { 
        return false; 
    }
    
    add_filter( 'show_admin_bar' , 'my_function_admin_bar');

    function favicon4admin() {
        echo '<link rel="icon" type="image/x-icon" href="' . get_bloginfo('template_directory') . '/img/logo/logo_tab_admin.png">';
    }
    
    add_action( 'admin_head', 'favicon4admin' );

    function post_remove () { 
        remove_menu_page('edit.php'); // cache menu edit
        remove_menu_page('upload.php'); // cache menu Upload
        remove_menu_page( 'edit-comments.php' ); // cache menu commentaires
        remove_menu_page('cptui_main_menu'); // cache menu CPT UI Custom Post Type
        remove_menu_page('duplicator'); // cache menu Duplicator
        remove_menu_page('mailchimp-for-wp'); // cache menu MC4WP MailChimp For Wordpress
        remove_menu_page('smush'); //cache menu Smush (optimisation images)
        remove_menu_page('wpfastestcacheoptions'); // cache menu WP Fastest Cache
    }

    add_action('admin_menu', 'post_remove'); // cache menu Posts 

    add_filter('acf/settings/show_admin', '__return_false'); // cache menu ACF Advanced Custom Fields

    add_filter( 'wpcf7_form_elements', 'imp_wpcf7_form_elements' );
    
    function imp_wpcf7_form_elements( $content ) {
        if(strpos( $content, 'name="additional"' )) {
            $str_pos = strpos( $content, 'name="additional"' );
            $content = substr_replace( $content, ' autocomplete="both" autocomplete="off" ', $str_pos, 0 );
        } elseif (strpos( $content, 'name="message"' )) {
            $str_pos = strpos( $content, 'name="message"' );
            $content = substr_replace( $content, ' autocomplete="both" autocomplete="off" ', $str_pos, 0 );
        }
    
        return $content;
    }

    function substrWords($data, $maxchar, $end = '...') {
        if (strlen($data) > $maxchar || $data == '') {
            $words = preg_split('/\s/', $data);
            $output = '';
            $i = 0;
            while (1) {
            $length = strlen($output) + strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } else {
                $output .= " " . $words[$i];
                ++$i;
            }
            }
            $output .= $end;
        } else {
            $output = $data;
        }
        return $output;
    }