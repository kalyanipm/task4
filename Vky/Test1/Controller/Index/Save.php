<?php

namespace Vky\Test1\Controller\Index;

use Magento\Framework\App\Action\Context;
use Vky\Test1\Model\Test1Factory;
class Save extends \Magento\Framework\App\Action\Action
{
	/**
     * @var Test
     */
    protected $_test;

	public function __construct(
		Context $context,
        Test1Factory $test
    ) {
        $this->_test = $test;
        parent::__construct($context);
    }
	public function execute()
    {
        $data = $this->getRequest()->getParams();
        $test = $this->_test->create();
       
        $test->setData($data);
        if($test->save()){
            $this->messageManager->addSuccessMessage(__('You saved the data.'));
        }else{
            $this->messageManager->addErrorMessage(__('Data was not saved.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('test1/index/index');
        return $resultRedirect;
    }
}