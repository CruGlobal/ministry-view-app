<?php namespace GlobalTechnology\MinistryViewReports {
	require_once( dirname( __FILE__ ) . '/vendor/autoload.php' );
	$wrapper = ApplicationWrapper::singleton();
	$wrapper->logout();
	exit();
}
