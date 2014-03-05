<?php

add_action( 'after_setup_theme', 'remove_breadcrumbs', 11);

function remove_breadcrumbs() {
  remove_theme_support( 'breadcrumb-trail' );
}

?>
