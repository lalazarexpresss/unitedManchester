<?php 
/**
* 
*/
class United_Manchester_Model_Unitedmodel extends Mage_Core_Model_Abstract
{
	
	public function _construct()
	{
		parent::_construct();
		$this->_init('manchester/united');// first arg is model parent node and second entity node
	}
}