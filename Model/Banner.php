<?php
namespace Vend\BanerSlider\Model;

/**
 * Class Banner
 */
class Banner extends \Magento\Framework\Model\AbstractModel implements
    \Vend\BanerSlider\Api\Data\BannerInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'banerslider_banner';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Vend\BanerSlider\Model\ResourceModel\Banner::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
