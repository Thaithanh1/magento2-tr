<?php

namespace Land\HelloWorld\Block;

use Magento\Framework\View\Element\Template;
use Land\HelloWorld\Helper\Data;


class Index extends \Magento\Framework\View\Element\Template
{
    protected $helper;
    public function __construct(Template\Context $context, array $data = [], Data $helper)
    {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }


    public function getTitle()
    {
        $config = $this->helper->getConfig('helo/enable2');

        if($config){
            return __('HelloWorld');     
        }
       else{
           return "1";
       }
    }
}