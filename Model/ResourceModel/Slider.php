<?php
namespace Vend\BanerSlider\Model\ResourceModel;

/**
 * Class Slider
 */
class Slider extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init('bannerslider_slider', 'slider_id');
    }
}
