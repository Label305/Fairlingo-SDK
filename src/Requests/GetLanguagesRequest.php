<?php

namespace Fairlingo_SDK\Requests;

use Fairlingo_SDK\Remote\Request;

class GetLanguagesRequest extends Request
{
    /**
     * GetLanguagesRequest constructor.
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->addHeader('Authorization: Bearer ' . $apiKey); //TODO interceptors
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return "/languages";
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return 'GET';
    }

}