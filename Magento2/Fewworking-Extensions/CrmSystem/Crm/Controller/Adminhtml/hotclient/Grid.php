<?php

namespace Ueg\Crm\Controller\Adminhtml\hotclient;

use Magento\Backend\App\Action\Context;

class Grid extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPagee;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        $block = $this->_view->getLayout()
                ->createBlock('Ueg\Crm\Block\Adminhtml\HotClient')
                ->setTemplate('Ueg_Crm::hotclient/hotclient.phtml')
                ->toHtml();

        $this->getResponse()->setBody($block);
    }
}
?>