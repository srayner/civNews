<?php

namespace News\Model\Link;

use ZfcBase\Mapper\AbstractDbMapper;

class LinkMapper extends AbstractDbMapper implements LinkMapperInterface
{
    protected $tableName = 'news_link';
    protected $linkIdField = 'link_id';
    protected $categoryIdField = 'category_id';
    
    public function getLinkById($id)
    {
        $select = $this->getSelect()
                       ->where(array($this->linkIdField => $id));
        return $this->select($select)->current();
    }
    
    public function getRecentLinksByCategoryId($categoryId, $number)
    {
    	$select = $this->getSelect()
                       ->where(array($this->categoryIdField => $categoryId));
        return $this->select($select);    
    }
    
    public function persist($link)
    {
    	if ($link->getMessageId() > 0) {
            $this->update($link, null, null, new LinkHydrator);
        } else {
            $this->insert($link, null, new LinkHydrator);
        }
        return $message;        
    }
    
	protected function insert($entity, $tableName = null, HydratorInterface $hydrator = null)
    {
        $result = parent::insert($entity, $tableName, $hydrator);
        $entity->setLinkId($result->getGeneratedValue());
        return $result;
    }
    
	protected function update($entity, $where = null, $tableName = null, HydratorInterface $hydrator = null)
    {
        if (!$where) {
            $where = $this->linkIdField . ' = ' . $entity->getLinkId();
        }
        return parent::update($entity, $where, $tableName, $hydrator);
    }
}