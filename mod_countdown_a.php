<?php
defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';

$hello = ModCoundownAHelper::getHello($params);

$modname		= basename(dirname(__FILE__));
$liburl 		= JURI::base(true).'/modules/'.$modname.'/assets/';
$document		= JFactory::getDocument();

JHtml::_('bootstrap.framework');
$document->addScript($liburl.'flipclock.min.js');
$document->addStyleSheet($liburl.'flipclock.css');

$countdownType = $params->get('countdownType', 'newYear');

require JModuleHelper::getLayoutPath('mod_countdown_a');

//var_dump($countdownType);die;