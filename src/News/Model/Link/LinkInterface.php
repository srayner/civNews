<?php

namespace News\Model\Link;

interface LinkInterface
{
    public function getLinkId();
    public function setLinkId($id);
    
    public function getTitle();
    public function setTitle($title);
    
    public function getBody();
    public function setBody($body);
    
    public function getImageUrl();
    public function setImageUrl($imageUrl);
    
    public function getLinkText();
    public function setLinkText($linkText);
    
    public function getLinkUrl();
    public function setLinkUrl($linkUrl);
    
    public function getCreatedAt();
}