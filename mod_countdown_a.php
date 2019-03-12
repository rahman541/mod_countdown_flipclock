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
$document->addStyleSheet(JURI::root()."modules/${modname}/tmpl/css/modcountdowna.css");

$showTitle = $params->get('showTitle', false);
$title = $params->get('title', 'Title');
// $countdownType = 'newYear1';
$countdownType = $params->get('countdownType', 'newYear');
$customDate = $params->get('customDate', '2019-03-01');

require JModuleHelper::getLayoutPath('mod_countdown_a');

//var_dump($countdownType);die;