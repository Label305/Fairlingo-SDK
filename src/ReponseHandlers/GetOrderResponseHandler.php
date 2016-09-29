<?php

namespace Fairlingo_SDK\ResponseHandlers;

use Fairlingo_SDK\Data\Orders\Order;
use Fairlingo_SDK\Transformers\OrderTransformer;

class GetOrderResponseHandler extends JsonResponseHandler
{

    /**
     * @return Order
     */
    public function getHandledResponse()
    {
        $response = parent::getHandledResponse();
        return OrderTransformer::toOrder($response);
    }
}