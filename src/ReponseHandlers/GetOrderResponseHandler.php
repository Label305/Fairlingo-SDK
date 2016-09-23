<?php

namespace Fairlingo_SDK\ResponseHandlers;

use Fairlingo_SDK\Transformers\OrderTransformer;
use Fairlingo_SDK\Remote\ResponseHandler;

class GetOrderResponseHandler extends ResponseHandler
{

      public function getHandledResponse()
    {
        $response = json_decode($this->rawResponse->getRaw());
        return OrderTransformer::toOrder($response);
    }
}