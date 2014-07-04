<?php
/**
 * Class for creating headers of documents.
 * @package Rtf
 */
class Header extends Container {

	/**#@+ @access private */  
	private $type;
	private $headery;
	/**#@-*/  
  	
  	/**
  	 * Constructor. Internal use.
  	 * @param Rtf &$rtf
  	 * @param string $type
  	 * @access public
  	 */
  	function Header(&$rtf, $type) {	    
	    $this->rtf = &$rtf;	
	    
	    switch ($type) {		  
			case 'all': 			
				$this->type = 'header'; 
			break;
			
			case 'left': 
				$this->type = 'headerl'; 
			break;
			
			case 'right':			
				$this->type = 'headerr'; 
			break;
			
			case 'first':			
				$this->type = 'headerf'; 
			break;
		}	    
	}
	
	/**
	 * Sets vertical header position from top of page.
	 * @param float $height
	 * @access public 
	 */
	function setPosition($height) {	  
	  	$this->headery = $height;
	}
  	  	
	/**
	 * Gets rtf code of header. Internal use. 
	 * @return string
	 * @access public 
	 */	
	function getContent() {	  
	  	$content = isSet($this->headery) ? '\headery'.round(TWIPS_IN_CM * $this->headery).' ' : '';	  
		$content .= '{\\'.$this->type.' ';						
		$content .= parent::getContent();
		$content .= '\par ';
		$content .= '}';
		return $content."\r\n";
	}			
}

?>