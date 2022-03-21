<?php

function agentboost_scripts() {

	$arrFilesStylesInner = [
		'//fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap',
		'//unpkg.com/swiper@7/swiper-bundle.min.css',
		'//cdn.plyr.io/3.6.8/plyr.css'
	];

	$arrFilesStyles = [
		'air-datepicker',
		'fullcalendar',
		'bootstrap-grid',
		'reset',
		'global',
		'main-alpha',
		'main-bravo',
		'main-charlie',
		'main-delta',
		'media-alpha',
		'media-bravo',
		'media-charlie',
		'media-delta'
	];

	$arrFilesScriptsInner = [
		'//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
		'//unpkg.com/swiper@7/swiper-bundle.min.js',
		'//cdn.plyr.io/3.6.12/plyr.polyfilled.js',
		'//cdn.jsdelivr.net/npm/chart.js'
	];

	$arrFilesScripts = [
		'air-datepicker',
		'fullcalendar.min',
		'main-alpha',
		'main-bravo',
		'main-charlie',
		'main-delta',
		'main-form'
	];

	foreach ($arrFilesStylesInner as $key => $value) {
    wp_enqueue_style( "agentboost-{$key}", $value, array(), _S_VERSION );
	}

	foreach ($arrFilesStyles as $key => $value) {
    wp_enqueue_style( "agentboost-{$value}", get_template_directory_uri() . "/assets/css/{$value}.css", array(), _S_VERSION );
	}

	foreach ($arrFilesScriptsInner as $key => $value) {
    wp_enqueue_script( "agentboost-{$key}", $value, array(), _S_VERSION, true );
	}

	foreach ($arrFilesScripts as $key => $value) {
		wp_enqueue_script( "agentboost-{$value}", get_template_directory_uri() . "/assets/js/{$value}.js", array(), _S_VERSION, true );
	}

}
add_action( 'wp_enqueue_scripts', 'agentboost_scripts' );