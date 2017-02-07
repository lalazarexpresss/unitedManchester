<?php 

class United_Manchester_Block_Manchester extends Mage_Core_Block_Template
{
	
	public function test()
	{
		//echo "united block";
		//echo get_class(Mage::getModel('manchester/unitedmodel'));
		$united = Mage::getModel('manchester/unitedmodel')->getCollection(); //module name and model  
		print_r($united->getData());

	}
}