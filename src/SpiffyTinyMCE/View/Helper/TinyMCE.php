<?php

namespace SpiffyTinyMCE\View\Helper;

use Zend\Json\Encoder,
    Zend\View\Helper\AbstractHelper;

class TinyMCE extends AbstractHelper
{
    protected static $loaded = false;
    
    protected $defaults = array(
        'mode'  => 'textareas',
        'theme' => 'simple',
    );
    
    /**
     * __invoke 
     * 
     * @access public
     * @return ZfcUser\Model\UserInterface
     */
    public function __invoke(array $opts = array())
    {
        $this->load();
        
        $js = sprintf('tinyMCE.init(%s)', Encoder::encode(array_merge($this->defaults, $opts)));
        $this->view->inlineScript()->appendScript($js);
    }
    
    protected function load()
    {
        if (self::$loaded) {
            return;
        }
        
        $this->view->inlineScript()->appendFile('/js/SpiffyTinyMCE/tiny_mce.js');
        
        self::$loaded = true;
    }
}