<?php

namespace Tresdadv\MiPrimerCrud\Helper;
use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
       public function getStoreConfig($number,$number2)
       {
            $result = $number*$number2;
            return $result;
       }
}