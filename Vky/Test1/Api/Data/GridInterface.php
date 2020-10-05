<?php
/**
 * Webkul_Grid Grid Interface.
 *
 * @category    Webkul
 *
 * @author      Webkul Software Private Limited
 */
namespace Vky\Test1\Api\Data;
 
interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ENTITY_ID = 'test_id';
    const NAME = 'name';
    const MOBILE = 'mobile';
    const ADDRESS = 'address';
    const CREATED_AT = 'created_at';
 
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId();
 
    /**
     * Set EntityId.
     */
    public function setEntityId($testId);
 
    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getName();
 
    /**
     * Set Title.
     */
    public function setName($name);
 
    /**
     * Get Content.
     *
     * @return varchar
     */
    public function getMobile();
 
    /**
     * Set Content.
     */
    public function setMobile($mobile);
 
    /**
     * Get Publish Date.
     *
     * @return varchar
     */
    public function getAddress();
 
    /**
     * Set PublishDate.
     */
    public function setAddress($address);
 
    
    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt();
 
    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt);
}