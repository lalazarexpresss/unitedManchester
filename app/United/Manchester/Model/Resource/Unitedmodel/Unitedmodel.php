<?php
/**
* 
*/
class United_Manchester_Model_Resource_Unitedmodel extends Mage_core_Model_Resource_Db_Abstract
{
	
	protected function _construct()
	{
		$this->_init('manchester/united','id');// first arg is model parent node and second entity node table id
	}
}