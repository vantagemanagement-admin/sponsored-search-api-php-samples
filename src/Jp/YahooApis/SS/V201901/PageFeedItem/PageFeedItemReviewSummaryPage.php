<?php

namespace Jp\YahooApis\SS\V201901\PageFeedItem;

class PageFeedItemReviewSummaryPage extends \Jp\YahooApis\SS\V201901\Page
{

    /**
     * @var PageFeedItemReviewSummaryValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PageFeedItemReviewSummaryValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param PageFeedItemReviewSummaryValues[] $values
     * @return \Jp\YahooApis\SS\V201901\PageFeedItem\PageFeedItemReviewSummaryPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
