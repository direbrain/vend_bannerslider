<?php

namespace Vend\BanerSlider\Model\Slider;

use Vend\BanerSlider\Model\BannerRepository;

class BannerOptionsProvider implements \Magento\Framework\Data\OptionSourceInterface
{
    
    protected $collection;

    /**
     * @var \Magento\Framework\Api\SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    /**
     * @var \Magento\Framework\Convert\DataObject
     */
    private $objectConverter;

    /**
     * @param BannerRepository $bannerRepository
     * @param \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder
     * @param \Magento\Framework\Convert\DataObject $objectConverter
     */
    public function __construct(
        BannerRepository $bannerRepository,
        \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Framework\Convert\DataObject $objectConverter
    ) {
        $this->bannerRepository = $bannerRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->objectConverter = $objectConverter;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $bannerGroups = $this->bannerRepository->getList($this->searchCriteriaBuilder->create())->getItems();
        return $this->objectConverter->toOptionArray($bannerGroups, 'banner_id', 'title');
    }
}
