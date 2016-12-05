<?php

namespace Fairlingo_SDK\ResponseHandlers;

use Fairlingo_SDK\Data\OrderDrafts\OrderDraft;
use Fairlingo_SDK\Transformers\OrderDraftTransformer;

class GetOrderDraftResponseHandler extends JsonResponseHandler
{

    /**
     * @return OrderDraft
     */
    public function getHandledResponse()
    {
        $response = parent::getHandledResponse();

        if (property_exists($response, 'id')) {
            return OrderDraftTransformer::toOrderDraft($response);
        }

        return $response;
    }

}