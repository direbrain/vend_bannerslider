<?php
namespace Vend\BanerSlider\Model\ResourceModel\Slider;

/**
 * Class Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Vend\BanerSlider\Model\Slider::class, \Vend\BanerSlider\Model\ResourceModel\Slider::class);
    }
}
