<?php

namespace Fairlingo_SDK\Requests;

use Fairlingo_SDK\Remote\Request;

class GetLanguagesRequest extends Request
{

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