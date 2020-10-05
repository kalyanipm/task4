<?php

namespace Vky\Test1\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout();
        $this->_view->renderLayout();
    }
}