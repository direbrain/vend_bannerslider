<?php

namespace Vend\BanerSlider\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Store\Model\StoreManagerInterface;
use Vend\BanerSlider\Model\BannerRepository;
use Vend\BanerSlider\Model\SliderRepository;

class Data extends AbstractHelper
{
    const CONFIG_MODULE_PATH = 'mpbannerslider';

    /**
     * @var BannerRepository
     */
    public $bannerRepository;

    /**
     * @var @param StoreManagerInterface 
     */
    protected $storeManager;

    /**
     * @var SliderRepository
     */
    public $sliderRepository;

    /**
     * @var SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;


    /**
     * Data constructor.
     *
     * @param Context $context
     * @param SearchCriteriaBuilder $searchCriteriaBuilder,
     * @param StoreManagerInterface $storeManager
     * @param BannerRepository $bannerRepository
     * @param SliderRepository $sliderRepository
     */
    public function __construct(
        Context $context,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        StoreManagerInterface $storeManager,
        BannerRepository $bannerRepository,
        SliderRepository $sliderRepository
    ) {
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->storeManager = $storeManager;
        $this->bannerRepository = $bannerRepository;
        $this->sliderRepository = $sliderRepository;

        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function getSliderById($id)
    {
        return $this->sliderRepository->getById($id);
    }

    /**
     * @inheritDoc
     */
    public function getSliderBanners($ids)
    {
        $searchCriteria = $this->searchCriteriaBuilder->addFilter('banner_id', $ids, 'in')->create();
        return $this->bannerRepository->getList($searchCriteria);
    }
    
    public function getMediaUrl()
    {
        $mediaUrl = $this->storeManager->getStore()
            ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA).'banner/image/';
        return $mediaUrl;
    }
}