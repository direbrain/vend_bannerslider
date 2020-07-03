<?php
namespace Vend\BanerSlider\Api;

use Vend\BanerSlider\Api\Data\SliderInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface SliderRepositoryInterface
 *
 * @api
 */
interface SliderRepositoryInterface
{
    /**
     * Create or update a Slider.
     *
     * @param SliderInterface $page
     * @return SliderInterface
     */
    public function save(SliderInterface $page);

    /**
     * Get a Slider by Id
     *
     * @param int $id
     * @return SliderInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If Slider with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve Sliders which match a specified criteria.
     *
     * @param SearchCriteriaInterface $criteria
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Delete a Slider
     *
     * @param SliderInterface $page
     * @return SliderInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If Slider with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(SliderInterface $page);

    /**
     * Delete a Slider by Id
     *
     * @param int $id
     * @return SliderInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If customer with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
