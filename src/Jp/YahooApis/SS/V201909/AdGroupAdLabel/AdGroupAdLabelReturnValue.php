<?php

namespace Jp\YahooApis\SS\V201909\AdGroupAdLabel;

class AdGroupAdLabelReturnValue extends \Jp\YahooApis\SS\V201909\ListReturnValue
{

    /**
     * @var AdGroupAdLabelValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AdGroupAdLabelValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AdGroupAdLabelValues[] $values
     * @return \Jp\YahooApis\SS\V201909\AdGroupAdLabel\AdGroupAdLabelReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
