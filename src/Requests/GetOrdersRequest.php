<?php

namespace Fairlingo_SDK\Requests;

use Fairlingo_SDK\Remote\Request;

class GetOrdersRequest extends Request
{
    /**
     * GetLanguagesRequest constructor.
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->addHeader('Authorization: Bearer ' . $apiKey);
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return '/orders';
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return 'GET';
    }

}