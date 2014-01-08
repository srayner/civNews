<?php

namespace News\Model\Link;

use ZfcBase\Mapper\AbstractDbMapper;

class LinkMapper extends AbstractDbMapper implements LinkMapperInterface
{
    protected $tableName = 'news_link';
    protected $linkIdField = 'link_id';
    
    public function getLinkById($id)
    {
        $select = $this->getSelect()
                       ->where(array($this->linkIdField => $id));
        return $this->select($select)->current();
    }
    
    public function getRecentLinksByCategoryId($categoryId, $number)
    {
        
    }
    
    public function persist($link)
    {
        
    }
}