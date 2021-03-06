<?php

/*  Uninstall file for the YouTube Favorite Video Posts plugin.

    The only settings that we add when YouTube Favorite Video Posts
    is in use are under the option name 'jf_yfvp_options'. Not much to
    do for cleanup, but here it is. */

/*  Check to make sure this file has been called by WordPress and
    not through any kind of direct link. */
if( ! defined( 'ABSPATH' ) && ! defined( 'WP_UNINSTALL_PLUGIN' ) )
    exit();

/*  Delete the afip_options */
delete_option( 'jf_yfvp_options' );