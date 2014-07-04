<?php
//define('CM_IN_POINTS', 0.035);
define('CM_IN_POINTS', 0.026434);

/**
 * Class for inserting images into document.
 * @package Rtf
 * @todo CHECK IF FILE EXISTS
 */
class Image {
    
	/**#@+ 
	 * Internal use.
	 * @access public
	 */
  	public $parFormat;
	/**#@-*/
	
	/**#@+ @access private*/	    	
    private $rtf;
    	    	
  	private $fileName;
  	
  	private $fileExtention;
  	
  	private $defaultWidth;
  	
  	private $defaultHeight;
  	
  	private $height;
  	
  	private $width;
  	
  	private $bordered;      	
    /**#@-*/
    
	/**
     * Constructor. Internal use.
     * @param Rtf &$rtf
     * @param string $fileName Name of file
     * @param ParFormat &$parFormat Paragraph format
     * @param float $width
     * @param flaot $height
     * @access public
     */
  	function Image(&$rtf, $fileName, &$parFormat, $width = 0, $height = 0) {
  	    $this->rtf = &$rtf;
  	    $this->parFormat = &$parFormat;
		$this->fileName = $fileName;			
		$this->fileExtention = strtolower(substr($fileName, -3));	
		$arr = getimagesize($fileName);	

		if (!empty($width)) {			
			$this->setWidth($width);
		}
		
		if (!empty($height)) {			
			$this->setHeight($height);
		}

		$this->defaultWidth = $arr[0]; 	
		$this->defaultHeight = $arr[1]; 						
	}
	
	/**
	 * Sets width of image.
	 * @param float $width Width If not defined image is displayed by it's height.
	 * @access public
	 */	 	
	function setWidth($width = 0) {	  
	  	$this->width = $width;
	}
	
	/**
	 * Sets height of image.
	 * @param float $height Height. If not defined image is displayed by it's width.
	 * @access public
	 */
	function setHeight($height = 0) {	  
	  	$this->height = $height;	
	}
	
	/**
     * Sets borders of element.    
     * @param BorderFormat &$borderFormat
     * @param boolean $left If false, left border is not set (default true)
     * @param boolean $top If false, top border is not set (default true)
     * @param boolean $right If false, right border is not set (default true)
     * @param boolean $bottom If false, bottom border is not set (default true)
     * @access public    
     */	
	function setBorders(&$borderFormat, $left = true, $top = true, $right = true, $bottom = true) {	  
		if (empty($this->bordered)) {		  
		  	$this->bordered = new Bordered();
		}
		
		$this->bordered->setBorders($borderFormat, $left, $top, $right, $bottom);
	}
	
	/** @access private */
	function getWidth() {		
		if (!empty($this->width)) {			
			$width = $this->width; 
		} else if (!empty($this->height)) {			
			$width = ($this->defaultWidth / $this->defaultHeight) * $this->height;
		} else {			
			$width = $this->defaultWidth * CM_IN_POINTS;
		}

		return round($width * TWIPS_IN_CM);	
	}

	/** @access private */
	function getHeight() {		
		if (!empty($this->height)) {			
			$height = $this->height; 
		} else if (!empty($this->width)) {			
			$height= ($this->defaultHeight /$this->defaultWidth) * $this->width;
		} else {			
			$height = $this->defaultHeight * CM_IN_POINTS;
		}
						
		return round($height * TWIPS_IN_CM);
	}
		
	/** @access private */
	function FileToHex() {	  
	  	$f = fopen($this->fileName, "r");
		$string = fread($f, filesize($this->fileName));
		fclose($f);

		$str = '';
		for ($i = 0; $i < strlen($string); $i ++) {
			$hex = dechex( ord($string{$i}));
		
			if (strlen($hex) == 1) {			  
			  	$hex = '0'.$hex;
			}
	    
			$str .= $hex;	
		}
		
		return $str;
	}
	
	/** 
	 * Gets rtf code of image. Internal use.
	 * @return string
	 * @access public
	 */
	function getContent() {	  
		$content = '{\pict';
		
		if (!empty($this->bordered)) {		
			$content .= $this->bordered->getContent($this->rtf);		
		}
		
		$content .= '\picwgoal'.$this->getWidth();  		
		$content .= '\pichgoal'.$this->getHeight();  
					
		switch ($this->fileExtention) {		  
		  	case 'jpg':		
				$content .= '\jpegblip ';
			break;
			
			case 'png':			
				$content .= '\pngblip ';
			break;
		}				
		
		$content .= $this->FileToHex();		
		$content .= '}'; 			
		return $content;
	}
}
?>