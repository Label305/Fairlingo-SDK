<?php

namespace Fairlingo_SDK\Remote;

use Fairlingo_SDK\Remote\Exceptions\CurlException;

class Connection
{

    /** @var string */
    private $url;

    /** @var Curl */
    private $curl;

    /**
     * @var RequestInterceptor[] $interceptors
     */
     private $interceptors;

    /**
     * @param      $url
     * @param Curl $curl
     */
    public function __construct($url, Curl $curl)
    {
        $this->url = $url;
        $this->curl = $curl;
    }

    /**
     * @return RequestInterceptor[]
     */
    public function getInterceptors()
    {
        return $this->interceptors;
    }

    /**
     * @param RequestInterceptor[] $interceptors
     */
    public function setInterceptors($interceptors)
    {
        $this->interceptors = $interceptors;
    }

    /**
     * @param Request $request
     * @return RawResponse
     */
    public function doRequest(Request $request)
    {
        $this->curl->init();

        foreach ($this->getInterceptors() as $interceptor) {
            $interceptor->intercept($request);
        }

        return $this->doCurl($this->url . $request->getEndpoint(), $request->getFormattedHeaders(), $request->getMethod(),
            $request->getPostParams(), $this->curl);
    }

    /**
     * @param      $url
     * @param      $headers
     * @param      $httpMethod
     * @param      $postParams
     * @param Curl $curl
     * @return RawResponse
     * @throws CurlException
     */
    private function doCurl($url, $headers, $httpMethod, $postParams, Curl $curl)
    {
        $curl->setOption(CURLOPT_URL, $url);
        $curl->setOption(CURLOPT_RETURNTRANSFER, true);
        $curl->setOption(CURLOPT_SSL_VERIFYPEER, true);
        $curl->setOption(CURLOPT_SSL_VERIFYHOST, 2);
        $curl->setOption(CURLOPT_HEADER, false);
        $curl->setOption(CURLOPT_HTTPHEADER, $headers);
        $curl->setOption(CURLOPT_FOLLOWLOCATION, true);

        if ($httpMethod == "POST") {
            $curl->setOption(CURLOPT_CUSTOMREQUEST, $httpMethod);
            $curl->setOption(CURLOPT_POSTFIELDS, json_encode($postParams));
            $curl->setOption(CURLOPT_RETURNTRANSFER, true);
        }
        $rawResponse = $curl->execute();
        $curl->checkHttpStatusOrFail();
        $curl->failOnCurlErrors();

        $curl->close();

        return new RawResponse($rawResponse);
    }

}