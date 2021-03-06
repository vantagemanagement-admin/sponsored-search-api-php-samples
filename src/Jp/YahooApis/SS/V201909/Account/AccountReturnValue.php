<?php

namespace Jp\YahooApis\SS\V201909\Account;

class AccountReturnValue extends \Jp\YahooApis\SS\V201909\ListReturnValue
{

    /**
     * @var AccountValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AccountValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AccountValues[] $values
     * @return \Jp\YahooApis\SS\V201909\Account\AccountReturnValue
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
