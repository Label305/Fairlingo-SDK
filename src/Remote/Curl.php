<?php

namespace Fairlingo_SDK\Remote;

use Fairlingo_SDK\Remote\Exceptions\CurlException;

class Curl {

    /**
     * @var
     */
    private $ch;

    /**
     * Init curl
     */
    public function init()
    {
        $this->ch = curl_init();
    }

    /**
     * Set curl options
     *
     * @param $option
     * @param $value
     */
    public function setOption($option, $value)
    {
        curl_setopt($this->ch, $option, $value);
    }

    /**
     * Execute Curl
     *
     * @return mixed
     */
    public function execute()
    {
        return curl_exec($this->ch);
    }

    /**
     * Close curl
     */
    public function close()
    {
        curl_close($this->ch);
    }

    /**
     * @return int
     */
    public function lastErrorNumber()
    {
        return curl_errno($this->ch);
    }

    /**
     * @return string
     */
    public function lastError()
    {
       return curl_error($this->ch);
    }

    /**
     * Get Curl info
     *
     * @param $option
     * @return mixed
     */
    public function getInfo($option)
    {
        return curl_getinfo($this->ch, $option);
    }

    /**
     * get errors
     *
     * @return string
     */
    public function errors()
    {
        return curl_error($this->ch);
    }

    /**
     * @throws CurlException
     */
    public function checkHttpStatusOrFail()
    {
        $responseStatus = $this->getInfo(CURLINFO_HTTP_CODE);
        if ($responseStatus < 200 && $responseStatus > 299) {
            throw new CurlException("Invalid response status: " . $responseStatus);
        }
    }

    /**
     * @return string
     * @throws CurlException
     */
    public function failOnCurlErrors()
    {
        $responseErrors = $this->errors();
        if (!empty($responseErrors)) {
            throw new CurlException("Curl errors: " . $responseErrors);
        }

        return $responseErrors;
    }

}
    

