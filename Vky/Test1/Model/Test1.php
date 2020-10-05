<?php
namespace Vky\Test1\Model;
use Magento\Framework\Model\AbstractModel;
use Vky\Test1\Api\Data\GridInterface;
class Test1 extends AbstractModel implements GridInterface
{ 

    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'vky_test1';
 
    /**
     * @var string
     */
    protected $_cacheTag = 'vky_test1';
 
    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'vky_test1';
 
    
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Vky\Test1\Model\ResourceModel\Test1');
    }

    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }
 
    /**
     * Set EntityId.
     */
    public function setEntityId($testId)
    {
        return $this->setData(self::ENTITY_ID, $testId);
    }
    
    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }
 
    /**
     * Set Title.
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }
 
    /**
     * Get getContent.
     *
     * @return varchar
     */
    public function getMobile()
    {
        return $this->getData(self::MOBILE);
    }
 
    /**
     * Set Content.
     */
    public function setMobile($mobile)
    {
        return $this->setData(self::MOBILE, $mobile);
    }
 
    /**
     * Get PublishDate.
     *
     * @return varchar
     */
    public function getAddress()
    {
        return $this->getData(self::ADDRESS);
    }
 
    /**
     * Set PublishDate.
     */
    public function setAddress($address)
    {
        return $this->setData(self::ADDRESS, $address);
    }
    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }
 
    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}