<?php

namespace Fairlingo_SDK\Remote;

abstract class Request {

    /** @var array */
    protected $headers = [];

    /** @var array */
    protected $postParams = [];

    /**
     * @return string
     */
    abstract public function getEndpoint();

    /**
     * @return mixed
     */
    abstract public function getMethod();

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param string $header
     */
    public function addHeader($header)
    {
        $this->headers[] = $header;
    }

    /**
     * @return array
     */
    public function getPostParams()
    {
        return $this->postParams;
    }

    /**
     * @param $postParam
     */
    public function addPostParam($postParam)
    {
        $this->postParams[] = $postParam;
    }

}