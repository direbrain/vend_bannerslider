<?php

namespace Vend\BanerSlider\Controller\Adminhtml\Slider;

class Index extends \Magento\Backend\App\Action
{

    const ADMIN_RESOURCE = 'Vend_BanerSlider::slider';

    protected $resultPageFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Sliders'));
        return $resultPage;
    }
}
