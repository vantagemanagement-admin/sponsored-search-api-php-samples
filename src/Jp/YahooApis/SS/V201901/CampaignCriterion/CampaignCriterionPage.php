<?php

namespace Jp\YahooApis\SS\V201901\CampaignCriterion;

class CampaignCriterionPage extends \Jp\YahooApis\SS\V201901\Page
{

    /**
     * @var CampaignCriterionValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CampaignCriterionValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param CampaignCriterionValues[] $values
     * @return \Jp\YahooApis\SS\V201901\CampaignCriterion\CampaignCriterionPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
