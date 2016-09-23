<?php

namespace Fairlingo_SDK\ResponseHandlers;

use Fairlingo_SDK\Transformers\OrderTransformer;
use Fairlingo_SDK\Remote\ResponseHandler;

class GetOrdersResponseHandler extends ResponseHandler
{

    /**
     * @return array
     */
    public function getHandledResponse()
    {
        $response = json_decode($this->rawResponse->getRaw());
        return OrderTransformer::toOrders($response);
    }

}