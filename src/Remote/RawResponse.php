<?php

namespace Fairlingo_SDK\Remote;

class RawResponse {

    /** @var string */
    private $raw;

    /**
     * @param string $raw
     */
    public function __construct($raw)
    {
        $this->raw = $raw;
    }

    /**
     * @return string
     */
    public function getRaw()
    {
        return $this->raw;
    }

}