<?php
namespace Vend\BanerSlider\Api;

use Vend\BanerSlider\Api\Data\BannerInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface BannerRepositoryInterface
 *
 * @api
 */
interface BannerRepositoryInterface
{
    /**
     * Create or update a Banner.
     *
     * @param BannerInterface $page
     * @return BannerInterface
     */
    public function save(BannerInterface $page);

    /**
     * Get a Banner by Id
     *
     * @param int $id
     * @return BannerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If Banner with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve Banners which match a specified criteria.
     *
     * @param SearchCriteriaInterface $criteria
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Delete a Banner
     *
     * @param BannerInterface $page
     * @return BannerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If Banner with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(BannerInterface $page);

    /**
     * Delete a Banner by Id
     *
     * @param int $id
     * @return BannerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If customer with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
