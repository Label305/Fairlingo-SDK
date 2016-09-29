<?php

namespace Fairlingo_SDK\Remote;

abstract class Request {

    /** @var array */
    protected $headers = [];

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
     * Returns an array where the headers are formatted as: <header>: <value>
     * @return array
     */
    public function getFormattedHeaders()
    {
        $formattedHeaders = [];
        foreach ($this->getHeaders() as $key => $value) {
            $formattedHeaders[] = sprintf("%s: %s", $key, $value);
        }
        return $formattedHeaders;
    }

    /**
     * @param string $header
     * @param $value
     */
    public function addHeader($header, $value)
    {
        $this->headers[$header] =  $value;
    }

    /**
     * @return array
     */
    public function getPostParams()
    {
        return [];
    }

}