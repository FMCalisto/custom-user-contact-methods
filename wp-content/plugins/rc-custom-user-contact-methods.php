<?php
/*
Plugin Name: Custom User Contact Methods
Description: Add custom fields to users "contact" section
Version: 1.0
Author: Francisco Maria Calisto
Author URI: http://franciscocalisto.me/
Contributors: corsonr
*/

$extra_fields =  array(
  array( 'facebook', __('Facebook Username', 'rc_cucm'), true ),
  array( 'twitter', __('Twitter Username', 'rc_cucm'), true ),
  array( 'googleplus', __('Google+ ID', 'rc_cucm'), true ),
  array( 'linkedin', __('Linked In ID', 'rc_cucm'), false ),
  array( 'pinterest', __('Pinterest Username', 'rc_cucm'), false ),
  array( 'wordpress', __('WordPress.org Username', 'rc_cucm'), false ),
  array( 'phone', __('Phone Number', 'rc_cucm'), true )
);

// Use the user_contactmethods to add new fields
add_filter( 'user_contactmethods', 'rc_add_user_contactmethods' );
