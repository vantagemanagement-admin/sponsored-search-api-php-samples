<?php

namespace Jp\YahooApis\SS\V201909\Label;

class LabelValues extends \Jp\YahooApis\SS\V201909\ReturnValue
{

    /**
     * @var Label $label
     */
    protected $label = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Label
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param Label $label
     * @return \Jp\YahooApis\SS\V201909\Label\LabelValues
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
