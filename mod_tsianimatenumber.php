<?php
	/**
	* @title			TSI ANIMATE CHART
	* @copyright   		Copyright (C) 2011-2016 Design Studio WWW, All rights reserved.
	* @license   		GNU General Public License version 3 or later.
	* @author url   	http://www.tsi.info.pl
	* @developers   	Design Studio WWW
	*/

	// No direct access
	defined( '_JEXEC' ) or die( 'Restricted access' );
	
	require_once( dirname(__FILE__).'/helper.php' );
	
	
	
	
	
	require( JModuleHelper::getLayoutPath( 'mod_tsianimatenumber' ) );
	
	$document = JFactory::getDocument();
	
	$document->addStyleSheet('modules/mod_tsianimatenumber/assest/css/mod_tsianimatenumber.css');
	$document->addScript('http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js');
	$document->addScript('modules/mod_tsianimatenumber/assest/js/jquery.counterup.min.js');
	$document->addScript('modules/mod_tsianimatenumber/assest/js/mod_tsianimatenumber.js');
	
?>