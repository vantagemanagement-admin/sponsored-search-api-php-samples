<?php

namespace Jp\YahooApis\SS\V201901\AccountShared;

class mutateResponse
{

    /**
     * @var AccountSharedReturnValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\SS\V201901\Error $error
     */
    protected $error = null;

    /**
     * @param AccountSharedReturnValue $rval
     * @param \Jp\YahooApis\SS\V201901\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return AccountSharedReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param AccountSharedReturnValue $rval
     * @return \Jp\YahooApis\SS\V201901\AccountShared\mutateResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\SS\V201901\Error
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param \Jp\YahooApis\SS\V201901\Error $error
     * @return \Jp\YahooApis\SS\V201901\AccountShared\mutateResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
