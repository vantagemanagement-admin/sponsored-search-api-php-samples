<?php

namespace Jp\YahooApis\SS\V201909\CampaignLabel;

abstract class Operation
{

    /**
     * @var Operator $operator
     */
    protected $operator = null;

    /**
     * @param Operator $operator
     */
    public function __construct($operator)
    {
      $this->operator = $operator;
    }

    /**
     * @return Operator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param Operator $operator
     * @return \Jp\YahooApis\SS\V201909\CampaignLabel\Operation
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
