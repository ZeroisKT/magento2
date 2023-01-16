<?php
namespace Tresdadv\MiPrimerCrud\Controller\Index;
use \Tresdadv\MiPrimerCrud\Helper\Data;

class Test extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		Data $helper)
	{
		$this->_pageFactory = $pageFactory;
		$this->helper = $helper;
		
		return parent::__construct($context);
	}

	/*public function newFunction()
	{
			$this->helper->getStoreConfig();
	}*/

	public function execute()
	{
		echo $this->helper->getStoreConfig(5,10);
		echo " World<br><br>";

		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Tresdadv'));
		$this->_eventManager->dispatch('tresdadv_miprimercrud_display_text', ['mp_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
		exit;
	}
}
