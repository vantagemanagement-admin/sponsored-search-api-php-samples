<?php

namespace Jp\YahooApis\SS\V201901\AccountShared;

class AccountSharedService extends \Jp\YahooApis\SS\AdApiSample\Util\Service
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
      'AccountShared' => 'Jp\\YahooApis\\SS\\V201901\\AccountShared\\AccountShared',
      'AccountSharedSelector' => 'Jp\\YahooApis\\SS\\V201901\\AccountShared\\AccountSharedSelector',
      'AccountSharedPage' => 'Jp\\YahooApis\\SS\\V201901\\AccountShared\\AccountSharedPage',
      'AccountSharedValues' => 'Jp\\YahooApis\\SS\\V201901\\AccountShared\\AccountSharedValues',
      'AccountSharedOperation' => 'Jp\\YahooApis\\SS\\V201901\\AccountShared\\AccountSharedOperation',
      'Operation' => 'Jp\\YahooApis\\SS\\V201901\\AccountShared\\Operation',
      'AccountSharedReturnValue' => 'Jp\\YahooApis\\SS\\V201901\\AccountShared\\AccountSharedReturnValue',
      'get' => 'Jp\\YahooApis\\SS\\V201901\\AccountShared\\get',
      'getResponse' => 'Jp\\YahooApis\\SS\\V201901\\AccountShared\\getResponse',
      'mutate' => 'Jp\\YahooApis\\SS\\V201901\\AccountShared\\mutate',
      'mutateResponse' => 'Jp\\YahooApis\\SS\\V201901\\AccountShared\\mutateResponse',
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
        $wsdl = 'https://ss.yahooapis.jp/services/V201901/AccountSharedService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
    }

    /**
     * @param get $parameters
     * @return getResponse
     */
    public function get(get $parameters)
    {
      return parent::invoke('get', $parameters);
    }

    /**
     * @param mutate $parameters
     * @return mutateResponse
     */
    public function mutate(mutate $parameters)
    {
      return parent::invoke('mutate', $parameters);
    }

}
