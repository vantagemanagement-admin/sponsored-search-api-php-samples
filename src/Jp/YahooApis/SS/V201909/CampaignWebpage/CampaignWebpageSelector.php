<?php

namespace Jp\YahooApis\SS\V201909\CampaignWebpage;

class CampaignWebpageSelector
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var long[] $campaignIds
     */
    protected $campaignIds = null;

    /**
     * @var long[] $targetIds
     */
    protected $targetIds = null;

    /**
     * @var \Jp\YahooApis\SS\V201909\Paging $paging
     */
    protected $paging = null;

    /**
     * @param int $accountId
     */
    public function __construct($accountId)
    {
      $this->accountId = $accountId;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\SS\V201909\CampaignWebpage\CampaignWebpageSelector
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCampaignIds()
    {
      return $this->campaignIds;
    }

    /**
     * @param long[] $campaignIds
     * @return \Jp\YahooApis\SS\V201909\CampaignWebpage\CampaignWebpageSelector
     */
    public function setCampaignIds(array $campaignIds = null)
    {
      $this->campaignIds = $campaignIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getTargetIds()
    {
      return $this->targetIds;
    }

    /**
     * @param long[] $targetIds
     * @return \Jp\YahooApis\SS\V201909\CampaignWebpage\CampaignWebpageSelector
     */
    public function setTargetIds(array $targetIds = null)
    {
      $this->targetIds = $targetIds;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\SS\V201909\Paging
     */
    public function getPaging()
    {
      return $this->paging;
    }

    /**
     * @param \Jp\YahooApis\SS\V201909\Paging $paging
     * @return \Jp\YahooApis\SS\V201909\CampaignWebpage\CampaignWebpageSelector
     */
    public function setPaging($paging)
    {
      $this->paging = $paging;
      return $this;
    }

}
