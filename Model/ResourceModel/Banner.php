<?php
namespace Vend\BanerSlider\Model\ResourceModel;

/**
 * Class Banner
 */
class Banner extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init('bannerslider_banner', 'banner_id');
    }
}
