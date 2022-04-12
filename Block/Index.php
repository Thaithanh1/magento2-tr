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
        $config = $this->helper->getConfig('setting/enable');

        if($config){
            return $this->helper->getConfig('setting/text2');     
        }
       else{
           return "";
       }
    }
}