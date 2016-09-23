<?php

namespace Fairlingo_SDK\ResponseHandlers;

use Fairlingo_SDK\Transformers\LanguageTransformer;
use Fairlingo_SDK\Remote\ResponseHandler;

class GetLanguagesResponseHandler extends ResponseHandler
{

    /**
     * @return array
     */
    public function getHandledResponse()
    {
        $response = json_decode($this->rawResponse->getRaw());
        return LanguageTransformer::toLanguages($response);
    }

}