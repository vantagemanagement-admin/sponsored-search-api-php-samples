<?php

namespace Jp\YahooApis\SS\V201901\CampaignWebpage;

class CampaignWebpageValues extends \Jp\YahooApis\SS\V201901\ReturnValue
{

    /**
     * @var CampaignWebpage $campaignWebpage
     */
    protected $campaignWebpage = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CampaignWebpage
     */
    public function getCampaignWebpage()
    {
      return $this->campaignWebpage;
    }

    /**
     * @param CampaignWebpage $campaignWebpage
     * @return \Jp\YahooApis\SS\V201901\CampaignWebpage\CampaignWebpageValues
     */
    public function setCampaignWebpage($campaignWebpage)
    {
      $this->campaignWebpage = $campaignWebpage;
      return $this;
    }

}
