<?php

namespace Jp\YahooApis\SS\V201909\PageFeedItem;

class PageFeedItemService extends \Jp\YahooApis\SS\AdApiSample\Util\Service
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SoapHeader' => 'Jp\\YahooApis\\SS\\V201909\\SoapHeader',
      'SoapResponseHeader' => 'Jp\\YahooApis\\SS\\V201909\\SoapResponseHeader',
      'Paging' => 'Jp\\YahooApis\\SS\\V201909\\Paging',
      'Error' => 'Jp\\YahooApis\\SS\\V201909\\Error',
      'ErrorDetail' => 'Jp\\YahooApis\\SS\\V201909\\ErrorDetail',
      'Page' => 'Jp\\YahooApis\\SS\\V201909\\Page',
      'ReturnValue' => 'Jp\\YahooApis\\SS\\V201909\\ReturnValue',
      'ListReturnValue' => 'Jp\\YahooApis\\SS\\V201909\\ListReturnValue',
      'PageFeedItemUploadUrl' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemUploadUrl',
      'PageFeedItemUploadUrlOperation' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemUploadUrlOperation',
      'PageFeedItemUploadUrlPage' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemUploadUrlPage',
      'PageFeedItemUploadUrlValues' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemUploadUrlValues',
      'PageFeedItemJobStatusSelector' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemJobStatusSelector',
      'PageFeedItemJobStatusPage' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemJobStatusPage',
      'PageFeedItemJobValues' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemJobValues',
      'PageFeedItemDownloadJobReturnValue' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemDownloadJobReturnValue',
      'PageFeedItemDownloadJobValues' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemDownloadJobValues',
      'PageFeedItemJob' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemJob',
      'PageFeedItemUploadJob' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemUploadJob',
      'PageFeedItemDownloadJobOperation' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemDownloadJobOperation',
      'PageFeedItemDownloadJob' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemDownloadJob',
      'PageFeedItemReviewSummarySelector' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemReviewSummarySelector',
      'PageFeedItemReviewSummaryPage' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemReviewSummaryPage',
      'PageFeedItemReviewSummaryValues' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemReviewSummaryValues',
      'PageFeedItemReviewSummary' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemReviewSummary',
      'PageFeedItemSelector' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemSelector',
      'PageFeedUrl' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedUrl',
      'PageFeedItemPage' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemPage',
      'PageFeedItemReturnValues' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItemReturnValues',
      'PageFeedItem' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\PageFeedItem',
      'addDownloadJob' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\addDownloadJob',
      'addDownloadJobResponse' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\addDownloadJobResponse',
      'getUploadUrl' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\getUploadUrl',
      'getUploadUrlResponse' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\getUploadUrlResponse',
      'getJobStatus' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\getJobStatus',
      'getJobStatusResponse' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\getJobStatusResponse',
      'getReviewSummary' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\getReviewSummary',
      'getReviewSummaryResponse' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\getReviewSummaryResponse',
      'get' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\get',
      'getResponse' => 'Jp\\YahooApis\\SS\\V201909\\PageFeedItem\\getResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $endpoint Service Endpont URL
     * @param string $wsdl The wsdl file to use
     */
    public function __construct($wsdl = null, $endpoint = null, array $options = array())
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://ss.yahooapis.jp/services/V201909/PageFeedItemService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
    }

    /**
     * @param addDownloadJob $parameters
     * @return addDownloadJobResponse
     */
    public function addDownloadJob(addDownloadJob $parameters)
    {
      return parent::invoke('addDownloadJob', $parameters);
    }

    /**
     * @param getJobStatus $parameters
     * @return getJobStatusResponse
     */
    public function getJobStatus(getJobStatus $parameters)
    {
      return parent::invoke('getJobStatus', $parameters);
    }

    /**
     * @param getUploadUrl $parameters
     * @return getUploadUrlResponse
     */
    public function getUploadUrl(getUploadUrl $parameters)
    {
      return parent::invoke('getUploadUrl', $parameters);
    }

    /**
     * @param getReviewSummary $parameters
     * @return getReviewSummaryResponse
     */
    public function getReviewSummary(getReviewSummary $parameters)
    {
      return parent::invoke('getReviewSummary', $parameters);
    }

    /**
     * @param get $parameters
     * @return getResponse
     */
    public function get(get $parameters)
    {
      return parent::invoke('get', $parameters);
    }

}
