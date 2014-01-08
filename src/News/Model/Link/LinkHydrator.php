<?php

namespace News\Model\Link;

use Zend\Stdlib\Hydrator\ClassMethods;

class LinkHydrator extends ClassMethods
{
    public function extract($object)
    {
        if (!$object instanceof LinkInterface) {
            throw new InvalidArgumentException('$object must be an instance of News\Model\Link\LinkInterface');
        }
        $data = parent::extract($object);
        return $data;
    }
    
    public function hydrate(array $data, $object)
    {
        if (!$object instanceof LinkInterface) {
            throw new InvalidArgumentException('$object must be an instance of News\Model\Link\LinkInterface');
        }
        parent::hydrate($data, $object); 
        return $object;
    }
    
}