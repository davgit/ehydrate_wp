<?php

namespace Roots\Sage\MobileDetect;

use Mobile_Detect;

$cl = __NAMESPACE__ . '\\load_mobile_detect';

if ( function_exists( $cl ) )
{
	add_action( 'wp_loaded', __NAMESPACE__ . '\\load_mobile_detect');
	add_filter( 'body_class', __NAMESPACE__ . '\\add_mobile_body_classes');
}

function load_mobile_detect()
{	
	global $mobile_detect;

	if(!class_exists('Mobile_Detect') && isset($_SERVER['DOCUMENT_ROOT'])){
		$filePath = $_SERVER['DOCUMENT_ROOT'] . '/vendor/mobiledetect/mobiledetectlib/Mobile_Detect.php';
		if(!file_exists($filePath)) {
			error_log('mobile detect script missing');
		} else {
			require_once $filePath;	
		}
	}
	
	if(!class_exists('Mobile_Detect')) {
		error_log('mobile detect class missing');
	}
	
	$mobile_detect = new Mobile_Detect();
}

function add_mobile_body_classes($classes) {

	global $post;
	global $mobile_detect;

	// soil plugin does all this below I believe:
	// $query = get_queried_object();
	// $user = wp_get_current_user();
	// $class_driver = array(
	// 	'wp-mobile' => wp_is_mobile(),
	// 	'home' => is_home(),
	// 	'front-page' => is_front_page(),
	// 	'blog' => ( is_front_page() and is_home() ),
	// 	'admin' => ( is_admin() or is_super_admin() ),
	// 	'admin-bar-showing' => is_admin_bar_showing(),
	// 	'404' => is_404(),
	// 	'super-admin' => is_super_admin(),
	// 	'user-logged-in' => is_user_logged_in(),
	// 	'archive' => is_archive(),
	// 	'search' => is_search(),
	// 	'single' => is_single(),
	// 	'sticky' => is_sticky(),
	// );

	if(!$mobile_detect || !is_object($mobile_detect)) {
		return;
	}

	foreach (array( 'mobile', 'phone', 'tablet' ) as $mobile_class) {
		$slug = 'is-' . $mobile_class;
		if 	   ( 'mobile' === $mobile_class && $mobile_detect->isMobile()){ $classes[] = $slug; }
		elseif ( 'tablet' === $mobile_class && $mobile_detect->isTablet()){ $classes[] = $slug; }
		elseif ( 'phone'  === $mobile_class && $mobile_detect->isMobile() && !$mobile_detect->isTablet()){ $classes[] = $slug; }
	}

	$ruleKeys = array('mobileos' => 'getOperatingSystems', 'mobilebrowser' => 'getBrowsers');

	foreach ($ruleKeys as $classSlug => $funcName) {
		$classSet = array();
		$list = $mobile_detect->{$funcName}();
		
		foreach ($list as $name => $regex) {
			if($mobile_detect->is($name)){
				$slug = 'is-' . $classSlug . '-' . strtolower($name);
				if(!in_array($slug, $classes)) { $classes[] = $slug; }
			}
		}
	}

	//echo '<pre>'; var_dump($classes); echo '</pre>';

	return $classes;
}