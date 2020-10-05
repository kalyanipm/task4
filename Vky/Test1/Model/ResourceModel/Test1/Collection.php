<?php
namespace Vky\Test1\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'test_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Vky\Test1\Model\Test1',
            'Vky\Test1\Model\ResourceModel\Test1'
        );
    }
}