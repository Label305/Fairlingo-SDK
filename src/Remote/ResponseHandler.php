<?php

namespace Fairlingo_SDK\Remote;

abstract class ResponseHandler {

    /** @var RawResponse */
    protected $rawResponse;

    /**
     * @param RawResponse $rawResponse
     */
    public function __construct(RawResponse $rawResponse)
    {
        $this->rawResponse = $rawResponse;
    }

    public function getHandledResponse() {
        return $this->rawResponse->getRaw();
    }
    
}