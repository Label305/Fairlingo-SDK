<?php

namespace Fairlingo_SDK\ResponseHandlers;

use Fairlingo_SDK\Remote\ResponseHandler;

class JsonResponseHandler extends ResponseHandler
{

    /**
     * @return mixed the value encoded in <i>json</i> in appropriate
     * PHP type. Values true, false and
     * null (case-insensitive) are returned as <b>TRUE</b>, <b>FALSE</b>
     * and <b>NULL</b> respectively. <b>NULL</b> is returned if the
     * <i>json</i> cannot be decoded or if the encoded
     * data is deeper than the recursion limit.
     */
    public function getHandledResponse()
    {
        return json_decode($this->rawResponse);
    }
}