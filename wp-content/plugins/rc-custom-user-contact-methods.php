<?php
/*
Plugin Name: Custom User Contact Methods
Plugin URL: http://remicorson.com/
Description: Add custom fields to users "contact" section
Version: 1.0
Author: Remi Corson
Author URI: http://remicorson.com
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
