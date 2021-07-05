<?php
namespace Cmarix\Canonical\Block\Content\Head;

use Magento\Framework\View\Element\Template;

class Canonical extends \Magento\Framework\View\Element\Template
{
		protected $_urlInterface;

	  public function __construct(
	      \Magento\Framework\View\Element\Template\Context $context,
	      \Magento\Framework\UrlInterface $urlInterface,
	      array $data = []
	  ){
	      $this->_urlInterface = $urlInterface;
	      parent::__construct($context, $data);
	  }


    public function getCanonicalUrl()
    {
        return $this->_urlInterface->getCurrentUrl();
    }   

}