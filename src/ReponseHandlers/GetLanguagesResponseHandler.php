<?php

namespace Fairlingo_SDK\ResponseHandlers;

use Fairlingo_SDK\Data\Languages\Language;
use Fairlingo_SDK\Transformers\LanguageTransformer;

class GetLanguagesResponseHandler extends JsonResponseHandler
{

    /**
     * @return Language[]
     */
    public function getHandledResponse()
    {
        $response = parent::getHandledResponse();
        return LanguageTransformer::toLanguages($response);
    }

}