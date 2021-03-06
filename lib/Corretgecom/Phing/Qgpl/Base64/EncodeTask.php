<?php

namespace Corretgecom\Phing\Qgpl\Base64;

class EncodeTask extends \Task {

    /**
     * The message passed in the buildfile.
     */
    private $string = null;
    private $returnProperty = null;

    /**
     * The setter for the attribute "string"
	 * 
	 * @param string $str
     */
    public function setString($str) {
        $this->string = $str;
    }

	/**
	 * Set Return property
	 * 
	 * @param string $val
	 */
    public function setReturnProperty($val) {
		$this->returnProperty = $val;
    }

    /**
     * The init method: Do init steps.
     */
    public function init() {
      // nothing to do here
    }

    /**
     * The main entry point method.
     */
    public function main() {
    	$this->project->setProperty( $this->returnProperty, base64_encode($this->string));
    }
}

?>
