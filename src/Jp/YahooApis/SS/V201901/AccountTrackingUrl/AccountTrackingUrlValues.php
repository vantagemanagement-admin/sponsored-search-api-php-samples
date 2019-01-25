<?php

namespace Jp\YahooApis\SS\V201901\AccountTrackingUrl;

class AccountTrackingUrlValues extends \Jp\YahooApis\SS\V201901\ReturnValue
{

    /**
     * @var AccountTrackingUrl $accountTrackingUrl
     */
    protected $accountTrackingUrl = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AccountTrackingUrl
     */
    public function getAccountTrackingUrl()
    {
      return $this->accountTrackingUrl;
    }

    /**
     * @param AccountTrackingUrl $accountTrackingUrl
     * @return \Jp\YahooApis\SS\V201901\AccountTrackingUrl\AccountTrackingUrlValues
     */
    public function setAccountTrackingUrl($accountTrackingUrl)
    {
      $this->accountTrackingUrl = $accountTrackingUrl;
      return $this;
    }

}
