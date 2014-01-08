<?php

namespace News\Model\Link;

interface LinkMapperInterface
{
    public function getLinkById($id);
    public function getRecentLinksByCategoryId($categoryId, $number);
    public function persist($link);
}