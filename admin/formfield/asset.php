<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.form.formfield');

class JFormFieldAsset extends JFormField {
	protected $type = 'Asset';

	protected function getInput() {
		JHTML::_('behavior.framework');	
		$document	= JFactory::getDocument();

		$document->addScript(JURI::root().$this->element['path'].'js/bt.js');
		//$document->addStyleSheet(JURI::root().$this->element['path'].'css/bt.css');
			
		return null;
	}
}
?>