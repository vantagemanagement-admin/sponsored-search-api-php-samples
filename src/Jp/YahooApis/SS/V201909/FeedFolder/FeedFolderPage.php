<?php

namespace Jp\YahooApis\SS\V201909\FeedFolder;

class FeedFolderPage extends \Jp\YahooApis\SS\V201909\Page
{

    /**
     * @var FeedFolderValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FeedFolderValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param FeedFolderValues[] $values
     * @return \Jp\YahooApis\SS\V201909\FeedFolder\FeedFolderPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
