<?php

namespace Jp\YahooApis\SS\V201901\FeedFolder;

class FeedFolderValues extends \Jp\YahooApis\SS\V201901\ReturnValue
{

    /**
     * @var FeedFolder $feedFolder
     */
    protected $feedFolder = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedFolder
     */
    public function getFeedFolder()
    {
      return $this->feedFolder;
    }

    /**
     * @param FeedFolder $feedFolder
     * @return \Jp\YahooApis\SS\V201901\FeedFolder\FeedFolderValues
     */
    public function setFeedFolder($feedFolder)
    {
      $this->feedFolder = $feedFolder;
      return $this;
    }

}
