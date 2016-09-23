<?php

namespace Fairlingo_SDK\ResponseHandlers;

use Fairlingo_SDK\Transformers\OrderDraftTransformer;
use Fairlingo_SDK\Remote\ResponseHandler;

class SubmitOrderDraftResponseHandler extends ResponseHandler
{

    /**
     * @return \Fairlingo_SDK\Data\OrderDrafts\OrderDraft
     */
    public function getHandledResponse()
    {
        $response = json_decode($this->rawResponse->getRaw());
        return OrderDraftTransformer::toOrderDraft($response);
    }

}