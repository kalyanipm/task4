<?php

namespace Vky\Test1\Block;

/**
 * Test content block
 */
class Test1 extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Simple Custom Module'));
        
        return parent::_prepareLayout();
    }
}