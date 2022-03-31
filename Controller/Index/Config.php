<?php
namespace Land\HelloWorld\Controller\Index;


class Config extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // echo $this->helper->getText('text');
        return $this->_pageFactory->create();
    }
}