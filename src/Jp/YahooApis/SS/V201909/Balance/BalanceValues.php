<?php

namespace Jp\YahooApis\SS\V201909\Balance;

class BalanceValues extends \Jp\YahooApis\SS\V201909\ReturnValue
{

    /**
     * @var Balance $balance
     */
    protected $balance = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Balance
     */
    public function getBalance()
    {
      return $this->balance;
    }

    /**
     * @param Balance $balance
     * @return \Jp\YahooApis\SS\V201909\Balance\BalanceValues
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
      return $this;
    }

}
