<?php
namespace Vend\BanerSlider\Model;

/**
 * Class Slider
 */
class Slider extends \Magento\Framework\Model\AbstractModel implements
    \Vend\BanerSlider\Api\Data\SliderInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'bannerslider_slider';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Vend\BanerSlider\Model\ResourceModel\Slider::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
