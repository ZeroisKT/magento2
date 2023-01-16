<?php
 
namespace Tresdadv\MiPrimerCrud\Observer\Product;
 
use Magento\Framework\Event\ObserverInterface;
 
class Data implements ObserverInterface
{
 
    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getProduct();
 
        $originalName = $product->getName();
 
        $modifiedName = $originalName . ' - MODIFICADO POR EL OBSERVER';
 
        $product->setName($modifiedName);
    }
 
}