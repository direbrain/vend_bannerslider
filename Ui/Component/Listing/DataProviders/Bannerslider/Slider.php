<?php
namespace Vend\BanerSlider\Ui\Component\Listing\DataProviders\Bannerslider;


/**
 * Class Slider
 */
class Slider extends \Magento\Ui\DataProvider\AbstractDataProvider
{    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Vend\BanerSlider\Model\ResourceModel\Slider\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
