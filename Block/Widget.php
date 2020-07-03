<?php

namespace Vend\BanerSlider\Block;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Vend\BanerSlider\Helper\Data as sliderHelper;

class Widget extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
 
    /**
     * @type sliderHelper
     */
    public $helperData;

    /**
     * construct description
     * @param MagentoFrameworkViewElementTemplateContext $context
     * $data[]
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        sliderHelper $helperData,
        array $data = []
    ) {
        $this->helperData = $helperData;
        parent::__construct($context, $data);
    }
 
    /**
     * construct function
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('widget/slider.phtml');
    }
 
    public function getHelper()
    {
        return $this->helperData;
    }
 
    public function getSliderId()
    {
        return $this->getData('slider_id');
    }

    public function getSliderBannerIds()
    {
        $id = $this->getSliderId();
        return $this->helperData->getSliderById($id)->getBannerGroupIds(); 
    }

    public function getSliderBanners()
    {
        $ids = $this->getSliderBannerIds();
        $ids = explode(",", $ids);
        return $this->helperData->getSliderBanners($ids)->getItems(); 
    }
}
