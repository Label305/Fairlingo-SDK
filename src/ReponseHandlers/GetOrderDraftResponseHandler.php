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
        return OrderDraftTransformer::toOrderDraft($response);
    }

}