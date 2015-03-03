<?php
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) 
    exit();

delete_option("cm_mm_data");
delete_option("cm_mm_user_email");
delete_option("cm_mm_user_password");
delete_option("cm_mm_guest_user");
?>
