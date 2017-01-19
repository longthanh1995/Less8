<?php
/**
 * Magestore
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magestore.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Magestore
 * @package     Magestore_Mutlivendor
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */
namespace Magestore\Multivendor\Model\ResourceModel\VendorProduct;

/**
 * Class Collection
 * @package Magestore\Multivendor\Model\ResourceModel\VendorProduct
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {
    /**
     *
     */
    public function _construct()	{;
        parent::_construct();
        $this->_init('Magestore\Multivendor\Model\VendorProduct', 'Magestore\Multivendor\Model\ResourceModel\VendorProduct');
    }
}