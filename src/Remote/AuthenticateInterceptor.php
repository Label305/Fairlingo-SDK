<?php

namespace Fairlingo_SDK\Remote;

class AuthenticateInterceptor implements RequestInterceptor
{
    /**
     * @var string $apiKey
     */
    private $apiKey;

    /**
     * AuthenticateInterceptor constructor.
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param Request $request
     * @return Request
     */
    public function intercept(Request $request)
    {
        $request->addHeader('Authorization', 'Bearer ' . $this->apiKey);
        return $request;
    }
}