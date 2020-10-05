<?php
namespace Vky\Test1\Model\ResourceModel;
class Test1 extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * @var string
     */
    protected $_idFieldName = 'test_id';
    /**
     * @var \Magento\Framework\Stdlib\DateTime\DateTime
     */
    protected $_date;
 
    
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        \Magento\Framework\Stdlib\DateTime\DateTime $date,
        $resourcePrefix = null
    ) 
    {
        parent::__construct($context, $resourcePrefix);
        $this->_date = $date;
    }
 
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('vky_test1', 'test_id');   //here "vky_test" is table name and "test_id" is the primary key of custom table
    }
}