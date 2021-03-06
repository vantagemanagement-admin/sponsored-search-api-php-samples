<?php

namespace Jp\YahooApis\SS\V201909\CampaignRetargetingList;

class CampaignRetargetingListPage extends \Jp\YahooApis\SS\V201909\Page
{

    /**
     * @var CampaignRetargetingListValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CampaignRetargetingListValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param CampaignRetargetingListValues[] $values
     * @return \Jp\YahooApis\SS\V201909\CampaignRetargetingList\CampaignRetargetingListPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
