<?php

namespace Jp\YahooApis\SS\V201901\Dictionary;

class DictionaryService extends \Jp\YahooApis\SS\AdApiSample\Util\Service
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SoapHeader' => 'Jp\\YahooApis\\SS\\V201901\\SoapHeader',
      'SoapResponseHeader' => 'Jp\\YahooApis\\SS\\V201901\\SoapResponseHeader',
      'Paging' => 'Jp\\YahooApis\\SS\\V201901\\Paging',
      'Error' => 'Jp\\YahooApis\\SS\\V201901\\Error',
      'ErrorDetail' => 'Jp\\YahooApis\\SS\\V201901\\ErrorDetail',
      'Page' => 'Jp\\YahooApis\\SS\\V201901\\Page',
      'ReturnValue' => 'Jp\\YahooApis\\SS\\V201901\\ReturnValue',
      'ListReturnValue' => 'Jp\\YahooApis\\SS\\V201901\\ListReturnValue',
      'DisapprovalReasonSelector' => 'Jp\\YahooApis\\SS\\V201901\\Dictionary\\DisapprovalReasonSelector',
      'GeographicLocationSelector' => 'Jp\\YahooApis\\SS\\V201901\\Dictionary\\GeographicLocationSelector',
      'DisapprovalReasonPage' => 'Jp\\YahooApis\\SS\\V201901\\Dictionary\\DisapprovalReasonPage',
      'DisapprovalReasonValues' => 'Jp\\YahooApis\\SS\\V201901\\Dictionary\\DisapprovalReasonValues',
      'DisapprovalReason' => 'Jp\\YahooApis\\SS\\V201901\\Dictionary\\DisapprovalReason',
      'GeographicLocationPage' => 'Jp\\YahooApis\\SS\\V201901\\Dictionary\\GeographicLocationPage',
      'GeographicLocationValues' => 'Jp\\YahooApis\\SS\\V201901\\Dictionary\\GeographicLocationValues',
      'GeographicLocation' => 'Jp\\YahooApis\\SS\\V201901\\Dictionary\\GeographicLocation',
      'getDisapprovalReason' => 'Jp\\YahooApis\\SS\\V201901\\Dictionary\\getDisapprovalReason',
      'getDisapprovalReasonResponse' => 'Jp\\YahooApis\\SS\\V201901\\Dictionary\\getDisapprovalReasonResponse',
      'getGeographicLocation' => 'Jp\\YahooApis\\SS\\V201901\\Dictionary\\getGeographicLocation',
      'getGeographicLocationResponse' => 'Jp\\YahooApis\\SS\\V201901\\Dictionary\\getGeographicLocationResponse',
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
        $wsdl = 'https://ss.yahooapis.jp/services/V201901/DictionaryService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
    }

    /**
     * @param getDisapprovalReason $parameters
     * @return getDisapprovalReasonResponse
     */
    public function getDisapprovalReason(getDisapprovalReason $parameters)
    {
      return parent::invoke('getDisapprovalReason', $parameters);
    }

    /**
     * @param getGeographicLocation $parameters
     * @return getGeographicLocationResponse
     */
    public function getGeographicLocation(getGeographicLocation $parameters)
    {
      return parent::invoke('getGeographicLocation', $parameters);
    }

}
