<?php
namespace Tresdadv\MiPrimerCrud\Controller\Index;
use \Tresdadv\MiPrimerCrud\Helper\Data;

class Display extends \Magento\Framework\App\Action\Action
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

	public function execute()
	{
		return $this->_pageFactory->create();
	}
}