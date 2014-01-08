<?php

namespace News\Model\Link;

class Link implements LinkInterface
{
    protected $linkId;
    protected $title;
    protected $body;
    protected $imageUrl;
    protected $linkText;
    protected $linkUrl;
    protected $createdAt;
    
    public function getLinkId()
    {
        return $this->linkId;
    }
    
    public function setLinkId($id){
    	$this->linkId = $id;
    	return $this;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    
    public function getBody()
    {
        return $this->body;
    }
    
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }
    
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }
    
    public function getLinkText()
    {
        return $this->linkText;
    }
    
    public function setLinkText($linkText)
    {
        $this->linkText = $linkText;
        return $this;
    }
    
    public function getLinkUrl()
    {
        return $this->linkUrl;
    }
    
    public function setLinkUrl($linkUrl)
    {
        $this->linkUrl = $linkUrl;
        return $this;
    }
    
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}