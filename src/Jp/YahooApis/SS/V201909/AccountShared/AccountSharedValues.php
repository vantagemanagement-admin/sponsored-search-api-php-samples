<?php

namespace Jp\YahooApis\SS\V201909\AccountShared;

class AccountSharedValues extends \Jp\YahooApis\SS\V201909\ReturnValue
{

    /**
     * @var AccountShared $accountShared
     */
    protected $accountShared = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AccountShared
     */
    public function getAccountShared()
    {
      return $this->accountShared;
    }

    /**
     * @param AccountShared $accountShared
     * @return \Jp\YahooApis\SS\V201909\AccountShared\AccountSharedValues
     */
    public function setAccountShared($accountShared)
    {
      $this->accountShared = $accountShared;
      return $this;
    }

}
